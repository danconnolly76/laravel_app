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
           <form action="" method="post">    
              <div class="form-group">
                <label for="patient_name">Patient name:</label>
                <input type="text" class="form-control" name="patient_name" placeholder="Enter Name">
              </div><!--End of form-group-->
              <div class="form-group">
                <label for="doctor">Doctor:</label>
                <div class="dropdown">
                    <select id="doctor" class="form-control" name="doctor">
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
          <label for="comment" class="control-label">Comment:</label>
          <textarea class="form-control" rows="7" name="comment" placeholder="Enter in a comment"></textarea>
         </div><!--End of form-group-->
                <div class="button-container">
              <input type="submit" name="appointment_button" class=" btn btn-lg btn-success btn-block" value="Booking">
                  </form>
                  </div><!--col-md-8 col-md-offset-2-->
             </div><!--End of row-->
        </div><!--End of container-->
    </main>
    
@endsection()