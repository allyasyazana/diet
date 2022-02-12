@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Patient's Record Meals</h2>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <html>
        <style>
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #0A7825;
                color: white;
                }

            /* tr:nth-child(even) {
                background-color: #85DA86;
            }

            tr:nth-child(odd) {
                background-color: #8CDF8D;
            } */
        </style>
   
    <table class="table table-bordered">
        <tr>
            <th width="10%">Patient Name</th>
            <th width="10%">Date</th>
            <th>Breakfast</th>
            <th>Brunch</th>
            <th>Lunch</th>
            <th>Tea</th>
            <th>Dinner</th>
            <th>Total Calories</th>
            <!-- <th width="180px">Action</th> -->
        </tr>
        @foreach ($recordmeals as $s)
        <tr>
            <td>{{ $s->user->name}}</td>
            <td>{{ $s->date }}</td>
            <td>{{ $s->meal_breakfast}}</td>
            <td>{{ $s->meal_brunch}}</td>
            <td>{{ $s->meal_lunch}}</td>
            <td>{{ $s->meal_tea}}</td>
            <td>{{ $s->meal_dinner }}</td>
            <td>{{ $s->total }}</td>
            <!-- <td>
                <form action="{{ route('recordmeals.destroy',$s->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('recordmeals.edit',$s->id) }}">Edit</a> -->
   
                    <!-- @csrf
                    @method('DELETE')
      
                     <button type="submit" class="btn btn-danger">Delete</button> -->
                <!-- </form>
            </td> --> 
        </tr>
        @endforeach
    </table>

@endsection