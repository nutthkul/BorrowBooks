<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function librarianCanSeeBorrow()
    {
        $books = Book::all();
        return view('borrow.index',compact('books'));
    }
}
