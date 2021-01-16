@extends('layouts.app')
@if(DB::table('enrollments')->where([
  ['cpm','=',Auth::user()->cmp],
  ['theme_category','=',$id],
])->first()==null)
  @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Enroll') }}</div>
                    <div class="card-body">
                      <form method="post" action="{{ route('enrollment.store') }}">
                        @csrf
                        <label class="col-md-5" for="cpmid">CPM-ID:</label>
                        <input class="col-md-5" style="border:red;" name="cpm" value="{{Auth::user()->cmp}}" readonly>

                        <label class="col-md-5" for="cpmid">Name:</label>
                        <input class="col-md-5" style="border:red;" name="user_name" value="{{Auth::user()->name}}" readonly>

                        <label class="col-md-5" for="cpmid">Theme Category:</label>
                        <input class="col-md-5" style="border:red;" name="theme_category" value="{{$id}}" readonly>

                        <label class="col-md-5" for="cbrand">Camera Brand</label>                        
                        <select class="col-md-5" name="camera" id="camera">
                          <option value="Canon">Canon</option>
                          <option value="Fuji">Fuji</option>
                          <option value="Sony">Sony</option>
                          <option value="Nikon">Nikon</option>
                          <option value="Other">Other</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success enrollbtn">Enroll</button>
                      </br></br>
                      </form>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
  @endsection
@else 
<script>alert('You already enrolled This Category')</script>
<script>window.location = "/dashboard";</script>
@endif



