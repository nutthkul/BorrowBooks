<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Store</title>
    {{-- <script src="{{asset('js/app.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
<style>
    body{
        /* margin-top: 40px; */
        color: #608061;
        background-color: #000000;
    }
</style>
  </head>
  <body>
      
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
    <div class="col-10 offset-2" align="right" style="padding-bottom: 20px">
        <a class="btn btn-dark" href="#" style="margin-right: 5px; " >Login</a>
        <a class="btn btn-secondary" href="#" >Register</a>
    </div>
        @endif
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
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
                  <div class="mr-5">11 New Tasks!</div>
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
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">123 New Orders!</div>
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
                  <div class="mr-5">13 New Tickets!</div>
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
                    <a href="#" class="btn btn-outline-primary"> + Add Book </a>
                </h1>
            </div>
           
            <table class="table table-borderless table-dark">
                    <thead>
                            <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">book id</th>
                                    <th scope="col">Book name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Describe</th>
                                    <th scope="col">Action</th>
                                    
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                             
                            @foreach($books as $key => $book)
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <th>{{ $book->book_id }}</th>
                                    <th>{{ $book->book_name }}</th>
                                    <th>{{ $book->book_type }}</th>
                                    
                                    <th>
                                    <a href="#" class="btn btn-outline-warning"> Edit</a>
                                    </th>
                                    <th>
                                    <a href="#" class="btn btn-outline-danger"> Delete</a>
                                    </th>
                                </tr>
                                    
                            @endforeach   
                        </tr>
                    </tbody>
                  </table>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>