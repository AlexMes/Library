# Installation
For correct installation on your server must be installed php 7.x, MySql;

- Clone project to local machine
```bash
git clone https://github.com/AlexMes/Library.git 
```

- create database and make changes in .env
- run command 
```bash
php artisan migrate
php artisan db:seed --class=AuthorSeeder
```

#Home page
List of books. Each line contains the title of the book, the names of the authors, 
and the name of the publisher. The list has ajax pagination.

#API
- get, '/api/book/' - list of books.
- get, '/api/book/{id}' - bookby id.
- post, '/api/book/create' - Query Params 'title'. Created new book.
- put, '/api/book/{id}' - Query Params 'title'. Update book by id.
- delete, '/api/book/{id}' - Delete by id.

#Realizable logic
The database contains tables:
- books
- authors
- publishing_offices
- book_publishing_office
- author_book

Table `books` has a many-to-many relationship with tables `authors` and `publishing_offices`,
used tables `book_publishing_office` and `author_book`.
For output the names of the authors, and the name of the publisher used `belongsToMany()` method 
in model `app/Models/Book`.