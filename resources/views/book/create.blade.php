@extends('layouts.default')
@section('content')
<body>

    <div style="padding-bottom:50px">
      <h1>Add new book</h1>
    </div >
        <div class="container">
        <form action="{{route('book.create')}}" method="post">
            @csrf
            <div class="form-group">
            <label for="book_name">Book name</label>
                <input type="text" name="book_name" class="form-control" placeholder="input book name" id="book_name">
             </div>
            <div class="form-group">
                <label for="book_name">Book type</label>
                <select class="custom-select" name="book_type">
                        <option selected>Select type</option>
                        <option>BKP_01</option>
                        <option>mom and child</option>
                        <option>Fiction</option>
                        <option>study and learn</option>
                        <option>travel</option>
                </select>
            </div>
            <div class="form-group">
            <label for="qty">Quantity</label>
                <input type="" class="form-control" placeholder="input quantity" id="qty" name="qty">
             </div>
             <button type="submit" class="btn btn-success btn-md">Save</button>
        </form>
        
    </div>
    </body>
    </html>
@stop