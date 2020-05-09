@extends('master')

@section('content')
<div class="row">
<div class="col-lg-6 mx-auto">
<div class="card mt-3">
  <div class="card-header">Add New User
  </div>
  <div class="card-body">
    <form action="{{ url('users') }}" method="post">
      @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-sm rounded-pill float-right">Add</button>
    </form>
  </div>
</div>  
</div>  
</div>    
@endsection