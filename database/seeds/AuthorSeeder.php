<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count_books = 50;
        $count_authors = 10;
        $count_PublishingOffices = 5;
        //Книги
        $books = [];
        for($i = 1; $i <= $count_books; $i++){
            $title = 'Книга №'.$i;
            $books[] = [
                'id'         => $i,
                'title'         => $title,
            ];
        }
        \DB::table('books')->insert($books);

        //Автора
        $authors = [];
        for($i = 1; $i <= $count_authors; $i++){
            $aName = 'Автор №'.$i;

            $authors[] = [
                'id'         => $i,
                'name'         => $aName,
            ];
        }
        \DB::table('authors')->insert($authors);

        //Издательства
        $PublishingOffices = [];
        for($i = 1; $i <= $count_PublishingOffices; $i++){
            $poName = 'Издательство №'.$i;

            $PublishingOffices[] = [
                'id'         => $i,
                'name'         => $poName,
            ];
        }
        \DB::table('publishing_offices')->insert($PublishingOffices);

        //Книга -> автор
        $book_authors = [];
        for ($id_book = 1; $id_book <= $count_books; $id_book++) {
            $count_book_authors = rand(1, 3);
            $shift = rand(1, $count_authors-3);
            for ($id_author = 1; $id_author <= $count_book_authors; $id_author++) {
                $book_authors[] = [
                    'book_id' => $id_book,
                    'author_id' => $id_author+$shift,
                ];
            }
        }
        \DB::table('author_book')->insert($book_authors);

        //Книга -> издательство
        $book_PublishingOffices = [];
        for ($id_book = 1; $id_book <= $count_books; $id_book++) {
            $count_po = rand(1, 3);
            $shift = rand(1, $count_PublishingOffices-3);
            for ($id_po = 1; $id_po <= $count_po; $id_po++) {
                $book_PublishingOffices[] = [
                    'book_id' => $id_book,
                    'publishing_office_id' => $id_po+$shift,
                ];
            }
        }
        \DB::table('book_publishing_office')->insert($book_PublishingOffices);
    }
}
