@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Edit Enrollment</h1><br>
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>                        
    @endif
<form action="{{route('enrollmentupdate' , $enrollment->id)}}" method="POST">
    @csrf
 
    <div class="form-group row">
        <label for="name"  
            class="col-sm-1 col-form-label col-form-label-lg">Enrollment: </label>
        <div class="col-sm-11">
        <input type="text" name="enroll_no" class="form-control form-control-lg" value="{{$enrollment->enroll_no}}" id="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="sname"  
            class="col-sm-1 col-form-label col-form-label-lg">Batch:</label>
        <div class="col-sm-11">
        <select id="sname" name="batch_id" class="form-control">
                <option selected>Choose....</option> 
            @foreach ($batches as $id => $name)
                <option value="{{ $id }}">{{$name}}</option> 
            @endforeach    
        </select> 

        </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-1 col-form-label col-form-label-lg">Student:</label>
        <div class="col-sm-11">
        <select id="dname" name="student_id" class="form-control">
            <option selected>Choose....</option> 
            @foreach ($students as $id => $name)
                <option value="{{ $id }}">{{$name}}</option> 
            @endforeach    
        </select> 
    
    </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-1 col-form-label col-form-label-lg">Join date:</label>
        <div class="col-sm-11">
        <input type="date" class="form-control form-control-lg" name="join_date" value="{{$enrollment->join_date}}" id="dname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="dname"  
            class="col-sm-1 col-form-label col-form-label-lg">Fee:</label>
        <div class="col-sm-11">
        <input type="number" class="form-control form-control-lg" name="fee" value="{{$enrollment->fee}}" id="dname" required>
        </div>
    </div>
    <a href="{{route('enrollmentsindex')}}"  style="margin-left: 100px;" class="btn btn-secondary">Back</a>
    <input type="submit" class="btn btn-success"  value="Update">
    
</form>
</div>

@endsection
