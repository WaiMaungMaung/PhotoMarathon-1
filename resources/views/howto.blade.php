@extends('layouts.app')
<style>

@media only screen and (max-width: 500px) {
  .responsive{
    width: 270px;
    height: 95px;
  }
}
</style>
@section('content')
<div class="container-fluid">
   <div class="card " style="background-color: #871c11; ">
            <div class="card-header" style="padding-bottom:0px">
        <a class="card-link text-white" style="color: #ffffff;" data-toggle="collapse" href="#collapseOne"><h4><strong>How To Register</strong> </h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapseOne">
      <div class="card card-body">
          Step - 1
          <br>
    <a href="\img\register_step1.jpg" >
      <img class="img-fluid" src="\img\register_step1.jpg" style="border: solid 2px black;">
    </a><br>
    Step - 2
    <br>
    <a href="\img\register_step2.jpg" >
      <img class="img-fluid" src="\img\register_step2.jpg" style="border: solid 2px black;" >
    </a><br>
    
    Step - 3
    <br>
    <a href="\img\register_step3.jpg" >
      <img class="img-fluid" src="\img\register_step3.jpg" style="border: solid 2px black;">
    </a><br>
    Step - 4
    <br>
    <a href="\img\register_step2.jpg" >
      <img class="img-fluid" src="\img\register_step2.jpg" style="border: solid 2px black;">
    </a>


  </div></div></div></div>
<div class="container-fluid">
   <div class="card " style=" background-color:#871c11;">
            <div class="card-header" style="padding-bottom:0px">
        <a class="card-link text-white" style="color: #ffffff;" data-toggle="collapse" href="#collapse2"><h4><strong>How To Enroll Theme</strong></h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapse2">
      <div class="card card-body">
        Step - 1
        <br>
          <a href="\img\enroll_step1.jpg" >
            <img class="img-fluid" src="\img\enroll_step1.jpg" style="border: solid 2px black;">
          </a><br>
          Step - 2
          <br>
          <a href="\img\enroll_step2.jpg" >
            <img class="img-fluid" src="\img\enroll_step2.jpg" style="border: solid 2px black;">
          </a>
          </div></div></div></div>
<div class="container-fluid">
   <div class="card " style="background-color: #871c11;">
            <div class="card-header" style="padding-bottom:0px">
        <a class="card-link text-white" style="color: #ffffff;" data-toggle="collapse" href="#collapse3"><h4><strong>How To Submit Your Photo </strong></h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapse3">
      <div class="card card-body">
             Step - 1
                <br>
          <a href="\img\submit_step1.jpg" >
            <img class="img-fluid" src="\img\submit_step1.jpg" style="border: solid 2px black;" >
          </a><br>
          Step - 2
          <br>
          <a href="\img\submit_step2.jpg" >
            <img class="img-fluid" src="\img\submit_step2.jpg" style="border: solid 2px black;">
          </a>
          </div></div></div></div>
@endsection