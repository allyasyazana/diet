<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
</head>
<style>
         th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #053C73;
              color: white;
            }
</style>
<body>
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

<form action="" method="POST">
    @csrf
      <strong>Breakfast  :</strong>
      <select class="custom-select">
        <option selected disabled>Select meal</option>
        @foreach ($meals as $s)
        <option value="{{ $s->calorie }}" id="calorie1" onkeyup="cal();">{{ $s->name }}  ({{ $s->calorie }} calories)</option>
        @endforeach
      </select><p><p>

      <strong>Lunch  :</strong>
      <select class="custom-select">
        <option selected disabled>Select meal</option>
        @foreach ($meals as $s)
        <option value="{{ $s->calorie }}" id="calorie2" onkeyup="cal();">{{ $s->name }}  ({{ $s->calorie }} calories)</option>
        @endforeach
      </select><p><p>

      <strong>Dinner  :</strong>
      <select class="custom-select">
        <option selected disbled>Select meal</option>
        @foreach ($meals as $s)
        <option value="{{ $s->calorie }}" id="calorie3" onkeyup="cal();">{{ $s->name }}  ({{ $s->calorie }} calories)</option>
        @endforeach
      </select><p><p> 
          
          <!--<table class="table table-bordered">
              <tr>
              <p><p><th readonly id="total">Total calories for today  :</th>
              </tr>
          </table>-->

          <div class="row">
            <div class="col-md-8">
              <label clsss="control-label col-md-2">Total calories for today:</label>
              <div class="col-md-4">
                <input type="text" class="form-control input-sm text-right" readonly id="total">
              </div>
            </div>
          </div>

         </body>

         <script type="text/javascript">
          $(function (){

            var x, y, z, d;

            x=document.getElementById('calorie1').value;
            y=document.getElementById('calorie2').value;
            z=document.getElementById('calorie3').value;
            
            d=x+y+z;
            document.getElementById('total').value=d;

          });
          </script>
      </html>

      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
      </div>

</form>
@endsection