@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="card " style="background-color:#1099e9">
            <div class="card-header">
        <a class="card-link" style="color: #ffffff;" data-toggle="collapse" href="#collapseOne"><h4> Theme - 1 </h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapseOne">
      <div class="card card-body">
          blah blah blah
          </div></div></div></div>
<div class="container-fluid">
   <div class="card " style="background-color:#09b355;">
            <div class="card-header">
        <a class="card-link" style="color: #ffffff;" data-toggle="collapse" href="#collapse2"><h4> Theme - 2 </h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapse2">
      <div class="card card-body">
          blah blah blah
          </div></div></div></div>
<div class="container-fluid">
   <div class="card " style="background-color:orange;">
            <div class="card-header">
        <a class="card-link" style="color: #ffffff;" data-toggle="collapse" href="#collapse3"><h4> Theme - 3 </h4></a>
            </div>
        <div class="collapse multi-collapse" id="collapse3">
      <div class="card card-body">
          blah blah blah
          </div></div></div></div>
@endsection