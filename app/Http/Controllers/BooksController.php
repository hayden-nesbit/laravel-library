<?php

namespace App\Http\Controllers;

use App\Book;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('books.index', ['books' => $book]);
    }
    
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }


}
