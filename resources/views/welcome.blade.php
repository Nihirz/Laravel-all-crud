<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Index</title>
  </head>
  <body>
    <div class="container">
        <h1 class="h1">Laravel Complete Form Submitting</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
    </div>
    <div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Hobby</th>
      <th scope="col">City</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($index as $index)
    <tr>
      <th scope="row">{{$index->id}}</th>
      <td>{{$index->name}}</td>
      <td>{{$index->email}}</td>
      <td>{{$index->password}}</td>
      <td>{{$index->gender}}</td>
      <td>{{$index->hobby}}</td>
      <td>{{$index->city}}</td>
      <td><img src="{{asset('uploads/'. $index->image)}}" style="height:50px;width:50px;"></td>
      <td>
          <a href="{{route('edit',$index->id)}}" class="btn btn-primary btn-sm">Edit</a>
          <a href="{{route('delete',$index->id)}}" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>




<!-- Add New -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">Male
    <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1">Female
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hobby</label>
    <input class="form-check-input" type="checkbox" value="play" name="hobby[]" id="flexCheckChecked">Play
    <input class="form-check-input" type="checkbox" value="game" name="hobby[]" id="flexCheckChecked">Game
    <input class="form-check-input" type="checkbox" value="code" name="hobby[]" id="flexCheckChecked">Code
  </div>
  <div class="mb-3">
<label for="exampleInputPassword1" class="form-label">City</label>
  <select name="city">
    <option selected disabled>--Select City--</option>
    <option value="delhi">Delhi</option>
    <option value="gujrat">Gujrat</option>
  </select>
</div>
  <div class="mb-3">
      <label>Choose Image</label>
      <input type="file" name="image" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- /Add New -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
