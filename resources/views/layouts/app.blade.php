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
   
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" src="{{ asset('js/nicepage.js') }}" media="screen">
  <link rel="stylesheet" src="{{ asset('css/nicepage.css') }}">
    <script>
    $( function() {
        $( "#dob" ).datepicker({
            dateFormat: 'dd-mm-yy',
            autoclose: true,
            changeYear: true,
            changeMonth: true,
            yearRange: '1930:-0',
            maxDate: '-0y'
        });        
    } );
    
    function ctrlBtn(checkboxElem) {
    if (checkboxElem.checked) {
        $('#btnReg').removeAttr('disabled');
    } else {
        $('#btnReg').attr('disabled','disabled');
    }
    }
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
    <script>
    /*Get Township short term json */
    $(document).ready(function(){
        var tsc = "{{ url('document/townshipcode.json')}}";
        $.getJSON( tsc , function( result ){ 
            $.each(result, function(i, option){
                $('#nrc-code').append($('<option/>').attr("value", option.value).text(option.value));
            });
        });
    });
    $(document).ready(function(){
        document.getElementById("lblimage").style.display="none";
        document.getElementById("image").style.display="none";
    });
    function kbzform() {
        document.getElementById("payment-type").value="kbzpay";
        var x = document.getElementById("image");
        var y= document.getElementById("lblimage");
        if (x.style.display === "none" || y.innerHTML != "KBZ Pay") {
            y.innerHTML = "KBZ Pay";
            y.style.display = "block";
            x.style.display = "block";
        } else {
            y.style.display ="none";
            x.style.display = "none";
        }
    }
    function onepayform(){
        document.getElementById("payment-type").value="onepay";
        var x = document.getElementById("image");
        var y= document.getElementById("lblimage");
        if (x.style.display === "none" || y.innerHTML != "One Pay") {            
            y.innerHTML="One Pay";
            x.style.display = "block";
            y.style.display = "block";

        } else {
            x.style.display = "none";
            y.style.display = "none";

        }
    }
    function wavepayform(){
        document.getElementById("payment-type").value="wavepay";
        var x = document.getElementById("image");
        var y= document.getElementById("lblimage");
        if (x.style.display === "none" || y.innerHTML != "Wave Pay") {
            y.innerHTML = "Wave Pay";
            x.style.display = "block";
            y.style.display = "block";
        } else {
            x.style.display = "none";
            y.style.display = "none";
        }
    }
    function cbpayform(){
        document.getElementById("payment-type").value="cbpay";
        var x = document.getElementById("image");
        var y= document.getElementById("lblimage");
        if (x.style.display === "none" || y.innerHTML != "CB Pay") {
            y.innerHTML = "CB Pay";
            x.style.display = "block";
            y.style.display = "block";
        } else {
            x.style.display = "none";
            y.style.display = "none";
        }
    }
    
    function submitForm(){
        var isClick = document.getElementById("payment-type").value;
        if(isClick == ""){
            // 
            document.getElementById("reqClick").innerHTML = "Please Choose Payment Method.";
            document.getElementById("reqClick").style.color = "red";
        }else{
            document.getElementById("regFrm").submit();
        }
    }
    </script>
    <script>
        @yield('script');
    </script>
</head>
<body>
    <div id="app">
        <div class="fixed-top ">
            <div class="logo">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-lg-4 child_logo">                
                        <img class="imgresp canon" id="first-logo" src="{{url('/img/Canon.png')}}" > 
                    </div>
                    <div class="col-lg-4 col-sm-4 child_logo">
                        <img class="imgresp marathon" id="second-logo" src="{{url('/img/cpmlogo.jpeg')}}">
                    </div>
                    <div class="col-sm-4 col-lg-4 child_logo" >
                        <img class="imgresp mgr" id="third-logo" src="{{url('/img/MGR.png')}}">       
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="bg-nav">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}" id="hm-nav">
                    Home {{-- {{ config('app.name', 'PHOTOMARATHON') }} --}}                    
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">                                
                            @if(Route::has('about'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-1" href="{{ route('about')}}">{{ __('About') }} </a>
                                </li>
                            @endif
                            @if(Route::has('prizes'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-1" href="{{ route('prizes')}}">{{ __('Contest & Prizes') }} </a>
                                </li>
                            @endif
                            @if(Route::has('termncondition'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-3" href="{{ route('termncondition')}}">{{ __('Terms & Conditions') }} </a>
                                </li>
                            @endif
                            @if(Route::has('ptogallery'))
                                <li class="nav-item"> 
                                    <a class="nav-link" id="lin-nav-1" href="{{ route('ptogallery')}}">{{ __('Photo Gallery') }} </a>
                                </li>
                            @endif
                            @if(Route::has('howto'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-1" href="{{ route('howto')}}">{{ __('How To Register') }} </a>
                                </li>
                            @endif
                            @if(Route::has('contact'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-2" href="{{ route('contact')}}">{{ __('Contact') }} </a>
                                </li>
                            @endif
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
                                
                            @if(Route::has('dashboard'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-1" href="{{ route('dashboard')}}">{{ __('CPM-Enrollment') }} </a>
                                </li>
                            @endif
                            @if(Route::has('submission'))
                                <li class="nav-item">
                                    <a class="nav-link" id="lin-nav-1" href="{{ route('submission')}}">{{ __('CPM-Submission') }} </a>
                                </li>
                            @endif
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="lgout-ddl">
                                        @if(Auth::user()->access!=null)
                                            <a class="dropdown-item" id="lgout-nav" href="{{ route('admin_view') }}"                                            
                                        >Admin View</a>
                                            <a class="dropdown-item" id="lgout-nav" href="{{ route('config')}}">Configuration</a>
                                        @endif

                                        @if(Auth::user()->access==1)
                                            <a class="dropdown-item" id="lgout-nav" href="{{ route('admin_reg')}}">{{ __('Create admin') }} </a>
                                        @endif
                                        <a class="dropdown-item" id="lgout-nav" href="{{ route('member.edit', Auth::user()->id)}}">{{ __('Profile') }} </a>
                                        
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
        <main class="py-4 container ">            
            <div id="content">
                @yield('content')
            </div>
        </main>
        <footer class="bg-light text-center " id="foot">
            <!-- Grid container -->
            <div class="container">
              <!--Grid row-->
              <div class="row justify-content-center" id="txtdiv">
                <!--Grid column-->
                <div class="col-lg-10 col-md-12 mb-4 mb-md-0 ft-bg ">
                  <h3 class="text-uppercase" id="txtFooter">The Region’s Largest On-Ground Photography Competition</h3>
                </div>
                <div class="col-lg-6">
                  <h4 id="ft-pg">
                    Join the multitude of participants who rose to the challenge of this awesome photo competition and create photographic masterpieces in line with assigned themes - under time pressure.
                  </h4>
                </div>
                {{-- <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Footer text</h5>          
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                  </p>
                </div> --}}
              </div>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(138, 23, 23, 0.2)">
              ©️ 2020 Copyright:
              <a class="text-dark" href="https://mgr.com.mm/">myanmargoldenrock.com.mm</a>              
              <div class="sharethis-inline-share-buttons"></div>
            </div>
            <!-- Copyright -->             
          </footer>
    </div>
</body>
</html>