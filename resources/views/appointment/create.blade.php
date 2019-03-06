@extends('layouts.main')

@section('maincontent')
<main>
        <br>
        <div class="container">
         <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Create Appointment</div>
                  <div class="panel-body">
            {!! Form::open(['action' => 'AppointmentController@store', 'method' => 'POST']) !!}    
              <div class="form-group">
                {{Form::label('patient_name', 'Patient name: ') }}
                {{Form::text('patient_name', '', ['class' => 'form-control', 'placeholder' => 'Patient name'])}}
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
                <input type="date" name="date">
              </div><!--End of form-group-->
              <div class="form-group">
                <label for="time" class="control-label">Time</label>
                <input type="time" name="time">
              </div><!--End of form-group-->
              <div class="form-group">
              {{Form::label('comment', 'comment: ') }}
              {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
              </div><!--End of form-group-->
              <div class="button-container">
                {{Form::submit('Submit', ['class' => 'btn btn-success btn-lg btn-block'])}}
              </div>
              {!! Form::close() !!}
               </div>
              </div>
             </div>
            </div><!--col-md-8 col-md-offset-2-->
          </div><!--End of row-->
        </div><!--End of container-->
    </main>
    
@endsection()