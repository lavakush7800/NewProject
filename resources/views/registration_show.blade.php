<!DOCTYPE html>
<html lang="en">
<head>
  <title>registraion Table</title>
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
 
    <h2 style="text-align:center">Registration Table</h2>

    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>MOBILE</th>
        <th>ADDRESS</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->password }}</td>
        <td>{{ $data->mobile }}</td>
        <td>{{ $data->address }}</td>

        @csrf
        </form>
        </td>
        <td>
        <form method="post" action="upd">
        <input type="hidden"  name="id" value="{{ $data->id }}">
        @csrf
        <button>Update</button>
        </form>

        
        </form>
        </td>
        <td>
        <form method="#" action="#">
        <input type="hidden"  name="id" value="{{ $data->id }}">
        @csrf
        <button>Delete</button>
        </form>
       
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
 
  </div>
</div>

</body>
</html>
