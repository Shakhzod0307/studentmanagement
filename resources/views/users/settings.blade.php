@extends('layouts.dashboard')

@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
     @if(session('success'))
        <div class="alert alert-success  text-center m-2">
            {{session('success')}}
        </div>
    @endif
<form action="{{route('profileupdate')}}" method="POST">
    @csrf
    <div class="row">

      <div class="col-lg-4">

        <form-group class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              <p>Username:</p>
            <input type="text" class="my-3 form-control" name="username" value="{{Auth::user()->username}}">

          </div>
        </form-group>

        <form-group class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <input type="text" style="width: 290px;" name="internet" class="mb-0 form-control" value   ="{{Auth::user()->internet}}" >
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <input type="text" style="width: 290px;"name="github" class="mb-0 form-control" value="{{Auth::user()->github}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <input type="text"style="width: 290px;" name="twitter" class="mb-0 form-control" value=" {{Auth::user()->twitter}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <input type="text" style="width: 290px;"name="instagram" class="mb-0 form-control" value=" {{Auth::user()->instagram}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <input type="text"style="width: 290px;" name="facebook" class="mb-0 form-control" value=" {{Auth::user()->facebook}}">
              </li>
            </ul>
          </div>
        </form-group>

      </div>

      <from-group class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <input type="text"name="name"  class="text-muted mb-0 form-control" value=" {{Auth::user()->name}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" name="email"  class="text-muted mb-0 form-control" value=" {{Auth::user()->email}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="phone" class="text-muted mb-0 form-control" value="  {{Auth::user()->phone}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="mobile" class="text-muted mb-0 form-control" value=" {{Auth::user()->mobile}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-sm-3">
                    <p class="mb-0">Role</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="role" class="text-muted mb-0 form-control" value="  {{Auth::user()->role}}">
                </div>
            </div>
            
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Group</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="group" class="text-muted mb-0 form-control" value=" {{Auth::user()->group }}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="address" class="text-muted mb-0 form-control" value="  {{Auth::user()->address}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Bio</p>
              </div>
              <div class="col-sm-9">
                <input type="text"  name="bio"class="text-muted mb-0 form-control" value="  {{Auth::user()->bio}}">
              </div>
            </div>
         
        </div>
    </div>
</from-group>
</div>
<br>
<input type="submit" class="btn btn-success" value="Update">
</form>
</div>

</section>


@endsection