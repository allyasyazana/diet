@extends('layouts.template')
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
      <select class="custom-select">
        <option selected disabled>Select meal</option>
            @foreach ($meals as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id']) && $tracks['meal_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
      </select><p><p>

      <strong>Lunch  :</strong>
      <select class="custom-select">
        <option selected disabled>Select meal</option>
        @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id']) && $tracks['meal_id'] == $id) ? ' selected' : '' }}>{{$name}} calories</option>
                @endforeach
      </select><p><p>

      <strong>Dinner  :</strong>
      <select class="custom-select">
        <option selected disbled>Select meal</option>
        @foreach ($meals as $id => $name )
                    <option
                        value="{{$id}}" {{ (isset($tracks['meal_id']) && $tracks['meal_id'] == $id) ? ' selected' : '' }}>{{$name}} calories</option>
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