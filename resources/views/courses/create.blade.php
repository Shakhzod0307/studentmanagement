@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Add Course</h1><br>
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif      
<form action="{{route('coursestore')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="name"  
            class="col-sm-1 col-form-label col-form-label-lg">Name: </label>
        <div class="col-sm-11">
        <input type="text" name="name" class="form-control form-control-lg" id="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="sname"  
            class="col-sm-1 col-form-label col-form-label-lg">Syllabus:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="syllabus"  id="sname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-1 col-form-label col-form-label-lg">Duration:</label>
        <div class="col-sm-11">
        <input type="text" class="form-control form-control-lg" name="duration"  id="dname" required>
        </div>
    </div>


    <input style="margin-left: 100px;;" type="submit" class="btn btn-success"  value="Submit">
    
</form>
</div>

@endsection
