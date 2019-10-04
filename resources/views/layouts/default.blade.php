<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
{{-- #####################Content###################### --}}
    <div class="container">
        <div id="main" class="row">

                @yield('content')

        </div>
    </div>
{{-- ################################################# --}}
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        @include('includes.footer')
    </footer>
    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>


{{-- use in content page --}}
{{-- @extends('layouts.default')
@section('content')
    i am the home page
@stop --}}
