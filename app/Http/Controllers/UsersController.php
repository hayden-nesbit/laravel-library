<?php

namespace App\Http\Controllers;

use App\User;
use App\Check;
use App\Author;
use App\Book;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
    
        return view('users.index', ['users' => $user]);
    }
    
    public function show(User $user)
    {
        $userChecks = $user->checks;
        return view('users.show', ['user' => $user, 'checks' => $userChecks]);
    }

    public function create()
    {
        // return view('authors.create', [
        //     'books' => Book::all()
        // ]);
    }
}
