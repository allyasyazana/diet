@extends('layouts.templatePatient')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Record Meals</h2>
            </div>
        </div>
</div><p><p>


    @csrf
    @method('PUT')

    <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="Date" class="form-control" name="date" value="{{ $recordMeal->date }}" placeholder="Date">
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
      <select class="custom-select" name="meal_breakfast" id="meal1" onchange="calcCalorie('meal1', 'qty1', 'subT1')">
        <!-- <option selected disabled>Select meal</option> -->
        @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}" {{ (isset($record['meal_breakfast']) && $record['meal_breakfast'] == $s) ? ' selected' : '' }}>{{ $s->name  }}</option>
          @endforeach
        <!-- <option selected >No meal</option> -->
      </select>
      
      <p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="qty1" class="form-control" value="{{ $recordMeal->qty1 }}" onchange="calcCalorie('meal1', 'qty1', 'subT1')" id="qty1">
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
      <select class="custom-select" name="meal_lunch" id="meal2" onchange="calcCalorie('meal2', 'qty2', 'subT2')">
        <!-- <option selected disabled>Select meal</option> -->
        @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}" {{ (isset($record['meal_lunch']) && $record['meal_lunch'] == $s) ? ' selected' : '' }}>{{ $s->name  }}</option>
          @endforeach
      </select><p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="qty2" class="form-control" value="{{ $recordMeal->qty2 }}" value="" onchange="calcCalorie('meal2', 'qty2', 'subT2')" id="qty2">
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
      <select class="custom-select" name="meal_dinner" id="meal3" onchange="calcCalorie('meal3', 'qty3', 'subT3')">
        <!-- <option selected disabled>Select meal</option> -->
        @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}" {{ (isset($record['meal_dinner']) && $record['meal_dinner'] == $name) ? ' selected' : '' }}>{{ $s->name  }}</option>
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

           <a class="btn btn-primary" href="{{ route('recordmeals.index') }}"> Back</a>
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