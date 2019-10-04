<!doctype html>
<html lang="en">
<head>
    <div class="container">             
        <h1 class="display-5"><strong>
                <a href="{{ route('book.index')}}" class="main">Book Store</a>
                        </strong></h1>
                    </div>
                </div>
  <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin-top: 40px;
            color: white;
            background: #414141;
        }
        .btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: rgba(0,0,0,0.2);
}

.btn-social {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.btn-social:hover {
    color: #eee;
}

.btn-social :first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 40px;
    padding: 7px;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0,0,0,0.2);
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 offset-2">
                <h1><strong>Login</strong></h1>
            </div>
        </div>
        
          <div class="row">
            <div class="col-3 offset-3">
            </div>
          </div>
        <div class="row justify-content-center">
            <div class="col-6">
             
            <form action="{{route('user.login')}}" method="POST">
                @csrf
                    <div class="form-group">
                        
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input
                            type="email" class="form-control"
                            id="email" aria-describedby="emailHelp" placeholder="Enter Email" name="email" required>
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>
                    @if (session('error'))
                                <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                                @endif
                    <div class="container">
                        <div class="row">
                                <div class="container">
                                <a class="btn btn-lg btn-social btn-facebook" href="{{route('user.login.facebook')}}">
                                        <i class="fa fa-facebook"></i> Sign in with Facebook
                                        </a>
                                    </div>
                        <div class="col-3 offset-9" align="right">
                                
                                <h1>
                                    <a href="{{route('user.regis')}}" class="btn btn-outline-primary"> Register now</a>
                                </h1>
                                <button type="submit" class="btn btn-primary">Login</button>
                                
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
​
​
</body>
</html>




