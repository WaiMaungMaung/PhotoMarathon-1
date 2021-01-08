@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Photo Submission') }}</div>

                <div class="card-body">
                    <form class="form-horizonal" method="post" action="{{route('enrollment.update',$id)}}">
                        @method('PUT') 
                        @csrf
                        <label class="col-md-5" for="cpmid">CPM-ID:</label>
                        <input class="col-md-5" style="border:red;" name="cpm" value={{Auth::user()->cmp}} readonly>
                      
                        <label class="col-md-5" for="cpmid">Name:</label>
                        <input class="col-md-5" style="border:red;" name="user_name" value={{Auth::user()->name}} readonly>
                      
                        <label class="col-md-5" for="theme_category">Theme Category:</label>
                        <input class="col-md-5" style="border:red;" name="theme_category" value="Theme{{$id}}" readonly>
<label class="col-md-5" for="theme">Attach Photo</label>
        <input class="col-md-5" type="file" id="myFile" name="filename"></br></br>

<button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection