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
  
  <h2>Customer Data <a class="btn btn-info" href="/category-create">Add Car for Resell</a></h2>   
  <!-- <a href="{{ route('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>          -->
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Car Name</th>
        <th>Car Type</th>
        <th>Price</th>
        <th>Speed</th>
        <th>Status</th>
        <th>Car Images</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      @csrf
      @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->Name}}</td>
        <td>{{$category->Type}}</td>
        <td>{{$category->Price}}</td>
        <td>{{$category->Speed}}</td>
        <td>{{$category->Status}}</td>
        <td><img src="Images/{{ $category->Images }}" width="80px" height="80px" alt=""></td>
        <td>
        <a href="/category-edit/{{ $category->id }}" class="btn btn-sm btn-info">Update Status</a>
          <!-- <button class="btn btn-sm btn-danger">Delete</button> -->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
