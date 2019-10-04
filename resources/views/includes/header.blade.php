<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('book.index') }}">Dashboard <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Borrow
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('borrow.create') }}">Borrow Book</a>
                <a class="dropdown-item" href="{{ route('borrow.edit') }}">Return Book</a>

            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage Books
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Create Book</a>
                <a class="dropdown-item" href="#">Modify Borrow</a>
                {{-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div> --}}
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <a class="nav-link btn btn-outline-success mr-sm-2" href="#">Register <span class="sr-only">(current)</span></a>
            <a class="nav-link btn btn-outline-primary my-2 my-sm-0" href="#">Login <span class="sr-only">(current)</span></a>
        </form>

    </div>
</nav>

