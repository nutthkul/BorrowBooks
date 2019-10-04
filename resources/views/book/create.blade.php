@extends('layouts.default')
@section('content')
<body>

    <div style="padding-bottom:50px">
      <h1>Add new book</h1>
    </div >
        <div class="container">
        <form action="{{route('book.create')}}" method="post">
            <div class="form-group">
            <label for="book_name">Book name</label>
                <input type="name" class="form-control" placeholder="input book name" id="book_name">
             </div>
            <div class="form-group">
                <label for="book_name">Book type</label>
                <select class="custom-select">
                        <option selected>Select type</option>
                        <option value="1">BKP_01</option>
                        <option value="2">mom and child</option>
                        <option value="3">Fiction</option>
                        <option value="4">study and learn</option>
                        <option value="5">travel</option>
                </select>
            </div>
            <div class="form-group">
            <label for="qty">Quantity</label>
                <input type="name" class="form-control" placeholder="input quantity" id="qty">
             </div>
             <button type="button" class="btn btn-success btn-md">Save</button>
        </form>
        
    </div>
    </body>
    </html>
@stop