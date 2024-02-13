<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listing Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <h2>New Category</h2>
       
  <div class="row"></div>
  <div class="col-sm-8"></div>
  <form method="POST" action="/category-store" enctype="multipart/form-data"> 
    <!-- <form method="POST" action="{{url('category')}}" enctype="multipart/form-data"> -->
    @csrf
   <label>Name</label>
   <input type="text" name="Name" class="form-control" value="{{old('Name')}}">
   @if($errors->has('Name'))
     <p class="text-danger">{{$errors->first('Name')}}</p>
   @endif
   <label>Type</label>
   <input type="text" name="Type" class="form-control"  value="{{old('Type')}}">
   @if($errors->has('Type'))
     <p class="text-danger">{{$errors->first('Type')}}</p>
   @endif
   <label>Price</label>
   <input type="text" name="Price" class="form-control"  value="{{old('Price')}}">
   @if($errors->has('Price'))
     <p class="text-danger">{{$errors->first('Price')}}</p>
   @endif
   <label>Speed</label>
   <input type="Speed" name="Speed" class="form-control"  value="{{old('Speed')}}">
   @if($errors->has('Speed'))
     <p class="text-danger">{{$errors->first('Speed')}}</p>
   @endif
   <label>Status</label>
   <input type="Status" name="Status" class="form-control"  value="{{old('Status')}}">
   @if($errors->has('Status'))
     <p class="text-danger">{{$errors->first('Status')}}</p>
   @endif
   <label>Images</label>
   <input type="file" name="Images" class="form-control" >
   @if($errors->has('Images'))
     <p class="text-danger">{{$errors->first('Images')}}</p>
   @endif
   <button type="submit" href="{{url('category')}}">Create</button>
  </form>
</div>
  
</div>

</body>
</html>
