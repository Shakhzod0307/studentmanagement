@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Edit Course</h1><br>
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>                        
    @endif
<form action="{{route('batchupdate' , $batch->id)}}" method="POST">
    @csrf
 
    <div class="form-group row">
        <label for="name"  
            class="col-sm-2 col-form-label col-form-label-lg">Name: </label>
        <div class="col-sm-10">
        <input type="text" name="name" class="form-control form-control-lg" value="{{$batch->name}}" id="name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="course_id"  
            class="col-sm-2 col-form-label col-form-label-lg">Course Name:</label>
        <div class="col-sm-10">
            <select id="course_id" name="course_id" class="form-control">
                <option selected>Choose....</option> 
            @foreach ($courses as $id => $name)
                <option value="{{ $id }}">{{$name}}</option> 
            @endforeach    
            </select> 
        </div>
    </div>

    <div class="form-group row">
        <label for="dname"  
            class="col-sm-2 col-form-label col-form-label-lg">Start date:</label>
        <div class="col-sm-10">
        <input type="date" class="form-control form-control-lg" name="start_date" value="{{$batch->start_date}}" id="dname" required>
        </div>
    </div>
    <a href="{{route('batchesindex')}}"  style="margin-left: 196px;" class="btn btn-secondary">Back</a>
    <input type="submit" class="btn btn-success"  value="Update">
    
</form>
</div>

@endsection
