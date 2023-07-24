@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align:center">Batch Page</h1><br>

<section>
  <div class="container">


    <div class="row">

      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$batch->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Course ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$batch->course->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Start date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$batch->start_date}}</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{route('batchesindex')}}" class="btn btn-secondary">Back</a>
        </div>
      </div>
    </div>
  </div>
</section>


    



@endsection
