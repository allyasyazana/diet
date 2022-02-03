@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Dietician</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admins.create') }}"> Add New Dietician</a><p>
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
            
            <th>Dietician Name</th>
            <th>Dietician Email</th>
        </tr>
        
        @foreach ($admins as $s)
        <tr>
           
            <td>{{ $s->name}}</td>
            <td>{{ $s->email}}</td>
    
        </tr>
        @endforeach
    </table>
@endsection
