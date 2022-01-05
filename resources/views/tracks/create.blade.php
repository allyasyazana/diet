@extends('layouts.templatePatient')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Track Meals</h2>
            </div>
            <div class="pull-right">
                <!--<a class="btn btn-success" href="{{ route('dieticians.create') }}"> Add New Dietican</a><p>-->
            </div>
        </div>
</div><p><p>

<form action="{{ route('tracks.store') }}" method="POST">
    @csrf
      
      <strong>Breakfast  :</strong>
      <select class="custom-select" name="breakfast">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$name}}" {{ (isset($tracks['breakfast']) && $tracks['breakfast'] == $name) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>

      <strong>Lunch :</strong>
      <select class="custom-select" name="lunch">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$name}}" {{ (isset($tracks['lunch']) && $tracks['lunch'] == $name) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>

      <strong>Dinner :</strong>
      <select class="custom-select" name="dinner">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$name}}" {{ (isset($tracks['dinner']) && $tracks['dinner'] == $name) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>
          <!--<table class="table table-bordered">
              <tr>
              <p><p><th readonly id="total">Total calories for today  readonly id="total":</th>
              </tr>
          </table>-->

          <div class="row">
            <div class="col-md-8">
              <label clsss="control-label col-md-2">Total calories for today:</label>
              <div class="col-md-4">
                <input type="text" class="form-control input-sm text-right" name="total">
              </div>
            </div>
          </div>

         </body>

      <div class="col-xs-12 col-sm-12 col-md-12 text-center">

          <button type="submit" class="btn btn-primary">Submit</button>

           <a class="btn btn-primary" href="{{ route('tracks.index') }}"> Back</a>
      </div>

</form>
@endsection