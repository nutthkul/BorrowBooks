{{-- use in content page --}}
@extends('layouts.default')
@section('content')

      
<div class="container justify-content-end">
    <h1 class="display-5"><strong>
        <a href="{{ route('book.index')}}" class="main" style="margin-right: 780px" >Book Store</a>
                    </strong></h1>
@if(!empty(\Illuminate\Support\Facades\Auth::user()))
{{-- <a class="=nav-link login" herf="#" style="margin-right: 10px" >
    </a> --}}
    <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Illuminate\Support\Facades\Auth::user()->name}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('user.regis')}}">Register</a>
                <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
            </div>
          </div>

{{-- <a class="nav-link active" href="#">Active</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}

@else
{{-- <div class="col-10 offset-2" align="right" style="padding-bottom: 20px">
<a class="btn btn-dark" href="#" style="margin-right: 5px; " >Login</a>
<a class="btn btn-secondary" href="#" >Register</a>
</div> --}}
@endif



<?php 
    $count_all = sizeof($borrow->toArray());
    $count_1 = 0;
    $count_2 = 0;
    $count_3 = 0;
 ?>
@foreach($borrow as $key => $br)

    @if ($br->status == 1)
      <?php 
        $count_1 += 1
      ?>
    @elseif ($br->status == 2)
      <?php 
        $count_2 += 1
      ?>
    @else
      <?php 
        $count_3 += 1
      ?>
    @endif
@endforeach 



<div class="row" style="padding-top:25px">
  <div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-success o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-fw fa-shopping-cart"></i>
      </div>
      <div class="mr-5"><h4>All Borrowed {{ $count_all }}</h4></div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fas fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-primary o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-fw fa-comments"></i>
      </div>
      <div class="mr-5"><h4>{{ $count_1 }} books not returned yet.</h4></div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fas fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-warning o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-fw fa-list"></i>
      </div>
      <div class="mr-5"><h4>{{ $count_2 }} books returned.</h4></div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fas fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>

<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-danger o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-fw fa-life-ring"></i>
      </div>
      <div class="mr-5"><h4>{{ $count_3 }} books are overtiming.</h4></div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fas fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
</div>

<div class="col-10 offset-2" align="right">
    <h1>
        <a href="{{ route('borrow.create') }}" class="btn btn-outline-primary"> + Borrow </a>
    </h1>
</div>

<table class="table table-borderless table-dark">
        <thead>
                <tr>
                        <th scope="col">#</th>
                        <th scope="col">Borrower ID</th>
                        <th scope="col">librarian ID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Borrow Date</th>
                        <th scope="col">Book ID</th>
                        <th scope="col">Action</th>
                        
                </tr>
        </thead>
        <tbody>
                <tr>
                  
                @foreach($borrow as $key => $borrow1)
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <th>{{ $borrow1->borrower_id }}</th>
                        <th>{{ $borrow1->lib_id }}</th>
                        <th>{{ $borrow1->status }}</th>
                        <th>{{ $borrow1->borrow_date }}</th>
                        <th>{{ $borrow1->book_id }}</th>
                        
                        <th>
                        <a href="/borrow/edit/{{$borrow1->id}}" class="btn btn-outline-warning"> Return Book</a>
                        </th>
                    </tr>
                @endforeach   
            </tr>
        </tbody>
      </table>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@stop
