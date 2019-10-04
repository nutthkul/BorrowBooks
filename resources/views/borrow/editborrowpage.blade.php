<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

    book id  = {{$borrow->id}} <br>
    studnet id ={{$borrow->borrower_id}} <br>

    <th><a href="{{route('borrow.delete.index', $borrow->id)}}" > return book </a></th>

</body>
</html>