<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('borrow.index',compact('books'));
        
    }
    public function add()
    {
        $book = new Book();
        $book->book_id = $request->book_id;
        $book->book_name = $request->book_name;
        $book->book_type = $request->book_type;
        
    }
}
