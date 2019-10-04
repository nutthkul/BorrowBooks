@extends('layouts.default')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1><strong>Add New Borrower</strong></h1>
            </div>
        </div>
        
        <div class="row justify-content-center" style="padding-top:50px; padding-bottom:50px;">
            <div class="col-6">
                <form action={{ Route('borrow.create')}} method="post">
                  @csrf
                    <div class="form-group">
                        <label for="name">Book ID</label>
                        <input type="text" class="form-control" placeholder="Book ID" name="book_id">
                    </div>
                    <div class="form-group">
                        <label for="text">Lib ID</label>
                        <input type="text" class="form-control" placeholder="Lib ID" name="lib_id">
                    </div>
    
                    <div class="form-group">
                        <label for="StudentId">Student ID</label>
                        <input type="text" class="form-control" placeholder="Student ID" name="student_id">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-3 offset-9" align="right">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
@stop
