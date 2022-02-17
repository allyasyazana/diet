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
        <style>
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color:#879B63;"
                color: white;
                }

            /* tr:nth-child(even) {
                background-color: #B8CE90;
            }

            tr:nth-child(odd) {
                background-color: #8CDF8D;
            } */
        </style>

<form action="{{ route('recordmeals.store') }}" method="POST">
    @csrf

    <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="Date" class="form-control" name="date" placeholder="Date">
            </div>
    </div>
      
    <table class="table table-responsive" width="100%">
      <tr>
        <th style="background-color:#879B63;">Meal Name</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>

      <strong>Breakfast  :</strong>
        <td style="width:40%">
          <select class="custom-select" name="meal_breakfast" id="meal1" onchange="calcCalorie('meal1', 'qty1', 'subT1')">
            <option selected disabled>Select meal</option>
              @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}">{{ $s->name  }}</option>
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

    <table class="table table-responsive" width="100%">
    <tr>
     <th style="background-color:#C2D2A5;">Meal Name</th>
     <th style="background-color:#C2D2A5;">Quantity</th>
     <th style="background-color:#C2D2A5;">Total</th>
   </tr>
      <strong>Brunch :</strong>
      <td style="width:40%">
      <select class="custom-select" name="meal_brunch" id="meal4" onchange="calcCalorie('meal4', 'qty4', 'subT4')">
        <option selected disabled>Select meal</option>
        @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}">{{ $s->name  }}</option>
          @endforeach
        <!-- <option selected >No meal</option> -->
      </select>
      
      <p><p>
      </td>
      <td style="width:30%">
          <input type="number" name="qty4" class="form-control" min="0" value="0" placeholder="Quantity" onchange="calcCalorie('meal4', 'qty4', 'subT4')" id="qty4">
       </td> 
       <td style="width:30%">
          <input type="text" name="subT4" class="form-control" readonly style="cursor: pointer;" id="subT4" value="0">
       </td>
      </table>


    <table class="table table-responsive">
    <tr>
     <th style="background-color:#A4AB96;">Meal Name</th>
     <th style="background-color:#A4AB96;">Quantity</th>
     <th style="background-color:#A4AB96;">Total</th>
   </tr>
      <strong>Lunch  :</strong>
      <td style="width:40%">
      <select class="custom-select" name="meal_lunch" id="meal2" onchange="calcCalorie('meal2', 'qty2', 'subT2')">
        <option selected disabled>Select meal</option>
        @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}">{{ $s->name  }}</option>
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

    
      <table class="table table-responsive" width="100%">
      <tr>
        <th style="background-color:#DAF7A6 ;">Meal Name</th>
        <th style="background-color:#DAF7A6 ;">Quantity</th>
        <th style="background-color:#DAF7A6 ;">Total</th>
      </tr>

      <strong>Tea :</strong>
        <td style="width:40%">
          <select class="custom-select" name="meal_tea" id="meal5" onchange="calcCalorie('meal5', 'qty5', 'subT5')">
            <option selected disabled>Select meal</option>
              @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}">{{ $s->name  }}</option>
              @endforeach
          </select>
          <p><p>
        </td>

      <td style="width:30%">
          <input type="number" name="qty5" class="form-control" min="0" value="0" placeholder="Quantity" onchange="calcCalorie('meal5', 'qty5', 'subT5')" id="qty5">
       </td> 
       <td style="width:30%">
          <input type="text" name="subT5" class="form-control" readonly style="cursor: pointer;" id="subT5" value="0">
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
        <option selected disabled>Select meal</option>
        @foreach($meals as $s )
              <option value="{{ $s->name }}" data-calorie="{{$s->calorie}}">{{ $s->name  }}</option>
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
    total4 = $("#subT4").val();
    total5 = $("#subT5").val();

    total = parseInt(total1) + parseInt(total2) + parseInt(total3) + parseInt(total4) + parseInt(total5);
    $("#total").val(total);

  }
  
</script>
@endsection