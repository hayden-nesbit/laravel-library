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
        // $bookChecks = $book->checks;
        return view('books.show', ['book' => $book]);
        // 'checks' => $bookChecks
        
    }

    public function create(Book $book)
    {
        return view("books.create");
    }

    public function store(Book $book)
    {
        $book = new Book();

        $book->title = request('title');
        $book->excerpt = request('excerpt');
        $book->genre = request('genre');

        $book->save();

        return redirect('/allbooks');

    }

    public function edit(Book $book)
    {
       
        return redirect('books.edit', ['books' => $books]);

    }




}
