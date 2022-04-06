<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;

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
    return view('welcome');
});

// Route::get('/books', function () {
//     $books = Book::all();
//     return view('books',['books'=> $books]);
// });
Route::get('/books',[BooksController::class,'BookList']);
Route::post('/book',[BooksController::class,'BookCreate']);
