@section('content')
<div class="pull-left">
   <h2>Record Meals</h2>
</div>
<!DOCTYPE html>
<html>

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
            <p><p><a class="btn btn-success" href="{{ route('tracks.create') }}"> Record Meals</a><p>
            </div>
        </div>
<body>
<?php $row_num=1;?>
<p><p>
<table class="table table-responsive">
   <strong>Breakfast</strong>
   <thead>
   <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
     <th>Action</th>
   </tr>
    </thead>
    <tbody class="row_container" style="width:70%">
            
    <tr id="div_{{$row_num}}">
       <td style="width:20%">
         <select name="breakfast" id="breakfast"  class="form-control">
            @foreach($meals as $row )
               <option id={{$row->id}} value={{$row->name}} class="breakfast custom-select">
                  {{$row->name}}
               </option>
            @endforeach
         </select>
       </td>         
       <td>
          <input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">
       </td>         
       <td>
          <input type="text" name="total" class="form-control" readonly style="cursor: pointer;">
       </td>      
       <td>
          <a href="javascript:0" class="btn btn-danger"><i class="fa fa-minus" onclick="$('#div_{{$row_num}}').remove();"></i></a>
       </td>
       <td> 
         <a href="javascript:0" class="btn btn-success" onclick="addrow();"><i class="fa fa-plus"></i></a> 
      </td> 
     </tr>
    </tbody>
</table>

<table class="table table-responsive">
   <strong>Lunch</strong>
   <thead>
   <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
     <th>Action</th>
    </tr>
    </thead>
    <tbody class="row_container" style="width:70%">
            
    <tr id="div_{{$row_num}}">
       <td style="width:20%">
         <select name="breakfast" id="breakfast"  class="form-control">
            @foreach($meals as $row )
               <option id={{$row->id}} value={{$row->name}} class="breakfast custom-select">
                  {{$row->name}}
               </option>
            @endforeach
         </select>
       </td>         
       <td>
          <input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">
       </td>         
       <td>
          <input type="text" name="total" class="form-control" readonly style="cursor: pointer;">
       </td>       
       <td>
          <a href="javascript:0" class="btn btn-danger"><i class="fa fa-minus" onclick="$('#div_{{$row_num}}').remove();"></i></a>
       </td>
       <td> 
         <a href="javascript:0" class="btn btn-success" onclick="addrow();"><i class="fa fa-plus"></i></a> 
      </td> 
     </tr>
</tbody>
</table>

<table class="table table-responsive">
   <strong>Dinner</strong>
   <thead>
   <tr>
     <th>Meal Name</th>
     <th>Quantity</th>
     <th>Total</th>
     <th>Action</th>
    </tr>
    </thead>
    <tbody class="row_container" style="width:70%">
            
    <tr id="div_{{$row_num}}">
       <td style="width:20%">
         <select name="breakfast" id="breakfast"  class="form-control">
            @foreach($meals as $row )
               <option id={{$row->id}} value={{$row->name}} class="breakfast custom-select">
                  {{$row->name}}
               </option>
            @endforeach
         </select>
       </td>         
       <td>
          <input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">
       </td>         
       <td>
          <input type="text" name="total" class="form-control" readonly style="cursor: pointer;">
       </td>      
       <td>
          <a href="javascript:0" class="btn btn-danger"><i class="fa fa-minus" onclick="$('#div_{{$row_num}}').remove();"></i></a>
       </td>
       <td> 
         <a href="javascript:0" class="btn btn-success" onclick="addrow();"><i class="fa fa-plus"></i></a> 
      </td> 
     </tr>
    </tbody>
</table>

<div class="row">
            <div class="col-md-8">
              <label clsss="control-label col-md-2">Total calories for today:</label>
              <div class="col-md-4">
                <input type="text" class="form-control input-sm text-right" readonly name="total">
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 text-center">

      <button type="submit" class="btn btn-primary">Submit</button>

      <a class="btn btn-primary" href="{{ route('tracks.index') }}"> Back</a>
      </div>
      <p><p><p><p><p>
      
</body>
</html>

<script type="text/javascript">

  var RowNum = '{{$row_num}}';
  function addrow(){
    RowNum++;
    var html = "";
    html += '<tr id="div_'+RowNum+'">';
    html +='<td>';
    html +='<select name="breakfast" id="breakfast"  class="form-control"> @foreach($meals as $row ) <option id={{$row->id}} value={{$row->name}} class="breakfast custom-select"> {{$row->name}} </option> @endforeach </select>';           
    html +='</td>';         
    html +='<td>';
    html +='<input type="number" name="quantity" class="form-control" min="0" value="0" placeholder="Quantity">';
    html +='</td>';         
    html +='<td>';
    html +='<td>';
    html +='<input type="text" name="total" class="form-control" readonly >';
    html +='</td>';
    html +='<td>';
    html +='<a href="javascript:0" class="btn btn-danger"><i class="fa fa-minus"  onclick="$(\'#div_'+RowNum+'\').remove();"></i></a>';
    html +='</td>';
    html +='</tr>';

    $('.row_container').append(html);
}

</script>
@endsection