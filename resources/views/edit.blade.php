@extends('layouts.app')
<style>
    #txtdiv{
        display: none;
    }
</style>

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin_view')}}" class="text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                       
                          </svg>

                    </a>


                    {{$data->cmp}}</div>

                    
                <div class="card-body ">
                    <form method="post" action="{{route('update_approve')}}" >
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}"  readonly autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}"  autocomplete="email" readonly>
                                
                            </div>
                        </div>                      
                        <div class="form-group row">
                            <label for="nrc" class="col-4 col-form-label text-md-right">{{ __('NRC') }}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nrc" value="{{$data->nrc}}" readonly>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
                            <div class="col-md-8">
                                {{-- date picker --}}
                                <input type="text" class="form-control" name="dob" maxlength="10" minlength="10" value="{{$data->dob}}" readonly>
                                
                            </div>
                        </div>                        
                        
                        <div class="form-group row">
                            <label for="ph-no" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>
                            <div class="col-md-8">
                                <input id="ph-no" type="text" class="form-control" value="{{$data->ph_no}}" name="ph-no" readonly >
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                            <div class="col-md-8">
                                <input id="location" type="text" class="form-control" name="location" value="{{$data->location}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="t-shirt-size" class="col-md-4 col-form-label text-md-right">{{ __('T-shirt Size') }}</label>
                            <div class="col-md-8">
                                <input id="t_shirt_size" type="text" class="form-control" name="t_shirt_size" value="{{$data->t_shirt_size}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="payment" class="col-md-4 col-form-label text-md-right">{{ __('Payment Method') }}</label>
                            <div class="col-md-8 col-sm-8" id="payment-div">
                                <div class="row">
                                   
                                    <div class="col-md-2 col-sm-2">
                                        <img id="slip" src="{{url("/img/".$data->payment_type."logo.png")}}" alt="kbz pay" onclick="kbzform()">
                                    </div>
                                    
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group row">                            
                            <label for="image" id="lblimage" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-8" id="pf">
                                <input id="image" type="file" class="form-control" name="image" >
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" id="payment-type" name="payment-type"/>
                        </div>   
                       
                                             
                      
                        <input type="hidden" name="id" value={{$data->id}} >

                        <strong class="row offset-md-4">Status::{{$data->status}}</strong>

                        @if(Auth::user()->access!=null)

                            <input  type="hidden" name="status" value={{$data->status}} readonly>
                       
                        @if($data->status!="Approved")

                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">Status</label>
                        <div class="col-md-8">
                            <select class="form-control" id="exampleFormControlSelect1" name="state">
                              <option value="Approved">Approve</option>
                              <option value="Rejected">Reject</option>
                              
                            </select>
                        </div>
                          </div>
                        
                        <input type="submit" class="btn btn-success enrollbtn" value="Send">
                  

                        
                        @else
                        {{-- <input type="submit" class="btn btn-success enrollbtn" value="Reject" > --}}
        {{-- <a href="{{ route('member.destroy', $data->id) }}" class="btn btn-danger" method="get">Delete</a> --}}

                        
                        @endif
                        @endif

                        
                    </form>
                </div>
            </div>
        </div>

       
        <div class="col-md-4">
            <div class="mag"> PaySlip<br>
              <img class="zoom" src="{{url("/payslips/$data->image")}}" alt=""> </div>
              
            </div>
          
          
           
            
        
    </div>
    
</div>
@endsection

