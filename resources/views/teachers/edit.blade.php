@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Edit Teacher</h1><br>
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>                        
    @endif
<form action="{{route('teacherupdate' , $teacher->id)}}" method="POST">
    @csrf
 
    <div class="form-group row">
        <label for="username"  
            class="col-sm-1 col-form-label col-form-label-lg">Username: </label>
        <div class="col-sm-11">
        <input type="text" name="username" class="form-control form-control-lg" id="username" value="{{$teacher->username}}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="name"  
            class="col-sm-1 col-form-label col-form-label-lg">Name:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="name" value="{{$teacher->name}}" id="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname"  
            class="col-sm-1 col-form-label col-form-label-lg">Surname:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="last_name"  value="{{$teacher->last_name}}"  id="lname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email"  
            class="col-sm-1 col-form-label col-form-label-lg">Email:</label>
        <div class="col-sm-11">
        <input type="email" class="form-control form-control-lg" name="email" value="{{$teacher->email}}"  id="email" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="role"  
            class="col-sm-1 col-form-label col-form-label-lg">Role:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="role" value="{{$teacher->role}}"  id="role" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone"  
            class="col-sm-1 col-form-label col-form-label-lg">Phone:</label>
        <div class="col-sm-11">
        <input type="number" class="form-control form-control-lg" name="phone_number" value="{{$teacher->phone_number}}"  id="phone" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="address"  
            class="col-sm-1 col-form-label col-form-label-lg">Address:</label>
        <div class="col-sm-11">
        <textarea class="form-control form-control-lg" name="address" value="{{$teacher->address}}" rows="5px;" id="address" ></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="bio"  
            class="col-sm-1 col-form-label col-form-label-lg">Bio:</label>
        <div class="col-sm-11">
        <textarea class="form-control form-control-lg" name="bio" value="{{$teacher->bio}}" rows="5px;" id="bio" ></textarea>
        </div>
    </div>
    <a href="{{route('teachersindex')}}" style="margin-left: 100px;;" class="btn btn-secondary">Back</a>
    <input type="submit" class="btn btn-success"  value="Update">
    
</form>
</div>

@endsection
