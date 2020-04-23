<?php

namespace App\Http\Controllers;

use App\Book;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        // if (request('tag')){
        //     $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        // } else {

        //     $articles = Article::latest()->get();
        // }


        return view('books.index', ['books' => $book]);
    }
    
    public function show(Book $book)
    {
        // $authors = $book->authors;
        return view('books.show', ['book' => $book]);
    }

}
