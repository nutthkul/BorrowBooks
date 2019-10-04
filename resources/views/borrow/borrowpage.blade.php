<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Borrower</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="{{ asset('js/app.js') }}"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
            <h1><strong>Add New Borrower</strong></h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
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
</body>
</html>