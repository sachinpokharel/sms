
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'SMS') }}</title>

    <title>school management system</title>

    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
          <link rel="stylesheet" href="/css/docs.css">
        <!-- for right nav bar -->
    <!-- <link rel="stylesheet" href="/css/navbar-fixed-right.min.css"> -->
    <!-- for left nav bar -->
     <!-- <link rel="stylesheet" href="/css/navbar-fixed-left.min.css"> -->
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/docs.css') }}" rel="stylesheet">

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<script src="https://use.fontawesome.com/9712be8772.js"></script>

    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="../js/docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<header>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">

    <a class="navbar-brand" href="{{ url('/') }}">SMS</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-right" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">About school</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">About school</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">notice</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item">routine</a>
                    <a class="dropdown-item">notice</a>
                    <a class="dropdown-item">exam result</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">#</a>
                    <a class="dropdown-item">#</a>
                </div>
            </li>

        <!-- for sidebar shotcut -->
        <!-- <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-left">
                    <i class="fa fa-arrow-left"></i>
                    Fixed Left
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-top">
                    <i class="fa fa-arrow-up"></i>
                    Fixed Top
                    <small>(original)</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-right">
                    <i class="fa fa-arrow-right"></i>
                    Fixed Right
                </a>
            </li> -->
             <!-- <li class="nav-item" >
                 <a  class="nav-link" data-class="fixed-right" href="{{ url('/') }}">Home</a>
                </li> -->

                @if (!Auth::guest())
              <li class="nav-item">
                  <a class="nav-link"  href="{{ route('posts.create') }}">New Article</a></li>
                   @endif


    </ul>


                           <!-- Right Side Of Navbar -->
<div class=" nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="nav-link" data-class="fixed-right" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" data-class="fixed-right" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a  class="nav-link dropdown-toggle"   data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('posts.index') }}" >profile</a></li>
                                    <li>
                                     {{-- Laravel-permission blade helper --}}
                                        <a class="dropdown-item" href="/admin"><i class="fa fa-btn fa-unlock"></i>Admin</a>


                                        <a class="dropdown-item" href="{{ route('logout') }}"
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
                        </div>
                    </ul>
    </ul>
    </div>
</nav>

@if(Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>

        @yield('content')

    </div>
</header>
</html>

