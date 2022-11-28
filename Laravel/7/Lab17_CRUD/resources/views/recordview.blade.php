<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($view_key as $item)
 
    <h1>{{$item->emp_fn}}</h1>
    <p>{{$item->emp_email}}</p>
    <p>{{ $item->emp_mobile }}</p>
    <p>{{$item->emp_city}}</p>
@endforeach
</body>
</html>