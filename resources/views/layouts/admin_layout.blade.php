@if(Auth::user()->access !=null)

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    
<title>Canon Photomarathon Myanmar III</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   
    {{-- conflict with datepicker  --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- start of datepicker script and css --}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- <script src="{{ asset('js/maginifier.js') }}"></script> --}}
    

    <script>


    $( function() {
        $( "#dob" ).datepicker({
            dateFormat: 'dd/mm/yy',
            autoclose: true
        });
    } );
    </script> 
    {{-- end of datepicker script and css --}}
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5edf63078d9f5e00138d7ac1&product=inline-follow-buttons" async="async"></script>
    <script type="text/javascript">
      var msg  = document.title;
      var speed = 650;
      var endChar = " . ";
      var pos = 0;
      
      function moveTitle()
      {
       	var ml = msg.length;
      		
      	title = msg.substr(pos,ml) + endChar + msg.substr(0,pos);
    	document.title = title;
      	
        pos++;
    	if (pos > ml) pos=0;
        window.setTimeout("moveTitle()",speed);
      }
  
      moveTitle();
      
  </script>
  <script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" defer rel="stylesheet">
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
    <div id="app">
        <div class=" ">
            
            <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="bg-nav">
                <div class="container">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">                                
                           
                            
                            <li class="nav-item">
                                <a class="nav-link" id="lin-nav-2" href="{{ url('/member/pending')}}">{{ __('Registration ') }} </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="lin-nav-2" href="{{ url('/enroll/student')}}">{{ __('CPM-Enrollment ') }} </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="lin-nav-2" href="{{ url('/submit/student')}}">{{ __('CPM-submission ') }} </a>
                            </li>

                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="lgout-ddl">
                                        @if(Auth::user()->access!=null)
                                            <a class="dropdown-item" id="lgout-nav" href="{{ route('admin_view') }}"
                                        >Admin View</a>
                                        @endif

                                        @if(Auth::user()->access==1)
                                            <a class="dropdown-item" id="lgout-nav" href="{{ route('admin_reg')}}">{{ __('Create admin') }} </a>
                                            <a class="dropdown-item" id="lgout-nav" href="{{ route('config')}}">{{ __('Configuration') }} </a>
                                        @endif
                                        
                                        <a class="dropdown-item" id="lgout-nav" href="{{ route('logout') }}"
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
        <main class="py-4 ">   
              
                 
            <div id="admin_content">
                @yield('content')
            </div>
        </main>
        <footer class="bg-light text-center ">
            <!-- Grid container -->
            
                       
          </footer>
    </div>
</body>
</html>
@else 
  <script>window.location = "/";</script>
@endif