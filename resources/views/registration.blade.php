@extends('layouts.master')
@section('title','Registration')
@section('content')
<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="card bg-light text-dark">
    <div class="container">
    <h2 style="text-align:center">Registration here</h2>


  <form method="post" action="/save">

  
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Mr Neearj....." name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder=" " name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="" name="password">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="" name="mobile">
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="" name="address">
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </div>
    </div>
    <div class="col-sm-3" > </div>
  </div>
</div>

@endsection

 