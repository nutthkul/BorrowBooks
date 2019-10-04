<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Borrow;

class BookController extends Controller
{
    public function index()
    {
        $borrow = Borrow::all();
        // dd(sizeof($borrow->toArray()));
        return view('borrow.index',compact('borrow'));
        
    }
    public function add()
    {
        $book = new Book();
        $book->book_id = $request->book_id;
        $book->book_name = $request->book_name;
        $book->book_type = $request->book_type;
        
    }
}
