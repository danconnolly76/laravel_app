@extends('layouts.main')

@section('maincontent')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Current Appointments</div>
              <div class="panel-body">
            <p>There are {{ $number = count($search) }} results</p>
          @foreach ($search as $find)
          @if(Auth::user()->id == $find->user_id)
           <strong> Name : </strong>{{ $find->patient_name }}
           @else
           <strong> Name : </strong>Private
           @endif
            <strong> Doctor : </strong>{{ $find->doctor }}
            <strong> Date : </strong>{{ $find->date }}
            <strong> Time : </strong>{{ $find->time }}<br>
          @endforeach
          </div><!--end of panel-body-->
         </div><!--end of panel panel-default--> 
       </div><!--end of col-lg-12--> 
    </div><!-- end of row-->
  </div><!-- end of container-->

@endsection