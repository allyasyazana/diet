@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Meals</h2>
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
   
<form action="{{ route('meals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Meal Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Meal Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Total Calories:</strong>
                <input type="text" class="form-control" name="calorie" placeholder="Total Calories">
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Meal Image:</strong>
            <div class="custom-file">          
                <input type="file" name="image" >       
                <!-- <label>Choose image file</label> -->
            </div>
        </div>
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><p>
                <p><button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('meals.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection