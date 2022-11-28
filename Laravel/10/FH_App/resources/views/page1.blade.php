<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<h1 class="text-center text-info">Show Products Image</h1>
<a href="{{route('r_photo.create')}}" class="btn btn-success">Add Image</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($pic_key as $item)
    <tr>
      <th scope="row">{{$item->pic_id}}</th>
      <td><img src="images/{{$item->pic_image}}" width="150" height="100"/></td>
     
    </tr>
   @endforeach
   
  </tbody>
</table>





</div>
   



</body>
</html>