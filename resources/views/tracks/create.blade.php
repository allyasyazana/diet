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

    <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="Date" class="form-control" name="date" placeholder="Date">
            </div>
    </div>
      
    <table class="table table-responsive" width="100%">
    <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
      <strong>Breakfast  :</strong>
      <td style="width:40%">
      <select class="custom-select" name="meal_id" id="meal1" onchange="calcCalorie('meal1', 'qty1', 'subT1')">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
              <option value="{{$name->id}}" data-calorie="{{$name->calorie}}" {{ (isset($tracks['meal_id']) && $tracks['meal_id'] == $name->id) ? ' selected' : '' }}>{{$name->name}}</option>
            @endforeach
      </select>
      <p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="qty1" class="form-control" min="0" value="0" placeholder="Quantity" onchange="calcCalorie('meal1', 'qty1', 'subT1')" id="qty1">
       </td> 
       <td style="width:30%">
          <input type="text" name="subT1" class="form-control" readonly style="cursor: pointer;" id="subT1" value="0">
       </td>
      </table>

    <table class="table table-responsive">
    <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
      <strong>Lunch  :</strong>
      <td style="width:40%">
      <select class="custom-select" name="meal_id2" id="meal2" onchange="calcCalorie('meal2', 'qty2', 'subT2')">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$name->id}}" data-calorie="{{$name->calorie}}" {{ (isset($tracks['meal_id2']) && $tracks['meal_id2'] == $name->id) ? ' selected' : '' }}>{{$name->name}}</option>
                @endforeach
      </select><p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="qty2" class="form-control" min="0" value="0" placeholder="qty2" value="" onchange="calcCalorie('meal2', 'qty2', 'subT2')" id="qty2">
       </td> 
       <td style="width:30%">
          <input type="text" name="subT2" class="form-control" readonly style="cursor: pointer;" value="0" id="subT2">
       </td>
      </table>

      <table class="table table-responsive">
    <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
      <strong>Dinner  :</strong>
      <td style="width:40%">
      <select class="custom-select" name="meal_id3" id="meal3" onchange="calcCalorie('meal3', 'qty3', 'subT3')">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name )
                    <option
                        value="{{$name->id}}" data-calorie="{{$name->calorie}}" {{ (isset($tracks['meal_id3']) && $tracks['meal_id3'] == $name->id) ? ' selected' : '' }}>{{$name->name}}</option>
                @endforeach
      </select><p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="qty3" class="form-control" min="0" value="0" placeholder="Quantity" value="" onchange="calcCalorie('meal3', 'qty3', 'subT3')" id="qty3">
       </td> 
       <td style="width:30%">
          <input type="text" name="subT3" class="form-control" readonly style="cursor: pointer;" value="0" id="subT3">
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
                <input type="text" class="form-control input-sm text-center" readonly name="total" id="total">
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

@section('javascript')
<script type="text/javascript">

  function calcCalorie(meal,qty,subT1){

    calorie = $("#"+meal).find(':selected').data('calorie')
    qty = $("#"+qty).val();

    subtotal = calorie*qty; 

    $("#"+subT1).val(subtotal);

    total1 = $("#subT1").val();
    total2 = $("#subT2").val();
    total3 = $("#subT3").val();

    total = parseInt(total1) + parseInt(total2) + parseInt(total3);
    $("#total").val(total);

  }
  
</script>
@endsection