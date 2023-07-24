@extends('layouts.dashboard')

@section('content')
<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align:center">Courses Management System</h1>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>                        
                    @endif

                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>N</th>
                                                <th>Name</th>
                                                <th>Syllabus</th>
                                                <th>Duration</th>           
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>N</th>
                                                <th>Name</th>
                                                <th>Syllabus</th>
                                                <th>Duration</th>                                                
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($courses as $course )                                                                           
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$course->name}}</td>
                                                <td>{{$course->syllabus}}</td>                                         
                                                <td>{{$course->duration}}</td>                                         
                                                <td>
                                                    <a href="{{route('courseshow',$course->id)}}" class='btn btn-success'><i class='fa fa-eye'></i></a>
                                                    <a href="{{url('/course/edit/'.$course->id)}}" class='btn btn-info'><i class='fa fa-edit'></i></a>
                                                    <a href="{{route('coursedelete',$course->id)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                                </td>
                                            </tr>                                    
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                    </div>
@endsection