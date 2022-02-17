@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Patients' Monthly Calories</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('patientcalories.create') }}"> Assign Calories</a><p>
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
            
            <th>Patient Name</th>
            <th>Month</th>
            <th>Total calories for this month</th>
        </tr>
        
        @foreach ($patientcalories as $s)
        <tr>
           
            <td>{{ $s->user->name}}</td>
            <td>{{ $s->month->name}}</td>
            <td>{{ $s->calorie}}</td>
    
        </tr>
        @endforeach
    </table>
@endsection
