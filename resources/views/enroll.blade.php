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
                    <form class="form-horizonal">
  <label class="col-md-5" for="cpmid">CPM-ID</label>
  <label class="col-md-5" style="border:red;" for="cpmid">AUTO-FILL</label></br>

  <label class="col-md-5" for="name">Name</label>
  <label class="col-md-5" for="name">AUTO-FILL</label></br>

  <label class="col-md-5" for="theme">Theme Name</label>
  <label class="col-md-5" for="theme">AUTO-FILL</label></br>

  <label class="col-md-5" for="cbrand">Camera Brand</label>
  <input class="col-md-5" list="cbrand" name="cameras">
  <datalist class="col-md-5" id="cbrand">
    <option value="Cannon">
    <option value="Fugi">
    <option value="Sony">
    <option value="Nikon">
    <option value="Other">
  </datalist><br>
  
  <label class="col-md-5" for="tshirt">T-shirt Size</label>
  <input class="col-md-5" list="tlist" name="tshirts">
  <datalist class="col-md-5" id="tlist" value="Click To Choose">
    <option value="Small">
    <option value="Medium">
    <option value="Large">
    <option value="XL">
  </datalist><br>

<label class="col-md-5" for="pmethod">Payment Method</label>


<button  type="button" class="btn btn-danger kbz">KBZ</button>
<button  type="button" class="btn btn-primary one">Onepay</button>
<button  type="button" class="btn btn-warning wave">Wave</button></br></br>
<p  id="kbzpay" Type="hidden">
<label class="col-md-5" for="cpmid">kbz</label>
  <label class="col-md-5" style="border:red;" for="cpmid">AUTO-FILL</label></br>

  <label class="col-md-5" for="name">kbz</label>
  <label class="col-md-5" for="name">AUTO-FILL</label></br>

  <label class="col-md-5" for="theme">kbz</label>
  <label class="col-md-5" for="theme">AUTO-FILL</label></br>
</p>
<p id="onepay" type="hidden">
  <label class="col-md-5" for="cpmid">One</label>
  <label class="col-md-5" style="border:red;" for="cpmid">AUTO-FILL</label></br>

  <label class="col-md-5" for="name">one</label>
  <label class="col-md-5" for="name">AUTO-FILL</label></br>

  <label class="col-md-5" for="theme">one</label>
  <label class="col-md-5" for="theme">AUTO-FILL</label></br></p>
  <p  id="wavepay">
<label class="col-md-5" for="cpmid">wave</label>
  <label class="col-md-5" style="border:red;" for="cpmid">AUTO-FILL</label></br>

  <label class="col-md-5" for="name">wave</label>
  <label class="col-md-5" for="name">AUTO-FILL</label></br>

  <label class="col-md-5" for="theme">wave</label>
  <label class="col-md-5" for="theme">AUTO-FILL</label></br>
</p>

<button type="button" class="btn btn-success enrollbtn">Enroll</button></br></br>


</form>
                                </div> </div>
                                </div> </div>
                                </div> </div>
                                </div> 

                            
@endsection