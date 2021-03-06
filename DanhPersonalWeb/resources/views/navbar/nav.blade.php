<!--Navbar-->
<header>
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><img height="42" background-color:"none" width="42" src="{{asset('css/logo/mylogo.png')}}"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse animated lightSpeedIn " id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link " href="/"> <i class="fas fa-home"></i> Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/edu"> <i class="fas fa-user-graduate"></i> My Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/life"><i class="fas fa-heartbeat"></i> My Life</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><i class="fas fa-tools"></i>Learning Tools</a>
        <div class="dropdown-menu dropdown-primary blue-gradient" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://reactjs.org/">REACT JS</a>
          <a class="dropdown-item" href="https://laravel.com/">LAVAREL PHP </a>
          <a class="dropdown-item" href="https://developer.android.com/reference/org/w3c/dom/Document">ANDROID DOCS</a>

        </div>
      </li>


      <li class="nav-item">
        @if (Auth::guest())

        <a class="nav-link " href="{{ route('login') }}"><i class="fas fa-lock"></i> Admin Login</a>

        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown" role="button" aria-expanded="false">
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
      </li>


    </ul>
    <!-- Links -->

    <form class="animated fadeInUp delay-1s form-inline" action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
      <div class="md-form my-0">


        <input class="form-control mr-sm-2"  name="q" type="text" placeholder="Google Search" aria-label="Search">


      </div>
    </form>
  </div>


</nav>
</header>
<!--/.Navbar-->
