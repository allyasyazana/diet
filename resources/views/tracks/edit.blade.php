@extends('layouts.templatePatient')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Track Meals</h2>
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
  
    <form action="{{ route('tracks.update',$track->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Breakfast  :</strong>
        <select class="custom-select" name="breakfast">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$name}}" {{ (isset($track['breakfast']) && $track['breakfast'] == $name) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
        </select><p><p>
        </div>

        <br>        
        <br>
        </div>
        <br>
        <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('tracks.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection
