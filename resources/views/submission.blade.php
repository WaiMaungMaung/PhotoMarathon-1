@if(Auth::user()->cmp!=null)
@extends('layouts.app')
<script>        
    var d = {!! json_encode($data) !!};
    if(d['isValidStudent']){
        $date = d['stu_end_time'];
        $pid = 'cd_student';
        $txtexp='';
        countdown($date,$pid,$txtexp);
    }else{
        $date = d['stu_from_time'];
        $pid = 'cd_student_err';
        $txtexp = 'stu_txtexp';
        countdown($date,$pid,$txtexp);
    }
    if(d['isValidTheme1']){
        $date = d['theme1_end_time'];
        $pid = 'cd_theme1';
        $txtexp = 'theme1_txtexp';
        countdown($date,$pid,$txtexp);       
    }else{
        $date = d['theme1_from_time'];
        $pid = 'cd_theme1_err';
        $txtexp = 'theme1_txtexp'
        countdown($date,$pid,$txtexp);
    }
    if(d['isValidTheme2']){
        $data=d['theme2_end_time'];
        $pid = 'cd_theme2';
        $txtexp = 'theme2_txtexp'
        countdown($date,$pid,$txtexp);
    }else{
        $date = d['theme2_from_time'];
        $pid = 'cd_theme2_err';
        $txtexp = 'theme2_txtexp'
        countdown($date,$pid,$txtexp);
    }
    
    function countdown($date,$pid,$txtexp){
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
        document.getElementById($pid).innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s " ;
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById($pid).innerHTML = "";
            document.getElementById($txtexp).innerHTML = "Sorry, Submission time is expired!";
            }
        }, 1000);
    }
</script>
@section('content')
<div class="containger">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><strong>{{ __('Submit Your photo') }}</strong</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div clss="container">
                        <div id="accordion">
                            @if(DB::table('enrollments')
                            ->where([
                                ['cpm','=',Auth::user()->cmp],
                            ['theme_category','=','Student'],
                            ])->first())
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne"><strong>Student Category</strong></a>
                                </div>                                
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        This is student category photo.</br>
                                        This is student category photo.</br>
                                        This is student category photo.</br>
                                        This is student category photo.</br>
                                        This is student category photo.</br>                                        
                                            @if($data['theme1'] > 0 )                          
                                                <p class="alert text-center alert-danger">You already uploaded photo.</p>
                                            @elseif($data['isValidStudent'])
                                                <p class="text-right txtsuccess" id="cd_student"></p>
                                                <a class="text-white" href="{{ url('photosubmit/Student') }}"><button type="button" class="btn btn-success enrollbtn" >Submit</button></a>
                                                <br><br>                                                
                                            @else
                                                <p class="text-right  txtexp" id = "cd_student_err"></p>
                                                <p class="alert text-center alert-danger" id="stu_txtexp">Sorry, Submission Time is not start</p>
                                            @endif
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(DB::table('enrollments')
                            ->where([
                                ['cpm','=',Auth::user()->cmp],
                            ['theme_category','=','Theme1'],
                            ])->first())
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo"><strong>Open Category Theme - I</strong></a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">                                                                
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        @if($data['theme2'] > 0)                                                                   
                                            <p class="alert text-center alert-danger">You already uploaded photo.</p>
                                        @elseif($data['isValidTheme1'])                                            
                                            <p class="text-right txtsuccess" id="cd_theme1"></p>
                                            <a class="text-white" href="{{ url('photosubmit/Theme1') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                            <br></br>
                                        @else
                                            <p class="text-right txtexp" id = "cd_theme1_err"></p>
                                            <p class="alert text-center alert-danger" id ="theme1_txtexp">Sorry, Submission Time is not start</p>                                        
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(DB::table('enrollments')
                                            ->where([
                                                ['cpm','=',Auth::user()->cmp],
                                            ['theme_category','=','Theme2'],
                                            ])->first())    
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"><strong>Open Category Theme - II</strong></a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">                                    
                                    <div class="card-body">
                                        This is Theme II photo.</br>
                                        This is Theme II photo.</br>
                                        This is Theme II photo.</br>
                                        This is Theme II photo.</br>
                                        This is Theme II photo.</br>  
                                        @if($data['theme3'] > 0)                       
                                            <p class="alert text-center alert-danger">You already uploaded photo.</p>
                                        @elseif($data['isValidTheme2'])                                        
                                            <p class="text-right txtsuccess" id="cd_theme2"></p>
                                            <a class="text-white" href="{{ url('photosubmit/Theme2') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                            <br><br>
                                        @else
                                            <p class="text-right txtexp" id = "cd_theme2_err"></p>
                                            <p class="alert text-center alert-danger" id="theme2_txtexp">Sorry, Submission Time is not start</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@else 
<script>alert('Your payment slip is processing ,Please wait for Admin Approve');</script>
  <script>window.location = "/";</script>
@endif
