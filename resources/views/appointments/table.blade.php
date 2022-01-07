@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Appointment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('appointments.create') }}"> Add New Appointment</a><p>
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
            <th>Patient Id</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($appointments as $s)
        <tr>
            <td>{{ $s->patient_name }}</td>
            <td>{{ $s->user->name}}</td>
            <td>{{ $s->date}}</td>
            <td>{{ $s->time}}</td>
            
            <td>
                <form action="{{ route('appointments.destroy',$s->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('appointments.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
