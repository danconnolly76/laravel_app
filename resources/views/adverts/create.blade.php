@extends('layouts.main')

@section('maincontent')
<main>
        <br>
        <div class="maincontainer">
           <div class="maincontent">
           <h4 class="bold">To booking an appointment fill out the online form below.</h4>
           </div><!--End of maincontainer-->
        </div><!--End of maincontent-->
        <div class="container">
         <div class="row">
          <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['action' => 'AdvertController@store', 'method' => 'POST']) !!}    
              <div class="form-group">
                {{Form::label('patient name', 'Patient name: ') }}
                {{Form::text('patient name', '', ['class' => 'form-control', 'placeholder' => 'Patient name'])}}
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
              {{Form::label('comment', 'Patient name: ') }}
              {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
              </div><!--End of form-group-->
              {!! Form::close() !!}
                <div class="button-container">
                  {{Form::submit('Submit', ['class' => 'btn btn-success btn-lg btn-block'])}}
                  </div><!--col-md-8 col-md-offset-2-->
             </div><!--End of row-->
        </div><!--End of container-->
    </main>
    
@endsection()