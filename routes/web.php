<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'authors' => App\Author::all()
    ]);
});

Route::get('/allbooks', function () {

    return view('books.index', [
        'books' => App\Book::latest()->get()
    ]);

});

Route::get('/allauthors', function () {

    return view('authors.index', [
        'authors' => App\Author::all()
    ]);

});

Route::get('/allusers', function () {

    return view('users.index', [
        'users' => App\User::all()
    ]);
});

// Route::get('/books/create', function () {

//     return view('books.create', [
//         'books' => App\Book::all(),
//     ]);
// });

Route::get('/books', 'BooksController@index');
Route::post('books/', 'BooksController@store');
Route::get('/books/create', 'BooksController@create');
Route::get('/books/{book}/edit', 'BooksController@edit');
Route::get('/books/{book}', 'BooksController@update');
Route::get('/books/{book}', 'BooksController@show')->name('books.show');
Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/{author}', 'AuthorsController@show')->name('authors.show');
Route::get('/users', 'UsersController@index');
Route::put('/users/{user}/', 'UsersController@update');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
