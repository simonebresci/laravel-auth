<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> --}}
        {{-- Font awesome installato tramite npm --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>@yield('title')</title>
  <head>
  <body>
    <div class="container-fluid bg-dark">
      <div class="container">
      <header>

          <div class="header-container">



            {{-- BOOTSTRAP NAVBAR --}}
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href={{route('home')}}>PIZZA STORE</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link active" href={{route('home')}}>Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href={{route('pizzas.index')}}>Pizzas</a>
                  <a class="nav-item nav-link" href={{route('pizzas.create')}}>Add New Pizza</a>
                  <a class="nav-item nav-link disabled" href="#"></a>

                </div>
              </div>
            </nav>

            <div class="user-logged">

              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth

                          <i class="fa fa-user" aria-hidden="true"></i>
                          {{Auth::user()->name}}
                          <i class="fas fa-at"></i>
                          {{Auth::user()->email}}
                          {{-- <a href="{{ url('/home') }}">Home</a> --}}

                          <i class="fas fa-sign-out-alt"></i>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a> --}}

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

                      @else
                          <i class="fas fa-sign-in-alt"></i>
                          <a href="{{ route('login') }}">Login</a>

                          @if (Route::has('register'))
                              <i class="fas fa-pen-nib"></i>
                              <a href="{{ route('register') }}">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif
            </div>

            {{-- /BOOTSTRAP NAVBAR --}}
          </div>
          {{-- /Header Container --}}
        </header>
        <div class="container-fluid main-content-background bg-light">
          <div class="container main-content">
              @yield('content')
          </div>
        </div>

        <footer class="text-center text-white">
          <!-- Grid container -->
          <div class="bg-light container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #3b5998;"
                href="#!"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #55acee;"
                href="#!"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Google -->
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #dd4b39;"
                href="#!"
                role="button"
                ><i class="fab fa-google"></i
              ></a>

              <!-- Instagram -->
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #ac2bac;"
                href="#!"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>

              <!-- Linkedin -->
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #0082ca;"
                href="#!"
                role="button"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <!-- Github -->
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #333333;"
                href="#!"
                role="button"
                ><i class="fab fa-github"></i
              ></a>
            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class="text-center p-3 text-dark" >
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
          </div>
          <!-- Copyright -->
        </footer>
      </div>
      {{-- /Container --}}
      </div>
    {{-- /Container fluid --}}
  </body>
</html>
