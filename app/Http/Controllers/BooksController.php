<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{

    public function BookList() {
        $books = Book::all();
        return view('books',['books'=> $books]);
    }

    
    Public function BookCreate(Request $request) {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|max:255',
        // ]);
    
        $book = new Book;
        $book->title = $request->name;
        $book->code = $request->code;
        $book->save();
    
        return redirect('/books');
    }

    
}
