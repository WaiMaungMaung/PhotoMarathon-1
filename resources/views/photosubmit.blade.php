@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Photo Submission') }}</div>

                <div class="card-body">
                    <form class="form-horizonal">
  <label class="col-md-5" for="cpmid">CPM-ID</label>
  <label class="col-md-5" style="border:red;" for="cpmid">AUTO-FILL</label></br>

  <label class="col-md-5" for="name">Name</label>
  <label class="col-md-5" for="name">AUTO-FILL</label></br>

  <label class="col-md-5" for="theme">Theme Name</label>
  <label class="col-md-5" for="theme">AUTO-FILL</label></br>
<label class="col-md-5" for="theme">Attach Photo</label>
        <input class="col-md-5" type="file" id="myFile" name="filename"></br></br>
<input type="submit" class="btn btn-danger enrollbtn"></input></br></br>


</form>
@endsection