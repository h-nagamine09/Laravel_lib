<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
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

//書籍登録ルーティング
Route::get('/books',[BooksController::class,'BookList']);
Route::post('/book',[BooksController::class,'BookCreate']);


// ユーザー登録ルーティング
Route::get('/users/addUser',[UsersController::class,'addUser']);
Route::post('/users/confirmUser',[UsersController::class,'userConfirm']);
Route::post('/users/completeUser',[UsersController::class,'userComplete']);
//ログイン
Route::get('/users/login',function() {
    return view('/users/login');
});