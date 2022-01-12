@extends('layouts.templatePatient')
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
        <strong>Day  :</strong>
            <select class="custom-select" name="day_id">
                <option selected disabled>Select Day</option>
                @foreach ($days as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($appointment['day_id']) && $appointment['day_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select><p><p> 
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Time  :</strong>
            <select class="custom-select" name="time_id">
                <option selected disabled>Select Time</option>
                @foreach ($times as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($appointment['time_id']) && $appointment['time_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select><p><p> 
        </div>
        
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><p>
                <p><button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('appointments.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection