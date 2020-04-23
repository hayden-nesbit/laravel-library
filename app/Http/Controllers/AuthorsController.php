<?php

namespace App\Http\Controllers;

use App\Author;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        // if (request('tag')){
        //     $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        // } else {

        //     $articles = Article::latest()->get();
        // }


        return view('authors.index', ['authors' => $author]);
    }
    
    public function show(Author $author)
    {

        return view('authors.show', ['author' => $author]);
    }
}
