@extends('layouts.main')

@section('maincontent')
   <div class="table_container">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Current Appointments</div>
                   <div class="panel-body">
                      <table class="table">
                       <thead>   
                        <tr>
                        <th>Patient name</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Comment</th>
                        <th></th>
                        </tr>
                        <thead>
                         <tbody>
                            @foreach($appointment as $pointment)
                            <td>
                            {{$pointment->patient_name}}
                            </td>
                            <td>
                            {{$pointment->doctor}}
                            </td>
                            <td>
                            {{$pointment->date}}
                            </td>
                            <td>
                            {{$pointment->time}}
                            </td>
                            <td>
                            {{$pointment->comment}}
                            </td>
                            <td>
                            {!!Form::open(['action' => ['AppointmentController@destroy', $pointment->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                            {!!Form::close()!!}
                            <a href='#' class="btn btn-sm btn-warning pull-right">Update</a>
                            <a href='#' class="btn btn-sm btn-primary pull-right">Read</a> 
                            </td>    
                          <tbody>
                            @endforeach
                        </tr>   
                      </table><!--End of table-->
                    </div><!--End of panel-body-->
              </div><!--End of panel panel-default-->
           </div><!--End of col-md-12 col-sm-12-->
        </div><!--End of row-->
      </div><!--End of container-->
   </div>
@endsection
