<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Categories </h2>
              
  <div class="row"></div>
  <div class="col-sm-4"></div>
  
  <!-- <form method="POST" action="{{url('category/{category}')}}" enctype="multipart/form-data"> -->
<form method="POST" action="/category-update/{{$category->id}}" enctype="multipart/form-data">
    @csrf
    @method('put')
   <!-- <label>Title</label>
   <input type="text" name="title" class="form-control" value="{{$category->title}}">
   @if($errors->has('title'))
     <p class="text-danger">{{$errors->first('title')}}</p>
   @endif -->
   <label>Name</label>
   <input type="text" name="Name" class="form-control" value="{{$category->Name}}">
   @if($errors->has('Name'))
     <p class="text-danger">{{$errors->first('Name')}}</p>
   @endif
   <label>Type</label>
   <input type="text" name="Type" class="form-control" value="{{$category->Type}}">
   @if($errors->has('Type'))
     <p class="text-danger">{{$errors->first('Type')}}</p>
   @endif
   <label>Price</label>
   <input type="text" name="Price" class="form-control" value="{{$category->Price}}">
   @if($errors->has('Price'))
     <p class="text-danger">{{$errors->first('Price')}}</p>
   @endif
   <label>Speed</label>
   <input type="Speed" name="Speed" class="form-control" value="{{$category->Speed}}">
   @if($errors->has('Speed'))
     <p class="text-danger">{{$errors->first('Speed')}}</p>
   @endif
   <label>Status</label>
   <input type="Status" name="Status" class="form-control" value="{{$category->Status}}">
   @if($errors->has('Status'))
     <p class="text-danger">{{$errors->first('Status')}}</p>
   @endif
   <label>Images</label>
   <input type="file" name="Images" class="form-control" value="{{$category->Images}}">
   @if($errors->has('Images'))
     <p class="text-danger">{{$errors->first('Images')}}</p>
   @endif
   
   <button type="submit" href="{{url('category/{category}')}}">Update</button>
  </form>
</div>

</body>
</html>

</body>
</html>