@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Meals</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('meals.create') }}"> Add New Meals</a><p>
            </div>
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
            <th>No</th>
            <th>Meal Name</th>
            <th>Total Calories</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($meals as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->calorie }}</td>
            <td><img src="{{ asset('uploads/' . $s->image) }}" width="75px;" height="75px;" alt="image"></td>
            <td>
                <form action="{{ route('meals.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('meals.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('meals.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
