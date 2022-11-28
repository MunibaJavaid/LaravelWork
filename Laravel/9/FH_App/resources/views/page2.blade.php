<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fileupload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<h1 class="text-center text-info">Show Products Image</h1>
<form action ="{{route('r_photo.store')}}" method ="post" enctype ="multipart/form-data" >
@csrf
  <div class="form-group">
    <label >Choose Image</label>
    <input type="file" class="form-control" name="pic_upload" >
    
  </div>
 
  <button type="submit" class="btn btn-primary">Upload</button>
  <a href="{{route('r_photo.index')}}" class="btn btn-dark">View All</a>
</form>
</div>
</body>
</html>