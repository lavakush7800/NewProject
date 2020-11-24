<!DOCTYPE html>
<html lang="en">
<head>
  <title>registraion edit page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="card bg-light text-dark">
    <div class="container">
    <h2 style="text-align:center">Registration edit</h2>


  <form method="post" action="/update">

  
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name"  value="{{ $data->name }}" placeholder=" " name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  value="{{ $data->email }}" placeholder=" " name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password"  value="{{ $data->password }}" placeholder="" name="password">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile"  value="{{ $data->mobile }}" placeholder="" name="mobile">
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address"  value="{{ $data->addess }}" placeholder="" name="address">
    </div>
    
    <input type="hidden"   value="{{ $data->id }}" name="id">
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </div>
    </div>
    <div class="col-sm-3" > </div>
  </div>
</div>

</body>
</html>
