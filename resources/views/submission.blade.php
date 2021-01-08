@extends('layouts.app')

@section('content')
<div class="container">
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
                    <div class="container">
                        <div id="accordion">
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
                                    {{-- @foreach ($data as $count) --}}
                                        @if($data['theme1'] > 0 )                          
                                            <p class="alert text-center">You already uploaded photo.</p>
                                        @else
                                            <a class="text-white" href="{{ url('photosubmit/1') }}"><button type="button" class="btn btn-success enrollbtn" >Submit</button></a>
                                            <br><br>
                                        @endif                                        
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <strong>Open Category Theme - I</strong></a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    This is Theme I photo.</br>
                                    @if($data['theme2'] > 0)                                                                   
                                        <p class="alert text-center">You already uploaded photo.</p>
                                    @else
                                        <a class="text-white" href="{{ url('photosubmit/2') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                        <br></br>
                                    @endif                                        
                                    
                                </div>
                            </div>                            
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <strong>Open Category Theme - II</strong></a>
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
                                        @else
                                            <a class="text-white" href="{{ url('photosubmit/3') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a>
                                            <br><br>
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
