@extends('layouts.main')

@section('maincontent')

 <div class="container">
   <div class="row">
     <div class="panel panel-default">
        <div class="panel-heading">Appointment Information</div>
          <div class="panel-body">
            @if(Auth::user()->id == $appointment->user_id)
            Appointment Number : {{ $appointment->id }}<br>
            Patient Name :{{ $appointment->patient_name }}<br>
            Doctor : {{ $appointment->doctor}}<br>
            Date : {{ $appointment->date }}<br>
            Time : {{ $appointment->time }}<br>
            Comment : {{ $appointment->comment }}<br>
            @else
            Appointment Number : {{ $appointment->id }}<br>
            Patient Name : Private<br>
            Doctor : {{ $appointment->doctor }}<br>
            Date : {{ $appointment->date }}<br>
            Time : {{ $appointment->time }}<br>
            Details of appointment is confidential information<br>
            @endif
          </div><!--end of panel-body-->
        </div><!--end of panel panel-default-->
      </div><!--end of row-->
   </div><!--end of container-->


@endsection