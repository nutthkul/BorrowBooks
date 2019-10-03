<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function borrowPage() {
        return view('borrow.borrowpage');
    }
}
