@extends('layouts.templatePatient')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Profile</h2>
            </div>
            <div class="pull-right">
                <!--<a class="btn btn-success" href="{{ route('dieticians.create') }}"> Add New Dietican</a><p>-->
            </div>
        </div>
</div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="{{ route('patients.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
    <div class="container">
    <div class="main-body">
    
  
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('uploads/records/' . Auth::user()->image) }}" alt="Patient" class="rounded-circle" width="150">
                    <input type="file" class="form-control" name="image" value="{{ Auth::user()->image}}" placeholder="Image"></input>
                    <div class="mt-3">
                      <h4>{{ Auth::user()->name }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly placeholder="Email"></input>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="Phone"></input>
                    </div>
                  </div>
                
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" placeholder="Address"></input>
                    </div>
                  </div>
                  <hr> 
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <p><p><button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </div>
@endsection
