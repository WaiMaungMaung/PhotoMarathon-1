@if(Auth::user()->cmp!=null)

@extends('layouts.app')
<script>
    var d = {!! json_encode($data) !!};
    if(d['isValid']){
        $date = d['to_time'];
        $stu_enroll = 'stu_enroll';
        $stu_txtexp = '';
        $theme1_enroll='theme1_enroll';
        $theme1_txtexp='';
        $theme2_enroll='theme2_enroll';    
        $theme2_txtexp='';    
        countdown($date,$stu_enroll,$stu_txtexp,$theme1_enroll,$theme1_txtexp,$theme2_enroll,$theme2_txtexp);     
    }
    else{
        $date = d['from_time'];
        $stu_enroll ='stu_enroll_err';
        $stu_txtexp = 'stu_txtexp';
        $theme1_enroll='theme1_enroll_err';
        $theme1_txtexp='theme1_txtexp';
        $theme2_enroll='theme2_enroll_err';    
        $theme2_txtexp='theme2_txtexp';
        countdown($date,$stu_enroll,$stu_txtexp,$theme1_enroll,$theme1_txtexp,$theme2_enroll,$theme2_txtexp);
    }
    function countdown($date,$stu_enroll,$stu_txtexp,$theme1_enroll,$theme1_txtexp,$theme2_enroll,$theme2_txtexp){
        var countDownDate = new Date($date).getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        var cd = days + "d " + hours + "h "+ minutes + "m " + seconds + "s " ;
        document.getElementById($stu_enroll).innerHTML = cd;
        document.getElementById($theme1_enroll).innerHTML = cd;
        document.getElementById($theme2_enroll).innerHTML = cd;      
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById($stu_enroll).innerHTML = "";            
            document.getElementById($theme1_enroll).innerHTML = "";
            document.getElementById($theme2_enroll).innerHTML = ""; 
            document.getElementById($stu_txtexp).innerHTML = "Sorry, Submission time is expired!";
            document.getElementById($theme1_txtexp).innerHTML = "Sorry, Submission time is expired!";
            document.getElementById($theme2_txtexp).innerHTML = "Sorry, Submission time is expired!";
            }
        }, 1000);
    }
</script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4><strong>{{ __('Enrollment') }}</strong</h4></div>

                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <div class="container">
                            <div id="accordion">
                                <div class="card">
                                   <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne"><strong>Student Category </strong></a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body ">
                                            This is Theme I photo.<br>
                                            This is Theme I photo.<br>
                                            This is Theme I photo.<br>
                                            This is Theme I photo.<br>
                                            This is Theme I photo.<br>
                                            @if ($data['age']<21)
                                                @if ($data['isValid'])
                                                    <p class="text-right txtsuccess" id="stu_enroll"></p>
                                                    @if(DB::table('enrollments')
                                                        ->where([  ['cpm','=',Auth::user()->cmp],
                                                        ['theme_category','=','Student'],
                                                        ])->first())
                                                        <p class="alert text-center alert-success">You already Enrolled,
                                                        Please submit your photo
                                                        <a href="{{url('/submission')}}">CPM-submission</a> </p>
                                                    @else
                                                        <a class="text-white" href="{{ url('enrollment/Student') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a><br><br>
                                                    @endif
                                                @else
                                                    <p class="text-right txtexp" id="stu_enroll_err"></p>
                                                    <p class="alert text-center alert-danger" id="stu_txtexp">Sorry, Enrollment Time is not start</p>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        <strong>Open Category Theme - 1</strong></a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            This is Theme II photo.</br>
                                            This is Theme II photo.</br>
                                            This is Theme II photo.</br>
                                            This is Theme II photo.</br>
                                            This is Theme II photo.</br>
                                            @if($data['isValid'])
                                                <p class="text-right txtsuccess" id="theme1_enroll"></p>
                                                @if(DB::table('enrollments')
                                                    ->where([
                                                        ['cpm','=',Auth::user()->cmp],
                                                    ['theme_category','=','Theme1'],
                                                    ])->first())
                                                    <p class="alert text-center alert-success">You already Enrolled,
                                                        Please submit your photo
                                                    <a href="{{url('/submission')}}">CPM-submission</a> </p>
                                                @else
                                                    <a class="text-white" href="{{ url('enrollment/Theme1') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a></br></br>
                                                @endif
                                            @else
                                                <p class="text-right txtexp" id="theme1_enroll_err"></p>
                                                <p class="alert text-center alert-danger" id="theme1_txtexp">Sorry, Enrollment Time is not start</p>
                                            @endif                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        <strong>Open Category Theme - 2</strong></a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">This is Theme III photo.</br>
                                            This is Theme III photo.</br>
                                            This is Theme III photo.</br>
                                            This is Theme III photo.</br>
                                            This is Theme III photo.</br>
                                            @if ($data['isValid'])
                                                <p class="text-right txtsuccess" id="theme2_enroll"></p>
                                                @if(DB::table('enrollments')
                                                    ->where([
                                                        ['cpm','=',Auth::user()->cmp],
                                                    ['theme_category','=','Theme2'],
                                                    ])->first())
                                                    <p class="alert text-center alert-success" >You already Enrolled,
                                                        Please submit your photo
                                                    <a href="{{url('/submission')}}">CPM-submission</a> </p>
                                                @else
                                                    <a class="text-white" href="{{ url('enrollment/Theme2') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a></br></br>
                                                @endif
                                            @else
                                                <p class="text-right txtexp" id="theme2_enroll_err"></p>
                                                <p class="alert text-center alert-danger" id="theme2_txtexp">Sorry, Enrollment Time is not start</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@else 
<script>alert('Your Registration is processing ,Please wait for Admin Approve');</script>

<script>window.location = "/";</script>
  
@endif

