<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}" />

    <link rel="stylesheet" href="{{url('css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{url('css/aos.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    @yield('css')

    <title> @yield('title') </title>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="{{route('home.index')}}" class="logo m-0 float-start">X Company</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                        <li><a href="{{route('home.projects')}}">Projects</a></li>
                        <li><a href="{{route('home.about')}}">About</a></li>
                        <li><a href="{{route('home.contact')}}">Contact Us</a></li>
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    <a href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Contact</h3>
              <address>Company-Address</address>
              <ul class="list-unstyled links">
                <li><a href="tel://11234567890">Phone-Number 1</a></li>
                <li><a href="tel://11234567890">Phone-Number 2</a></li>
                <li>
                  <a href="mailto:info@mydomain.com">Company Mail</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Sources</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Partners</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Our Vision</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
                All Rights Reserved. &mdash; Designed with love 
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/tiny-slider.js')}}"></script>
    <script src="{{url('js/aos.js')}}"></script>
    <script src="{{url('js/navbar.js')}}"></script>
    <script src="{{url('js/counter.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    @yield('js')

</body>

</html>