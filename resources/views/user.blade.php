@extends('master')

@section('content')
<div class="row">
  <div class="col-lg-6 mx-auto">
    <div class="card mt-3">
      <div class="card-header">Users
        <a href="{{ url('users/create') }}" class="btn btn-primary btn-sm rounded-pill float-right">Add New User</a>
      </div>
      <div class="card-body">
        
        @if (session('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif

        @if ($users->isEmpty())
        <p class="text-center">No Data Available</p>
        @else
        @foreach ($users as $user)
        <li>{{ $user->name }}
        <form action="{{ url('users/' . $user->id) }}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm rounded-pill">Delete</button>
        </form>
        </li>
        @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
@endsection