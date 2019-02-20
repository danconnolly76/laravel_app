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
               <form class="navbar-form navbar-left" action="search_appointment.php" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" name="searchBox" placeholder="Search">
                  </div>
                  <input type="submit" class="form-control" name="submit" value="Search">
                </form>
             <!--Right side of navbar-->
             <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
        