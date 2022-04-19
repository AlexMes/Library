<?php


namespace App\Http\Controllers;

use App\Author;
use App\Models\Book;
use Illuminate\Http\Request;


class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


       /* //$books = Book::paginate(15);
        $books = Book::find(1);

        //dd($books->authors);
        dd($books->publishingOffices);*/




        return view('library.home');
    }

}