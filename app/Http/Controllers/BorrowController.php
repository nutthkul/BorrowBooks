<?php

namespace App\Http\Controllers;
use App\Borrow;
use Illuminate\Http\Request;
use DateTime;

class BorrowController extends Controller
{
    public function createIndex() {
        return view('borrow.borrowpage');
    }

    public function create(Request $request) 
    {
        $borrow_date = new DateTime();
        $borrow_date_format = $borrow_date->format('Y-m-d');

        $return_date = new DateTime();
        $return_date_format = $return_date->format('Y-m-d');

        $borrowBook = new Borrow();
        $borrowBook->borrow_date =  $borrow_date_format;
        $borrowBook->return_date =  $return_date_format;
        $borrowBook->lib_id = $request->lib_id;
        $borrowBook->borrower_id = $request->student_id;
        $borrowBook->book_id = $request->book_id;
        $borrowBook->status = 1;

  
        if(!$borrowBook->save()){
            return redirect()->route('borrow.create.index');
        }
        return redirect()->route('book.index');
    }

    public function editIndex(Borrow $id)
    {
        return view('borrow.editborrowpage', ['borrow' => $id]);

    }

    public function deleteIndex(Request $request)
    {
        $borrow = Borrow::find($request->id);
        $borrow->status = 2;
        $borrow->save();
        return redirect()->route('book.index');
    }

    public function editIndex(Borrow $id)
    {
        return view('borrow.editborrowpage', ['borrow' => $id]);

    }

    public function deleteIndex(Request $request)
    {
        $borrow = Borrow::find($request->id);
        $borrow->status = 2;
        $borrow->save();
        return redirect()->route('test');
    }
}
