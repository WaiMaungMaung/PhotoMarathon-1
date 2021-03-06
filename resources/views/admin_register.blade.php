@guest
@else    
@if(Auth::user()->access==1)
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin_reg') }}">
                        @csrf
                        @error('new_nrc')                      

                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           U can't registered two times with one NRC.                            
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
                                <input id="nrc" type="text" class="form-control col-4 @error('nrc') is-invalid @enderror" maxlength="6" name="nrc" required >

                                @error('nrc')
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

                        <div class="form-check row">
                            <div class="col-md-6 offset-md-4">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="access" id="exampleRadios1" value="" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Normal user
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="access" id="exampleRadios2" value="2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Admin
                                    </label>
                                  </div>
                            </div>
                          </div>
                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@else 
  <script>window.location = "/";</script>
@endif
@endguest
