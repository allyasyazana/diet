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
            <th>Status</th>
            <th>Approved</th>
            <th>Rejected</th>
            <!-- <th width="280px">Action</th> -->

        </tr>
        @foreach ($appointments as $s)
        <tr>
            <b><td>{{ $s->user->name}}</td>
            <td>{{ $s->date}}</td>
            <td>{{ $s->time->name}}</td></b>
            <td>{{ $s->status}}</td></b>
            <td>
                <a class="btn btn-success" href="{{url('approved',$s->id)}}">Approved</a>
            </td></b>
            <td>
                <a class="btn btn-danger" href="{{url('rejected',$s->id)}}">Rejected</a>
            </td></b>

            <!-- <td>
                <form action="{{ route('appointmentpatients.destroy',$s->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('appointmentpatients.edit',$s->id) }}">Edit</a>
                </form>
            </td> -->
        </tr>

        @endforeach
    </table>
@endsection
