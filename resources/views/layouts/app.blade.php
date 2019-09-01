<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token --><!-- 
    <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>{{ config('app.name', 'Ishmam') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('public/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public')}}/css/app.css">
    <!-- Fonts -->
    <style>
        .notfound{
          display: none;
        }
    </style>
    <script src="{{asset('public')}}/js/jquery-3.3.1.min.js"></script>

</head>
<body>
    
    <div class="container-fluid bg-light" style="padding: 0; height: 500px;">
        @auth  
        @php
          $role=Auth::user()->role;
        @endphp  
        <nav class="navbar navbar-dark bg-dark">
          <h2 style="color: aliceblue;">Navigation</h2>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dropdown-menu" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span id="arrow">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
            <span class="caret"></span>
          </button>
        </nav>
        @endauth
        @guest
        <div class="row w-100 justify-content-center bg-light" style="height: inherit;">
        @endguest
        @auth
        <div class="row w-100 justify-content-center" style="background-color: white; height: inherit;">
        @endauth
            @auth
            {{--============ Sidebar Part  ============--}}
               <nav class="col-md-2 col-sm-2 d-none d-md-block sidebar bg-light">
                  <div class="sidebar-sticky mt-2" id="dashboardMenu">
                    <ul class="nav flex-column">
                      @if($role=='user')
                          <li class="nav-item" >
                                <a class="nav-link "
                                  href="{{route('home')}}" style="{{Request::is('home') ?'font-weight: bold;' : ''}}" >
                                  Profile Page<span class="sr-only">(current)</span>
                                </a>
                          </li>
                          
                          <li class="nav-item" >
                            <a class="nav-link"  href="{{url('/change-password')}}"  style="{{Request::is('change-password') ?'font-weight: bold;' : ''}}">
                              Change Password 
                            </a>
                          </li>
                      @elseif($role=='admin')

                          <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}" style="{{Request::is('home') ?'font-weight: bold;' : ''}}">
                              <span data-feather="layers"></span>
                               Users
                            </a>
                          </li>
                      @endif
                    </ul>
                  </div>
               </nav>
            @endauth

            @yield('content')
        @guest
        </div>
        @endguest
        @auth
        </div>
        @endauth        
    </div>  
    @auth
    <ul id="drop" class="nav navbar-nav ">
        <li class="dropdown">
          <ul class="dropdown-menu text-center collapse navbar-collapse" style="width: 166px; padding:15px 0px 15px 0px;">
            <li><a href="{{route('change-password')}}">Reset Password <span class="glyphicon glyphicon-cog pull-right"></span></a>

            </li>
            <li class="divider" style="background: black;height: 1px;padding: 0px;width: 164px;"></li>
            <li><a href="{{route('logout')}}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Log-out<span class="glyphicon glyphicon-stats pull-right"></span></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </li>
    </ul>
    @endauth
    <script src="{{asset('public')}}/js/custom.js" defer></script>   
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('public')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('public')}}/js/popper.min.js"></script>
    <script src="{{asset('public')}}/js/bootstrap.min.js"></script>

</body>
</html>
