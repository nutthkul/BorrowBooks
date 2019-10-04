<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index',compact('books'));
    }
    public function createIndex()
    {
        return view('book.create');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $book = new Book();
        $book->book_name = $request->book_name;
        $book->book_type = $request->book_type;
        $book->qty = $request->qty;
        $book->save();
    }
}
