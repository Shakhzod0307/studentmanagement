@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Add Enrollment</h1><br>
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif      
<form action="{{route('enrollmentstore')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="name"  
            class="col-sm-2 col-form-label col-form-label-lg">Enrollment : </label>
        <div class="col-sm-10">
        <input type="text" name="enroll_no" class="form-control form-control-lg" id="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="sname"  
            class="col-sm-2 col-form-label col-form-label-lg">Batch:</label>
        <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" name="batch_id"  id="sname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-2 col-form-label col-form-label-lg"> Student:</label>
        <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" name="student_id"  id="dname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-2 col-form-label col-form-label-lg">Join date:</label>
        <div class="col-sm-10">
        <input type="date" class="form-control form-control-lg" name="join_date"  id="dname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-2 col-form-label col-form-label-lg">Fee:</label>
        <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" name="fee"  id="dname" required>
        </div>
    </div>
    <a href="{{route('enrollmentsindex')}}"  style="margin-left: 196px;" class="btn btn-secondary">Back</a>
    <input type="submit" class="btn btn-success"  value="Submit">
    
</form>
</div>

@endsection
