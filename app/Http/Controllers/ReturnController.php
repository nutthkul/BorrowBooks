<?php

namespace App\Http\Controllers;

use App\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnController extends Controller
{
    public function editIndex($id)
    {
        // dd($id);
        return view('return.edit', ['borrow' => $id]);
    }

    public function edit(Request $request)
    {
        // dd($request->all());
        $borrow = Borrow::find($request->id);
        $borrow->return_date = $request->return_date;

        $borrow->save();

        return redirect()->route('book.index');
    }

}
