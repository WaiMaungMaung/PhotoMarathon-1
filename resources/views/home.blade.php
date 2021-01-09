@if(Auth::user()->cmp!=null)

@extends('layouts.app')

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
                                            This is Theme I photo.</br>
                                            This is Theme I photo.</br>
                                            This is Theme I photo.</br>
                                            This is Theme I photo.</br>
                                            This is Theme I photo.</br>
                                            @if(DB::table('enrollments')
                                                ->where([
                                                    ['cpm','=',Auth::user()->cmp],
                                                ['theme_category','=','Student'],
                                                ])->first())
                                <p class="alert text-center">You already Enrolled,
                                                                                                Please submit your photo
                                                                                                <a href="{{url('/submission')}}">CPM-submission</a> </p>
                                                                                           

                                            @else
                                                <a class="text-white" href="{{ url('enrollment/Student') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a></br></br>
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
                                @if(DB::table('enrollments')
                                    ->where([
                                        ['cpm','=',Auth::user()->cmp],
                                    ['theme_category','=','Theme1'],
                                    ])->first())
                                                                         <p class="alert text-center">You already Enrolled,
                                                                            Please submit your photo
                                                                            <a href="{{url('/submission')}}">CPM-submission</a> </p>
                                @else
                                    <a class="text-white" href="{{ url('enrollment/Theme1') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a></br></br>
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
                                @if(DB::table('enrollments')
                                    ->where([
                                        ['cpm','=',Auth::user()->cmp],
                                    ['theme_category','=','Theme2'],
                                    ])->first())
                                                                               <p class="alert text-center">You already Enrolled,
                                                                                Please submit your photo
                                                                                <a href="{{url('/submission')}}">CPM-submission</a> </p>
                                @else
                                    <a class="text-white" href="{{ url('enrollment/Theme2') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a></br></br>
                                @endif
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
  <script>window.location = "/";</script>
@endif

