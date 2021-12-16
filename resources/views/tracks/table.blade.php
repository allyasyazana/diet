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

<strong>Breakfast  :</strong>
<select class="custom-select">
  <option selected>Select meal</option>
  @foreach ($meals as $s)
  <option value="1">{{ $s->name }}  ({{ $s->calorie }} calories)</option>
  @endforeach
</select><p><p>

<strong>Lunch  :</strong>
<select class="custom-select">
  <option selected>Select meal</option>
  @foreach ($meals as $s)
  <option value="1">{{ $s->name }}  ({{ $s->calorie }} calories)</option>
  @endforeach
</select><p><p>

<strong>Dinner  :</strong>
<select class="custom-select">
  <option selected>Select meal</option>
  @foreach ($meals as $s)
  <option value="1">{{ $s->name }}  ({{ $s->calorie }} calories)</option>
  @endforeach
</select><p><p> 

<html>
        <style>
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #053C73;
                color: white;
                }
        </style>
    
    <table class="table table-bordered">
        <tr>
        <p><p><th>Total calories for today  :</th>
        </tr>
    </table>
</html>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection