@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Photo Submission') }}</div>

                <div class="card-body">
                    <form class="form-horizonal" method="post" action="{{url('photosubmit',$id)}}" enctype="multipart/form-data">                        
                        @csrf
                        <label class="col-md-5" for="cpmid">CPM-ID:</label>
                        <input class="col-md-5" style="border:red;" name="cpm" value={{Auth::user()->cmp}} readonly>
                      
                        <label class="col-md-5" for="user_name">Name:</label>
                        <input class="col-md-5" style="border:red;" name="user_name" value={{Auth::user()->name}} readonly>
                      
                        <label class="col-md-5" for="theme_category">Theme Category:</label>
                        <input class="col-md-5" style="border:red;" name="theme_category" value="{{$id}}" readonly>
                        <label class="col-md-5" for="image">Attach Photo</label>
                        <input class="col-md-5" type="file" id="image" name="image" required>
                        </br></br>                        
                        <button type="submit" class="col-md-5 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection