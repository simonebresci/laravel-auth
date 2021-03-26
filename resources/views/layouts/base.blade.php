<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> --}}
        {{-- Font awesome installato tramite npm --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('title')</title>
  <head>
  <body>
    <div class="container">
    <header>

        <div class="header-container">

          <div class="user-logged">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {{Auth::user()->name}}
                        {{Auth::user()->email}}
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


          </div>

          {{-- BOOTSTRAP NAVBAR --}}
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PIZZA STORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/pizzas">Pizzas</a>
                <a class="nav-item nav-link" href={{route('pizzas.create')}}>Add New Pizza</a>
                <a class="nav-item nav-link disabled" href="#"></a>

              </div>
            </div>
          </nav>

          {{-- /BOOTSTRAP NAVBAR --}}
        </div>
        {{-- /Header Container --}}
      </header>
      @yield('content')
    </div>
    {{-- /Container --}}
  </body>
</html>
