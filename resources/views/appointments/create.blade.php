@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Appointment</h2>
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
   
<form action="{{ route('appointments.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Patient Name  :</strong>
            <select class="custom-select" name="patient_name">
                <option selected disabled>Select patient name</option>
                @foreach ($users as $id => $name)
                    <option
                        value="{{$name}}" {{ (isset($appointment['patient_name']) && $appointment['patient_name'] == $name) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select><p><p> 
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="Date" class="form-control" name="date">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Time:</strong>
                <input type="Time" class="form-control" name="time">
            </div>
        </div>
        
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><p>
                <p><button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('appointments.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection