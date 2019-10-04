@extends('layouts.default')
@section('content')
<body>
    <div style="padding-bottom:50px">
      <h1>Edit book</h1>
    </div >
        <div class="container">
        <form action="{{route('book.edit')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
            <div class="form-group">
            <label for="book_name">Book name</label>
            <input type="text"  value="{{$book->book_name}}" name="book_name" class="form-control" placeholder="input book name" id="book_name">
             </div>
            <div class="form-group">
                <label for="book_name">Book type</label>
                <select class="custom-select" name="book_type">
                  @if($book->book_type == "BKP_01")
                    <option selected>BKP_01</option>
                    <option>mom and child</option>
                    <option>Fiction</option>
                    <option>study and learn</option>
                    <option>travel</option>
                  @elseif($book->book_type == "mom and child")
                    <option>BKP_01</option>
                    <option selected>mom and child</option>
                    <option>Fiction</option>
                    <option>study and learn</option>
                    <option>travel</option>
                  @elseif($book->book_type == "Fiction")
                    <option>BKP_01</option>
                    <option >mom and child</option>
                    <option selected>Fiction</option>
                    <option>study and learn</option>
                    <option>travel</option>
                  @elseif($book->book_type == "study and learn")
                    <option>BKP_01</option>
                    <option >mom and child</option>
                    <option>Fiction</option>
                    <option selected>study and learn</option>
                    <option>travel</option>
                  @elseif($book->book_type == "travel")
                    <option>BKP_01</option>
                    <option >mom and child</option>
                    <option>Fiction</option>
                    <option >study and learn</option>
                    <option selected>travel</option>
                  @endif
                </select>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-success">Save Edit</button>
          
          </div>
        </form>
        
    </div>
    </body>
    </html>
@stop
