@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="card " style=" background: linear-gradient(to left, #33ccff 0%, #ff99cc 100%);">
            <div class="card-header">
        <a class="card-link text-dark" style="color: #ffffff;" data-toggle="collapse" href="#collapseOne"><h4><strong> Theme - 1</strong> </h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapseOne">
      <div class="card card-body">
          blah blah blah
          </div></div></div></div>
<div class="container-fluid">
   <div class="card " style="    background: linear-gradient(to left, #99ff99 0%, #00cc00 100%);">
            <div class="card-header">
        <a class="card-link text-dark" style="color: #ffffff;" data-toggle="collapse" href="#collapse2"><h4><strong> Theme - 2 </strong></h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapse2">
      <div class="card card-body">
          blah blah blah
          </div></div></div></div>
<div class="container-fluid">
   <div class="card " style="    background: linear-gradient(to left, #ffcc00 0%, #ff0066 100%);">
            <div class="card-header">
        <a class="card-link text-dark" style="color: #ffffff;" data-toggle="collapse" href="#collapse3"><h4><strong> Theme - 3 </strong></h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapse3">
      <div class="card card-body">
          blah blah blah
          </div></div></div></div>
@endsection