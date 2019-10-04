@extends('layouts.default')
@section('content')
 
 
  Book ID  = {{$borrow->id}} <br>
  Student ID = {{$borrow->borrower_id}} <br>
  <a class="btn btn-success" href="{{route('borrow.delete.index', $borrow->id)}}" > return book </a>
@stop