<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <nav class="navbar navbar-light" style="background-color: #000000;">           
                    
                             
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
                <a class="btn btn-dark" href="#" style="margin-right: 5px" >Login</a>
                <a class="btn btn-secondary" href="#">Register</a>
                @endif
                
                </div>
              </nav>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
<script src="{{asset('js/app.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    body{
        /* margin-top: 40px; */
        color: #608061;
        background-color: #000000;
    }
</style>
</head>
<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">              
            
        <div class="col-10 offset-2" align="right">
            <h1>
                <a href="#" class="btn btn-outline-primary"> + Add Book </a>
            </h1>
        </div>
    <div class="row">
            <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">รูปหนังสือ</th>
                        <th scope="col">หนังสือ</th>
                        <th scope="col">ผู้เขียน</th>
                        <th scope="col">คำบรรยาย</th>
                        <th scope="col">ราคา</th>
                        <th scope="col">ประเภท</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            @foreach($books as $key => $book)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <th>{{ $book->pic }}</th>
                                <th>{{ $book->name }}</th>
                                <th>{{ $book->author }}</th>
                                <th>{{ $book->describe }}</th>
                                <th>{{ $book->price }}</th>
                                <th>{{ $book->type }}</th>
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
  
    </div> 
</body>
</html>


