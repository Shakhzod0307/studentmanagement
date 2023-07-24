@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Edit Student</h1><br>
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>                        
    @endif
<form action="{{route('studentupdate' , $student->id)}}" method="POST">
    @csrf
 
    <div class="form-group row">
        <label for="username"  
            class="col-sm-1 col-form-label col-form-label-lg">Username: </label>
        <div class="col-sm-11">
        <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="{{$student->username}}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="name"  
            class="col-sm-1 col-form-label col-form-label-lg">Name:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="name" placeholder="{{$student->name}}" id="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname"  
            class="col-sm-1 col-form-label col-form-label-lg">Surname:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="last_name"  placeholder="{{$student->last_name}}"  id="lname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email"  
            class="col-sm-1 col-form-label col-form-label-lg">Email:</label>
        <div class="col-sm-11">
        <input type="email" class="form-control form-control-lg" name="email" placeholder="{{$student->email}}"  id="email" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone"  
            class="col-sm-1 col-form-label col-form-label-lg">Phone:</label>
        <div class="col-sm-11">
        <input type="number" class="form-control form-control-lg" name="phone_number" placeholder="{{$student->phone_number}}"  id="phone" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="address"  
            class="col-sm-1 col-form-label col-form-label-lg">Address:</label>
        <div class="col-sm-11">
        <textarea class="form-control form-control-lg" name="address" placeholder="{{$student->address}}" rows="5px;" id="address" required></textarea>
        </div>
    </div>
    <a href="{{route('studentsindex')}}" style="margin-left: 100px;;"  class="btn btn-secondary">Back</a>
    <input type="submit" class="btn btn-success"  value="Update">
    
</form>
</div>

@endsection
