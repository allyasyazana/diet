@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Assign Calories</h2>
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
   
<form action="{{ route('patientcalories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    
        <strong>Patient Name :</strong>
        <td style="width:40%">
          <select class="custom-select" name="user_id" id="user_id">
            <option selected disabled>Select patient name</option>
              @foreach($patientcalories as $id => $name)
              {
                <option value="{{$id}}" {{ (isset($patientcalorie['user_id']) && $patientcalorie['user_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
              }
                @endforeach
          </select>
          <p><p>
        </td>

        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Month  :</strong>
            <select class="custom-select" name="month_id">
                <option selected disabled>Select Month</option>
                @foreach ($months as $id => $name)
                    <option value="{{$id}}" {{ (isset($patientcalorie['month_id']) && $patientcalorie['month_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select><p><p> 
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Calories:</strong>
                <input type="number" class="form-control" name="calorie" placeholder="Insert Calories" min=0>
            </div>
        </div>
        
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><p>
                <p><button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('patientcalories.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection