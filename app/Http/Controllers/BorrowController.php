<?php

namespace App\Http\Controllers;
use App\Borrow;
use Illuminate\Http\Request;
use DateTime;

class BorrowController extends Controller
{
<<<<<<< HEAD
    public function addBorrow() {
        dd(1);
=======
    public function createIndex() {
        return view('borrow.borrowpage');
>>>>>>> addFileMigrations
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
        $borrowBook->status = 1;

  
        if(!$borrowBook->save()){
            return redirect()->route('borrow.create.index');
        }
        return redirect()->route('test');
    }
}
