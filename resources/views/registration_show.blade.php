@extends('layouts.master')
@section('title','Registration data')
@section('content')
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
        <form method="post" action="update">
        <input type="hidden"  name="id" value="{{ $data->id }}">
        @csrf
        <button>Update</button>
        </form>

        
        </form>
        </td>
        <td>
        <form method="post" action="delete">
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

@endsection
 