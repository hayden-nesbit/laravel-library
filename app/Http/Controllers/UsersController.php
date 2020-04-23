<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
    
        return view('users.index', ['users' => $user]);
    }
    
    public function show(User $user)
    {

        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        // return view('authors.create', [
        //     'books' => Book::all()
        // ]);
    }
}
