@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Record Meals</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('recordmeals.create') }}"> Record Your Meals</a><p>
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
                text-align: left;
                background-color: #0A7825;
                color: white;
                }
        </style>
   
    <table class="table table-bordered">
        <tr>
            <th>Date</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
            <th>Total Calories</th>
            <!-- <th width="180px">Action</th> -->
        </tr>
        @foreach ($recordmeals as $s)
        <tr>
            <td>{{ $s->date }}</td>
            <td>{{ $s->meal_breakfast}}</td>
            <td>{{ $s->meal_lunch}}</td>
            <td>{{ $s->meal_dinner }}</td>
            <td>{{ $s->total }}</td>
            <td>
                <form action="{{ route('recordmeals.destroy',$s->id) }}" method="POST">
    
                    <!-- <a class="btn btn-primary" href="{{ route('recordmeals.edit',$s->id) }}">Edit</a> -->
   
                    @csrf
                    @method('DELETE')
      
                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection