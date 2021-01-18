@extends('layouts.app')
<style>
  /*****************
    - Header -
*****************/

header {
	position:relative;
	left:0;
	top:0;
	width:100%;
	min-height:120px;
	padding:50px 0;
	color:#fff;
	margin-bottom:30px
}

/* Logo */
header .logo {
	clear:both;
    display:block;
	text-align:center;
    padding-bottom:10px;
}

/* Title */
header h1 {
    font-weight:300;
    font-size:24px;
    color:#eee;	
	letter-spacing:2px;
	text-align:center;
	text-transform:uppercase;
	margin:0 !important;
	padding-bottom:25px;
}
@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');
h1,
h2,
h3,
h4,
h5,
h6,
div,
input,
p,
a {
    margin: 0px;
}

a,
a:hover,
a:focus {
    color: inherit;
}



.container-fluid,
.container {
    max-width: 1200px;
}

.card-container {
    padding: 100px 0px;
    -webkit-perspective: 1000;
    perspective: 1000;
}


.profile-card-6 {
    padding-left:0px;
    max-width: 500px;
    border-radius: 5px;
    overflow: hidden;
    position: relative;
    margin: 0px auto;
    cursor: pointer;
}

.profile-card-6 img {
    transition: all 0.15s linear;
    padding-left:50px;
}

.profile-card-6 .profile-name {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 25px;
    font-weight: bold;
    color: #FFF;
    padding: 15px 20px;
    background: linear-gradient(140deg, rgba(202, 55, 55, 0.4) 50%, rgba(224, 85, 108, 0) 80%);
    transition: all 0.15s linear;
}

.profile-card-6 .profile-position {
    position: absolute;
    color: rgba(32, 5, 5, 0.993);
    left: 30px;
    top: 100px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview {
    position: absolute;
    bottom: 0px;
    left: 0px;
    right: 0px;
    color: #FFF;
    padding: 50px 0px 20px 0px;
    transition: all 0.15s linear;
}
.prize-detail{
  color: rgb(228, 18, 18);
    padding: 50px 0px 20px 0px;
    transition: all 0.15s linear;
    font-size: 17px;
    font-weight: bolder;
    text-align: center;

}

.profile-card-6 .profile-overview h3 {
    font-weight: bold;
}

.profile-card-6 .profile-overview p {
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-6:hover img {
    filter: brightness(80%);
    size:120%;
}

.profile-card-6:hover .profile-name {
    padding-left: 25px;
    padding-top: 20px;
}

.profile-card-6:hover .profile-position {
    left: 40px;
    padding-top:50px;
}

.profile-card-6:hover .profile-overview {
    padding-bottom: 25px;
}


</style>
@section('content')
<div class="container-fluid">

    
	<div class="row" style="height: 60px"  >
		
        
        <div class="col-sm-4 text-white" style="font-size:30px; background-image: linear-gradient(90deg,red,white);border:1px;border-radius:20px;" ><strong>
          <div style="margin-top: 6px">
            &nbsp GRAND PRIZE
          </div>
    </strong>
    
        </div>	
        <div class="col-sm-4"  >
        </div>
        <div class="col-sm-4" >
        </div>
        </div>	
        <div class="row offset-1"  >
		
        
            <div class="col-md-5 text-dark" style="font-size:15px;padding-top: 100px;" >
              <strong style="border:solid 3px rgb(68, 238, 105);border-radius: 5px">
                &nbsp EOS R6 RF24-105mm F/4L IS STM​ &nbsp
            </strong>
            </div>	
            <div class="col-md-7 " style="float: right"  >
                
    <a href="\img\EOS_R6.png" >
        <img class="img-fluid" src="\img\EOS_R6.png" >
      </a><br>
            </div>
            </div>	
            <br>
            
        <div style="border:solid 3px rgb(68, 238, 105);border-radius: 5px;text-align:center;height:100px;" >
          <div style="margin-top: 20px;">
            Video​ <br>

https://youtu.be/9MM8Nc8YrAA​
          </div>
        </div>
        <br>
    <br>
 
            
  
   <div class="card " style=" background: linear-gradient(to left, #33ccff 0%, #ff99cc 100%);">
            <div class="card-header">
        <a class="card-link text-dark" style="color: #ffffff;" data-toggle="collapse" href="#collapseOne"><h4><strong> Student Category </strong> </h4></a>
            </div>
        <div class="collapse multi-collapse show" id="collapseOne">
      <div class="card card-body">

        
    <div class="row">
      <div class="col-md-4 pt-2" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
        <h4 class="text-center"><strong>1st Prize</strong></h4>
        <hr>
        <strong>
        EOS 850D EF-S18-55mm​</strong>
        <div class="profile-card-6"><img src="\img\prize\EOS_850D.png" width="280px" class="img img-responsive">
        </div>
      </div>

    <div class="col-md-4 pt-2" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
      <h4 class="text-center"><strong>2nd Prize</strong></h4>
      <hr>
    <strong>EOS M200 EF-M15-45mm​</strong>
      <br>
      <br>
      <div class="profile-card-6"><img src="\img\prize\EOS_M200.png" width="280px" class="img img-responsive">
      </div>
    </div>

    <div class="col-md-4" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
      <h4 class="text-center"><strong>3rd Prize</strong></h4>
      <hr>
    <strong>EOS 1500D Kit EF S18-55​</strong>
      <div class="profile-card-6"><img src="\img\prize\EOS_1500D.png" width="280px" class="img img-responsive">
      </div>
    </div>

  </div>
          </div></div></div></div>

<div class="container-fluid">
   <div class="card " style="    background: linear-gradient(to left, #99ff99 0%, #00cc00 100%);">
            <div class="card-header">
        <a class="card-link text-dark" style="color: #ffffff;" data-toggle="collapse" href="#collapse2"><h4><strong> Open Category Theme - 1 </strong></h4></a>
            </div>
        <div class="collapse multi-collapse show" id="collapse2">
      <div class="card card-body">
        

        
        <div class="row">
          <div class="col-md-4 pt-2" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
            <h4 class="text-center"><strong>1st Prize</strong></h4>
            <hr>
          <strong>EOS RP(Body)</strong>
            <div class="profile-card-6"><img src="\img\prize\EOS_RP.png" width="280px" class="img img-responsive">
            </div>
          </div>
    
        <div class="col-md-4 pt-2" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
          <h4 class="text-center"><strong>2nd Prize</strong></h4>
          <hr>
        <strong>EOS M6 Mark II EF-M18-150mm</strong>
          <br>
          <br>
          <div class="profile-card-6"><img src="\img\prize\EOS_M6_Mark_II.png" width="280px" class="img img-responsive">
          </div>
        </div>
    
        <div class="col-md-4" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
          <h4 class="text-center"><strong>3rd Prize</strong></h4>
          <hr>
        <strong>EOS M50 Mark II EF-M15-45mm​</strong>
          <div class="profile-card-6"><img src="\img\prize\EOS_M50_Mark_II.png" width="280px" class="img img-responsive">
          </div>
        </div>
    
      </div>
    


          </div></div></div></div>

<div class="container-fluid">
   <div class="card " style="    background: linear-gradient(to left, #ffcc00 0%, #ff0066 100%);">
            <div class="card-header">
        <a class="card-link text-dark" style="color: #ffffff;" data-toggle="collapse" href="#collapse3"><h4><strong> Open Category Theme - 2 </strong></h4></a>
            </div>
        <div class="collapse multi-collapse show" id="collapse3">
      <div class="card card-body">
        

        
        <div class="row">
          <div class="col-md-4 pt-2" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
            <h4 class="text-center"><strong>1st Prize</strong></h4>
            <hr>
          <strong>EOS RP(Body)</strong>
            <div class="profile-card-6"><img src="\img\prize\EOS_RP.png" width="280px" class="img img-responsive">
            </div>
          </div>
    
        <div class="col-md-4 pt-2" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
          <h4 class="text-center"><strong>2nd Prize</strong></h4>
          <hr>
        <strong>EOS M6 Mark II EF-M18-150mm</strong>
          <br>
          <br>
          <div class="profile-card-6"><img src="\img\prize\EOS_M6_Mark_II.png" width="280px" class="img img-responsive">
          </div>
        </div>
    
        <div class="col-md-4" style="border:1px solid rgba(0, 0, 0, 0.137);border-radius:5px;">
          <h4 class="text-center"><strong>3rd Prize</strong></h4>
          <hr>
        <strong>EOS M50 Mark II EF-M15-45mm​</strong>
          <div class="profile-card-6"><img src="\img\prize\EOS_M50_Mark_II.png" width="280px" class="img img-responsive">
          </div>
        </div>
    
      </div>
    
          </div></div></div></div>
@endsection