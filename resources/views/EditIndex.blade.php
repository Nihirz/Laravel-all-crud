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

<div class="container mt-5">
  <form method="POST" action="{{route('update')}}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{$index->id}}">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Name</label>
<input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$index->name}}" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$index->email}}" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{$index->password}}">
</div>
<div class="mb-3">
<label for="" >Gender</label>
<input class="" type="radio" name="gender"  value="male" {{($index->gender == 'male'?'checked':'')}}>Male
<input class="" type="radio" name="gender" value="female" {{($index->gender == 'female'?'checked':'')}}>Female
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Hobby</label>


    <input class="form-check-input" type="checkbox" value="play" name="hobby[]" >Play
    <input class="form-check-input" type="checkbox" value="game" name="hobby[]" >Game
    <input class="form-check-input" type="checkbox" value="code" name="hobby[]" >Code

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">City</label>
  <select name="city">
    <option selected disabled>--Select City--</option>
    <option value="delhi" {{($index->city == 'delhi'?'selected':'')}}>Delhi</option>
    <option value="gujrat" {{($index->city == 'gujrat'?'selected':'')}}>Gujrat</option>
  </select>

</div>
<div class="mb-3">
<label>Choose Image</label>
<span><img src="{{asset('uploads/'. $index->image)}}" style="height:100px;width:100px;"/></span>
<input type="file" name="image" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

  
  </body>
</html>
