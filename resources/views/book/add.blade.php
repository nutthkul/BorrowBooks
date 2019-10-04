<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Add new book</h1>
</div >
    <div class="container">
    <form>
        <div class="form-group">
        <label for="book_name">Book name</label>
            <input type="name" class="form-control" placeholder="input book name" id="book_name">
         </div>
        <div class="form-group">
            <label for="book_name">Book type</label>
            <select class="custom-select">
                    <option selected>Select type</option>
                    <option value="1">BKP_01</option>
                    <option value="2">mom and child</option>
                    <option value="3">Fiction</option>
                    <option value="4">study and learn</option>
                    <option value="5">travel</option>
            </select>
        </div>
        <div class="form-group">
        <label for="qty">Quantity</label>
            <input type="name" class="form-control" placeholder="input quantity" id="qty">
         </div>
         <button type="button" class="btn btn-success btn-md">Save</button>
    </form>
    
</div>
</body>
</html>