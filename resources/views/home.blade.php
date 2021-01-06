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
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne"><strong>Student Category</strong></a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                        This is Student Category photo.</br>
                                        This is Student Category photo.</br>
                                        This is Student Category photo.</br>
                                        This is Student Category photo.</br>
                                        This is Student Category photo.</br>
                                        <a class="text-white" href="{{ route('enroll') }}"><button type="button" class="btn btn-success enrollbtn" >Enroll</button></a></br></br>
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
                            This is Theme I photo.</br>
                            This is Theme I photo.</br>
                            This is Theme I photo.</br>
                            This is Theme I photo.</br>
                            This is Theme I photo.</br>
                            <a class="text-white" href="{{ route('enroll') }}"><button type="button" class="btn btn-success enrollbtn">Enroll</button></a></br></br>
                            </div>
                            </div>
                            </div>
                            
                    <div class="card">
                         <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        <strong>Open Category Theme - 2</strong></a>
                        </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            This is Theme II photo.</br>
                            <a class="text-white" href="{{ route('enroll') }}"><button type="button" class="btn btn-success enrollbtn">Enroll</button></br></a></br>
                            </div>
                            </div>
                            </div>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
