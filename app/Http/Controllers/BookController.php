<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Borrow;

class BookController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $borrow = Borrow::all();
        // dd(sizeof($borrow->toArray()));
        return view('borrow.index',compact('borrow'));
        
=======
        $books = Book::all();
        return view('book.index',compact('books'));
    }
    public function createIndex()
    {
        return view('book.create');
>>>>>>> master
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $book = new Book();
        $book->book_name = $request->book_name;
        $book->book_type = $request->book_type;
        $book->save();
        return redirect()->route('book.index');
    }
    public function editIndex(Book $id)
    {
        return view('book.edit', ['book' => $id]);
    }
    public function edit(Request $request)
    {
        
        $book = Book::find($request->id);
        
        $book->book_name = $request->book_name;
        $book->book_type = $request->book_type;
        
        $book->save();
        return redirect()->route('book.index');
    }

    public function deleteIndex(Book $id)
    {
        $id->delete();
        return redirect()->route('book.index');
    }
}
