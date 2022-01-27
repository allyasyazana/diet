@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Record Meals</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tracks.create') }}"> Record Your Meals</a><p>
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
            <th width="180px">Action</th>
        </tr>
        @foreach ($tracks as $s)
        <tr>
            <td>{{ $s->date }}</td>
            <td>{{ $s->meal->name }}</td>
            <td>{{ $s->meal2->name }}</td>
            <td>{{ $s->meal3->name }}</td>
            <td>{{ $s->total }}</td>
            <td>
                <form action="{{ route('tracks.destroy',$s->id) }}" method="POST">
    
                    <!-- <a class="btn btn-primary" href="{{ route('tracks.edit',$s->id) }}">Edit</a> -->
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection