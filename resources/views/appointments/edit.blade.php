@extends('layouts.templatePatient')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Appointment</h2>
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
  
    <form action="{{ route('appointments.update',$appointment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="Date" class="form-control" name="date" value="{{ $appointment->date }}" placeholder="Date">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <strong>Time  :</strong>
            <select class="custom-select" name="time_id">
                <option selected disabled>Select Day</option>
                @foreach ($times as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($appointment['time_id']) && $appointment['time_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select><p><p> 
        </div>
        <br>        
        <br>
        </div>
        <br>
        <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('appointments.index') }}"> Back</a>
            </div>
   
    </form>
@endsection
