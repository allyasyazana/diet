@extends('layouts.templatePatient')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Record Meals</h2>
            </div>
            <div class="pull-right">
                <!--<a class="btn btn-success" href="{{ route('dieticians.create') }}"> Add New Dietican</a><p>-->
            </div>
        </div>
</div><p><p>

<form action="{{ route('tracks.store') }}" method="POST">
    @csrf
      
    <table class="table table-responsive">
    <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
      <strong>Breakfast  :</strong>
      <td style="width:30%">
      <select class="custom-select" name="meal_id">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id']) && $tracks['meal_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">
       </td> 
       <td style="width:30%">
          <input type="text" name="total" class="form-control" readonly style="cursor: pointer;">
       </td>
      </table>

    <table class="table table-responsive">
    <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
      <strong>Lunch  :</strong>
      <td style="width:30%">
      <select class="custom-select" name="meal_id2">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id2']) && $tracks['meal_id2'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">
       </td> 
       <td style="width:30%">
          <input type="text" name="total" class="form-control" readonly style="cursor: pointer;">
       </td>
      </table>

      <table class="table table-responsive">
    <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
      <strong>Dinner  :</strong>
      <td style="width:30%">
      <select class="custom-select" name="meal_id3">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id3']) && $tracks['meal_id3'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">
       </td> 
       <td style="width:30%">
          <input type="text" name="total" class="form-control" readonly style="cursor: pointer;">
       </td>
      </table>

      <!-- <strong>Lunch :</strong>
      <select class="custom-select" name="meal_id2">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id2']) && $tracks['meal_id2'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>

      <strong>Dinner :</strong>
      <select class="custom-select" name="meal_id3">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id3']) && $tracks['meal_id3'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p> -->
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
      <p><p><p><p>

</form>
@endsection