@extends('layouts.main')

@section('maincontent')
<main>
    <div class="create_class">
        <div class="container">
         <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Update Appointment</div>
                <div class="panel-body">
            {!! Form::open(['action' => ['AppointmentController@update', $appointment->id], 'method' => 'POST']) !!}    
              <div class="form-group">
                {{Form::label('patient_name', 'Patient name: ') }}
                {{Form::text('patient_name', $appointment->patient_name, ['class' => 'form-control', 'placeholder' => 'Patient name'])}}
              </div><!--End of form-group-->
              <div class="form-group">
                <label for="doctor">Doctor:</label>
                <div class="dropdown">
                    <select id="doctor" class="form-control" name="doctor">
                        @foreach($docs as $doc)
                        <option>{{$doc->title}} {{$doc->firstname}} {{$doc->lastname}}</option>
                        @endforeach
                    </select>
                </div>
              </div><!--End of form-group-->
              <div class="form-group">
                <label for="date" class="control-label">Date</label>
                <input type="date" name="date" value="<?php echo $appointment->date?>">
              </div><!--End of form-group-->
              <div class="form-group">
                <label for="time" class="control-label">Time</label>
                <input type="time" name="time" value="<?php echo $appointment->time?>">
              </div><!--End of form-group-->
              <div class="form-group">
              {{Form::label('comment', 'comment: ') }}
              {{Form::textarea('comment', $appointment->comment, ['class' => 'form-control', 'placeholder' => 'Enter comment here'])}}
              </div><!--End of form-group-->
              <div class="button-container">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-success btn-lg btn-block'])}}
              </div>
              {!! Form::close() !!}
                </div>
              </div><!--end panel panel-default-->
            </div><!--End col-md-8 col-md-offset-2-->
          </div><!--End of row-->
        </div><!--End of container-->
      </div>
    </main>
@endsection()