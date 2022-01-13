@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Meals</h2>
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
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #224D05;
                color: white;
                }

            td {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #619E38;
                color: white;
            }    
        </style>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Meal Name</th>
            <th>Total Calories</th>
            <th>Image</th>
        </tr>
        @foreach ($meals as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->calorie }}</td>
            <td><img src="{{ asset('uploads/' . $s->image) }}" width="75px;" height="75px;" alt="image"></td>
        </tr>
        @endforeach
    </table>
@endsection
