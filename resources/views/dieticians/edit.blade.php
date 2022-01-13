@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Profile</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('dieticians.update', Auth::user()->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Email"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="Phone"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" placeholder="Address"></input>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
            <strong>Profile Image:</strong>
                <div class="custom-file">          
                    <input type="file" class="custom-file-input" name="image">       
                    <label class="custom-file-label">Choose image file</label>
                </div>
            </div><p><p>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <p><p><button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('dieticians.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection