@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4><strong>{{ __('Submit Your photo') }}</strong</h4></div>

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
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne"><strong>Theme I</strong></a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                                        This is Theme I photo.</br>
                            
                                        <a class="text-white" href="{{ url('photosubmit/1') }}"><button type="button" class="btn btn-success enrollbtn" >Submit</button></a></br></br>
    </div>
</div>
</div>
                    <div class="card">
                         <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        <strong>Theme II</strong></a>
                        </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            <a class="text-white" href="{{ route('photosubmit') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></a></br></br>
                            </div>
                            </div>
                            </div>
                            
                    <div class="card">
                         <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        <strong>Theme III</strong></a>
                        </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">This is Theme III photo.</br>
                            This is Theme III photo.</br>
                            This is Theme III photo.</br>
                            This is Theme III photo.</br>
                            This is Theme III photo.</br>
                            <a class="text-white" href="{{ route('photosubmit') }}"><button type="button" class="btn btn-success enrollbtn">Submit</button></br></a></br>
                            </div>
                            </div>
                            </div>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
