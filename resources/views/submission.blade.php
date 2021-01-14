@if(Auth::user()->cmp!=null)


@extends('layouts.app')
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
<<<<<<< HEAD
                                    This is student category photo.</br>
                                    This is student category photo.</br>
                                    This is student category photo.</br>
                                    This is student category photo.</br>
                                    This is student category photo.</br>
                                    {{-- @foreach ($data as $count) --}}
                                        @if($data['theme1'] > 0 )                          
                                            <p class="alert text-center">You already uploaded photo.</p>
                                        @else
                                            <a class="text-white" href="{{ url('photosubmit/Student') }}"><button type="button" class="btn btn-success enrollbtn" >Submit</button></a>
                                            <br><br>
                                        @endif                                        
                                    {{-- @endforeach --}}
=======
                                        This is student category photo.</br>
                                        This is student category photo.</br>
                                        This is student category photo.</br>
                                        This is student category photo.</br>
                                        This is student category photo.</br>                                        
                                            @if($data['theme1'] > 0 )                          
                                                <p class="alert text-center">You already uploaded photo.</p>
                                            @elseif($data['isValidStudent'])
                                                <a class="text-white" href="{{ url('photosubmit/Student') }}"><button type="button" class="btn btn-success enrollbtn" >Submit</button></a>
                                                <br><br>
                                            @else
                                                <p class="alert text-center"> Sorry, Submission Time is not start or Over </p>
                                            @endif
>>>>>>> 3907416cbb1f0d8202dd1dfd91ff919acf65a19e
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
<<<<<<< HEAD
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    @if($data['theme2'] > 0)                                                                   
                                        <p class="alert text-center">You already uploaded photo.</p>
                                    @else
                                        <a class="text-white" href="{{ url('photosubmit/Theme1') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                        <br></br>
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

=======
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        @if($data['theme2'] > 0)                                                                   
                                            <p class="alert text-center">You already uploaded photo.</p>
                                        @elseif($data['isValidTheme1'])
                                            <a class="text-white" href="{{ url('photosubmit/Theme1') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                            <br></br>
                                        @else
                                            <p class="alert text-center"> Sorry, Submission Time is not start or over </p>                                        
                                        @endif 
                                    </div>
                                </div>
                            </div>
>>>>>>> 3907416cbb1f0d8202dd1dfd91ff919acf65a19e
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
                                            <p class="alert text-center">You already uploaded photo.</p>
                                        @elseif($data['isValidTheme2'])
                                            <a class="text-white" href="{{ url('photosubmit/Theme2') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                            <br><br>
<<<<<<< HEAD
                                        @endif      
                                        
                                        
                                        
=======
                                        @else
                                            <p class="alert text-center"> Sorry, Submission Time is not start or over </p>
                                        @endif
>>>>>>> 3907416cbb1f0d8202dd1dfd91ff919acf65a19e
                                    </div>
                                </div>
                            </div>
                                @endif


                        
                        
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
=======
            </div>
>>>>>>> 3907416cbb1f0d8202dd1dfd91ff919acf65a19e
        </div>
    </div>
</div>
@endsection

@else 
<script>alert('Your payment slip is processing ,Please wait for Admin Approve');</script>

  <script>window.location = "/";</script>
@endif
