<?php

namespace App\Http\Controllers;

use App\Author;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {

        return view('authors.index', ['authors' => $author]);
    }
    
    public function show(Author $author)
    {

        return view('authors.show', ['author' => $author]);
    }

    public function create(Author $authors)    
    {
        {
            //if $authors is empty, do same query from route
            return view('authors.create', ['authors' => $authors]);
        }
    }

    public function store(Author $author)
    {
        return view('authors.store');
    }
}
