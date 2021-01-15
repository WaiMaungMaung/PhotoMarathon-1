@extends('layouts.admin_layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
    body,#lgout-ddl{
        font-size: medium;
    }
    #hm-nav{
        font-size:large;
        margin-top: 1.4%;
        font-size-adjust: inherit;
    }
</style>
<script>
  $(function () {
    $("input[id='datetimepicker']").datetimepicker({
    format:'Y-MM-DD hh:mm A'
    });
 });
 function frmSubmit($frmid,$type){
    document.getElementById($type).value=$type;
    document.getElementById($frmid).submit();
 }

</script>
<div class="container">
    <div class="row justify-content-center success">
        @if (!empty($data['msg']) && $data['msg'] == 'process successful!')
            <p class="alert alert-success" >{{ $data['msg'] }}</p>
        @elseif(!empty($data['msg']) && $data['msg'] == 'To time must be greater than From time!')
            <p class="alert alert-danger" >{{ $data['msg'] }}</p>
        @endif
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Registration Time Configuration') }}</div>
                <div class="card-body">
                    <form id="reg_time_frm" class="form-horizonal" method="post" action="{{route('reg-time-config')}}">                        
                        @csrf
                        @if (!empty($data['reg']))
                            <div class="row">                            
                                <div class="col-md-6">
                                    <label for="regft" class="col-md-2">From Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('regft') is-invalid @enderror" name="regft" required placeholder="dd-mm-yyyy" value="{{ $data['reg']->from_time}}">
                                    @error('regft')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="regtt" class="col-md-2">To Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('regtt') is-invalid @enderror" name="regtt" required placeholder="dd-mm-yyyy" value="{{ $data['reg']->to_time}}"/>
                                    @error('regtt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @else
                            <div class="row">                            
                                <div class="col-md-6">
                                    <label for="regft" class="col-md-2">From Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('regft') is-invalid @enderror" name="regft" required placeholder="dd-mm-yyyy">
                                    @error('regft')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="regtt" class="col-md-2">To Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('regtt') is-invalid @enderror" name="regtt" required placeholder="dd-mm-yyyy"/>
                                    @error('regtt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endif                        
                        <br>
                        <div>
                            <input type="hidden" id="reg" name="reg"/>
                            <button class="col-md-1 btn btn-primary" onclick="frmSubmit('reg_time_frm','reg')">Save</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Enrollment Time Configuration') }}</div>
                <div class="card-body">
                    <form id="enroll_time_frm" class="form-horizonal" method="post" action="{{route('enroll-time-config')}}">
                        @method('post')                      
                        @csrf
                        @if (!empty($data['enroll']))
                            <div class="row">                            
                                <div class="col-md-6">
                                    <label for="enrollft" class="col-md-2">From Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('enrollft') is-invalid @enderror" name="enrollft" required placeholder="dd-mm-yyyy" value="{{ $data['enroll']->from_time}}"/>
                                    @error('enrollft')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="enrolltt" class="col-md-2">To Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('enrolltt') is-invalid @enderror" name="enrolltt" required placeholder="dd-mm-yyyy" value="{{ $data['enroll']->to_time}}"/>
                                    @error('enrolltt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @else
                            <div class="row">                            
                                <div class="col-md-6">
                                    <label for="enrollft" class="col-md-2">From Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('enrollft') is-invalid @enderror" required placeholder="dd-mm-yyyy" name="enrollft"/>
                                    @error('enrollft')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="enrolltt" class="col-md-2">To Time</label>
                                    <input id="datetimepicker" type="text" class="col-md-6 form-control @error('enrolltt') is-invalid @enderror" required placeholder="dd-mm-yyyy" name="enrolltt"/>
                                    @error('enrolltt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                            
                        @endif                        
                        <br>
                        <div>
                            <input type="hidden" id="enroll" name="enroll"/>
                            <button class="col-md-1 btn btn-primary" onclick="frmSubmit('enroll_time_frm','enroll')">Save</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Submission Time Configuration') }}</div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">{{__('Student')}}
                        </div>
                        <div class="card-body">
                            <form id="student_time_frm" class="form-horizonal" method="post" action="{{route('student-time-config')}}">                        
                                @method('post')
                                @csrf
                                @if (!empty($data['student']))
                                    <div class="row">                            
                                        <div class="col-md-6">
                                            <label for="studentft" class="col-md-2">From Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('studentft') is-invalid @enderror" name="studentft" required placeholder="dd-mm-yyyy" value="{{ $data['student']->from_time}}"/>
                                            @error('studentft')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="studenttt" class="col-md-2">To Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('studenttt') is-invalid @enderror" name="studenttt" required placeholder="dd-mm-yyyy" value="{{ $data['student']->to_time}}"/>
                                            @error('studenttt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>                        
                                    </div>                                   
                                @else
                                    <div class="row">                            
                                        <div class="col-md-6">
                                            <label for="studentft" class="col-md-2">From Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('studentft') is-invalid @enderror" name="studentft" required placeholder="dd-mm-yyyy"/>
                                            @error('studentft')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="studenttt" class="col-md-2">To Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('studenttt') is-invalid @enderror" name="studenttt" required placeholder="dd-mm-yyyy"/>
                                            @error('studenttt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                   
                                @endif
                                <br>
                                <div>
                                    <input type="hidden" id="student" name="student"/>
                                    <button class="col-md-1 btn btn-primary" onclick="frmSubmit('student_time_frm','student')">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">{{__('Theme1')}}
                        </div>
                        <div class="card-body">
                            <form id="theme1_time_frm" class="form-horizonal" method="post" action="{{route('theme1-time-config')}}">                        
                                @method('post')
                                @csrf
                                @if (!empty($data['theme1']))
                                    <div class="row">                            
                                        <div class="col-md-6">
                                            <label for="theme1ft" class="col-md-2">From Time</label>                                        
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme1ft') is-invalid @enderror" name="theme1ft" required placeholder="dd-mm-yyyy" value="{{ $data['theme1']->from_time}}"/>
                                            @error('theme1ft')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="theme1tt" class="col-md-2">To Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme1tt') is-invalid @enderror" name="theme1tt" required placeholder="dd-mm-yyyy" value="{{ $data['theme1']->to_time}}"/>
                                            @error('theme1tt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                @else
                                    <div class="row">                            
                                        <div class="col-md-6">
                                            <label for="theme1ft" class="col-md-2">From Time</label>                                        
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme1ft') is-invalid @enderror" required placeholder="dd-mm-yyyy" name="theme1ft"/>
                                            @error('theme1ft')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="theme1tt" class="col-md-2">To Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme1tt') is-invalid @enderror" required placeholder="dd-mm-yyyy" name="theme1tt"/>
                                            @error('theme1tt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                @endif
                                <br>
                                <div>
                                    <input type="hidden" id="theme1" name="theme1"/>
                                    <button class="col-md-1 btn btn-primary" onclick="frmSubmit('theme1_time_frm','theme1')">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">{{__('Theme2')}}
                        </div>
                        <div class="card-body">
                            <form id="theme2_time_frm" class="form-horizonal" method="post" action="{{route('theme2-time-config')}}">                        
                                @method('post')
                                @csrf
                                @if (!empty($data['theme2']))
                                    <div class="row">                            
                                        <div class="col-md-6">
                                            <label for="theme2ft" class="col-md-2">From Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme2ft') is-invalid @enderror" name="theme2ft" required placeholder="dd-mm-yyyy" value="{{ $data['theme2']->from_time}}"/>
                                            @error('theme2ft')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="theme2tt" class="col-md-2">To Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme2tt') is-invalid @enderror" name="theme2tt" required placeholder="dd-mm-yyyy" value="{{ $data['theme2']->to_time}}"/>
                                            @error('theme2tt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                @else
                                    <div class="row">                            
                                        <div class="col-md-6">
                                            <label for="theme2ft" class="col-md-2">From Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme2ft') is-invalid @enderror" required placeholder="dd-mm-yyyy" name="theme2ft"/>
                                            @error('theme2ft')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="theme2tt" class="col-md-2">To Time</label>
                                            <input id="datetimepicker" type="text" class="col-md-6 form-control @error('theme2tt') is-invalid @enderror" required placeholder="dd-mm-yyyy" name="theme2tt"/>
                                            @error('theme2tt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                @endif                                
                                <br>
                                <div>
                                    <input type="hidden" id="theme2" name="theme2"/>
                                    <button class="col-md-1 btn btn-primary" onclick="frmSubmit('theme2_time_frm','theme2')">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
