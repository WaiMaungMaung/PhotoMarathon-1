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
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="regFrm">
                        @csrf
                        @error('new_nrc')
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           Can't registered two times with same NRC.                            
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                         @enderror
                         @error('nrc-box')
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Invalid Nrc Code!                             
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                        @enderror
                        @error('nrc-code')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Nrc Township Code!
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                       @enderror
                       @error('nrc-type')
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Nrc Type!                             
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                      @enderror
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                      
                        <div class="form-group row">
                            <label for="nrc" class="col-4 col-form-label text-md-right">{{ __('NRC') }}</label>
                            <div class="col-lg-8">
                                <select name="nrc-box" id="nrc-box" class="form-control col-2 float-left">
                                    <option value="">-</option>
                                    @for($i=1; $i <= 15; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor 
                                </select>
                                <input class="form-control col-1 float-left" type="text" placeholder="/" readonly>
                                <select name="nrc-code" id="nrc-code" class="form-control col-3 float-left">
                                    <option value="">-</option>
                                </select>
                                <select name="nrc-type" id="nrc-type" class="form-control col-2 float-left">
                                    <option value="">-</option>
                                    <option value="(N)">(N)</option>
                                    <option value="(Ei)">(Ei)</option>
                                    <option value="(Pyu)">(Pyu)</option>
                                </select>                                
                                <input id="nrc" type="text" class="form-control col-4 @error('nrc') is-invalid @enderror" onkeypress="return isNumberKey(event)" maxlength="6" name="nrc" required >
                                @error('nrc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
                            <div class="col-md-8">
                                {{-- date picker --}}
                                <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" required maxlength="10" minlength="10" placeholder="dd-mm-yyyy">
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ph-no" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>
                            <div class="col-md-8">
                                <input id="ph-no" type="text" class="form-control" name="ph-no" required onkeypress="return isNumberKey(event)" minlength="9" maxlength="11">
                                @error('ph-no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                            <div class="col-md-8">
                                <input id="location" type="text" class="form-control" name="location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="t-shirt-size" class="col-md-4 col-form-label text-md-right">{{ __('T-shirt Size') }}</label>
                            <div class="col-md-8">
                                <select name="t-shirt-size" id="t-shirt-size" class="form-control float-left" required>
                                    <option value="">-</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                                @error('t-shirt-size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="payment" class="col-md-4 col-form-label text-md-right">{{ __('Payment Method') }}</label>
                            <div class="col-md-8 col-sm-8" id="payment-div">
                                <label for="reqClick" id="reqClick"></label>
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <img class="logo" src="{{url('/img/kbzpaylogo.png')}}" alt="kbz pay" onclick="kbzform()" required>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img class="logo" src="{{url('/img/onepaylogo.png')}}" alt="one pay" onclick="onepayform()">
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img class="logo" src="{{url('/img/wavepaylogo.png')}}" alt="wave pay" onclick="wavepayform()">
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img class="logo" src="{{url('/img/cbpaylogo.png')}}" alt="cb pay" onclick="cbpayform()">
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group row">                            
                            <label for="image" id="lblimage" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-8" id="pf">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" id="payment-type" name="payment-type"/>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input id="chkagree" type="checkbox" class="@error('chkagree') is-invalid @enderror" name="chkagree" required onchange="ctrlBtn(this)">                                
                                <label for="chkagree" id="lblagree" class="col-form-label text-md-right">{{__('Agree with terms and conditions')}}</label>
                            </div>
                        </div>                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="btnReg" class="btn btn-primary" onclick="submitForm()" disabled>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

