@extends('layouts.app')
@section('content')
</script>
<script>
$(document).ready(function()

{
    $("#kbzpay").hide();
    $("#onepay").hide();
    $("#wavepay").hide();
  $(".kbz").click(function()
  {
    $("#kbzpay").show();
    $("#onepay").hide();
    $("#wavepay").hide();
    
  });
  $(".one").click(function()
  {
    $("#kbzpay").hide();
    $("#onepay").show();
    $("#wavepay").hide();
    
  });
  $(".wave").click(function()
  {
    $("#kbzpay").hide();
    $("#onepay").hide();
    $("#wavepay").show();
    
  });
});
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Enroll') }}</div>

                <div class="card-body">
                  <form method="post" action="{{ route('enrollment.store') }}">
                    @csrf

  <label class="col-md-5" for="cpmid">CPM-ID:</label>
  <input class="col-md-5" style="border:red;" name="cpm" value={{Auth::user()->cmp}} readonly>

  <label class="col-md-5" for="cpmid">Name:</label>
  <input class="col-md-5" style="border:red;" name="user_name" value={{Auth::user()->name}} readonly>

  <label class="col-md-5" for="cpmid">Theme Category:</label>
  <input class="col-md-5" style="border:red;" name="theme_category" value="Theme{{$id}}" readonly>
  
  

  

  <label class="col-md-5" for="cbrand">Camera Brand</label>
  <input class="col-md-5" list="cbrand" name="camera">
  <datalist class="col-md-5" id="cbrand">
    <option value="Cannon">
    <option value="Fugi">
    <option value="Sony">
    <option value="Nikon">
    <option value="Other">
  </datalist><br>
  
  



<button type="submit" class="btn btn-success enrollbtn">Enroll</button></br></br>


</form>
                                </div> </div>
                                </div> </div>
                                </div> </div>
                                </div> 

                            
@endsection