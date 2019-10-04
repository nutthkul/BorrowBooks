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
    <footer>
        @include('includes.footer')
    </footer>

</body>
</html>


{{-- use in content page --}}
{{-- @extends('layouts.default')
@section('content')
    i am the home page
@stop --}}
