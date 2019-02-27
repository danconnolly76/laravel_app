@extends('layouts.main')

@section('maincontent')

 <div class="container">
   <div class="row">
     <div class="panel panel-default">
        <div class="panel-heading">Appointment Information</div>
          <div class="panel-body">
            Appointment Number : {{ $appointment->id }}<br>
            Patient Name : {{ $appointment->patient_name }}<br>
            Doctor : {{ $appointment->doctor}}<br>
            Date : {{ $appointment->date }}<br>
            Time : {{ $appointment->time }}<br>
            Comment : {{ $appointment->comment }}<br>
          </div><!--end of panel-body-->
        </div><!--end of panel panel-default-->
      </div><!--end of row-->
   </div><!--end of container-->


@endsection