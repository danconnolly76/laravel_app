<!--This navbar is from the URL below
https://www.w3schools.com/bootstrap/bootstrap_navbar.asp-->
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">Laravel application</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="/appointment/">Home Page</a></li> 
                  <li><a href="/appointment/create">Appointment</a></li> 
              <li><a href="/appointment/read">View Appointments</a></li>
            </ul>
          <form class="navbar-form navbar-left" action='{{ route("appointment.search") }}' method="POST">
               {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" name="searchBox" placeholder="Search">
                  </div>
                  <input type="submit" class="form-control" name="submit" value="Search">
                </form>
             <!--Right side of navbar-->
             <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->     
            <button href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" type="submit" class="btn btn-light btn-lg" name="login_submit">Logout</button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
             </ul>
          </div>
        </div>
      </nav>
        