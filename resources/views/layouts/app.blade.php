<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5edf63078d9f5e00138d7ac1&product=inline-follow-buttons" async="async"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css')}}" rel="stylesheet"/>
    <meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />	
	<style type="text/css">
		.zawgyi{
			font-family:Zawgyi-One;
		}
		.unicode{
			font-family:Myanmar3,Yunghkio,'Masterpiece Uni Sans';
		}
	</style>
</head>
<body>
    <div id="app" class= "container-fluid">
            <!-- Just an image -->

        <div class="container-fluid fixed-top ">
            <div class="container-fluid logo">
            <div class="row">
                
               <div class="col-sm-4 col-lg-4  ">                
                <img class="imgresp canon" src="{{url('/img/canon_logo.png')}}"> 
            </div>
            <div class="col-lg-4 col-sm-4">
                <img class="imgresp marathon" src="{{url('/img/marathon_logo.jpg')}}">

            </div>

                <div class="col-sm-4  ml-auto col-lg-4 ">
                    <img class="imgresp mgr" src="{{url('/img/MGR.png')}}">       
                </div>
            </div>
        </div>
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <a class="navbar-brand" href="#">
            <img src="/img/canon_logo.png">
        </a>
        <a class="navbar-brand" href="#">
            <img src="/img/marathon_logo .jpg" >            
        </a>
        <a class="navbar-brand">
            <img src="/img/MGR.png">
        </a>
        </nav> -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'PHOTOMARATHON') }} --}}
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">                        
                        @if(Route::has('about'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about')}}">{{ __('About') }} </a>
                            </li>
                        @endif
                        @if(Route::has('contact'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact')}}">{{ __('Contact') }} </a>
                            </li>
                        @endif
                        @if(Route::has('termncondition'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('termncondition')}}">{{ __('Term & Condition') }} </a>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </div>
            </div>
        </nav>
        </div>

        <main class="py-4 container">            
            <div id="content">
                @yield('content')
            </div>
        </main>

        <footer class="bg-light text-center ">
            <!-- Grid container -->
            <div class="container p-4">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Footer text</h5>
          
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                  </p>
                </div>
                <!--Grid column-->
          
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Footer text</h5>
          
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                  </p>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
              © 2020 Copyright:
              <a class="text-dark" href="https://mgr.com.mm/">myanmargoldenrock.com.mm</a>              
              <div class="sharethis-inline-share-buttons"></div>
            </div>
            <!-- Copyright -->             
          </footer>
    </div>
</body>
</html>
