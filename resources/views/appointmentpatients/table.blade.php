@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Patients Appointment</h2><p><p>
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
            <th>Appointment Date</th>
            <th>Appointment Time</th>

        </tr>
        @foreach ($appointments as $s)
        <tr>
            <b><td>{{ $s->user->name}}</td>
            <td>{{ $s->date}}</td>
            <td>{{ $s->time->name}}</td></b>

        </tr>
        @endforeach
    </table>
@endsection
