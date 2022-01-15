   <!-- Header Area wrapper Starts -->
   <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="#header-wrap">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedules">
                schedules
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">
                Speakers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">
                Gallery
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">
                Faq
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sponsors">
                Sponsors
              </a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">
                Log in
              </a>
            </li> 
            @endguest
            @auth
            <li class="nav-item">
              <a class="nav-link">
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="/home">Dashboard5</a>


                         
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit()">
                        {{ __('Logout') }}
                    </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
              </a>
            </li>
            @endauth
            
          </ul>
        </div>
      </div>
      

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li>
          <a class="page-scrool" href="#header-wrap">Home</a>
        </li>
        <li>
          <a class="page-scrool" href="#about">About</a>
        </li>
        <li>
           <a class="page-scroll" href="#schedules">schedules</a>
        </li>
        <li>
          <a class="page-scroll" href="#team">Speakers</a>
        </li>
        <li>
          <a class="page-scroll" href="#gallery">Gallery</a>
        </li>
        <li>
          <a class="page-scroll" href="#faq">Faq</a>
        </li>
        <li>
          <a class="page-scroll" href="#sponsors">Sponsors</a>
        </li>
        <li>
          <a class="page-scroll" href="#pricing">Pricing</a>
        </li>
        <li>
          <a class="page-scroll" href="#google-map-area">Contact</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->
  </header>

  <!-- Header Area wrapper End -->