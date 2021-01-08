@extends('layouts.app')
<style>
body {
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: sans-serif;
}

h1 {
  color: coral;
}

.grid-container {
  columns: 3 200px;
  column-gap: 1.5rem;
  width: 100%;
  margin: 0 auto;
}
.grid-container div {
  width: 150px;
  margin: 0 0.5rem 0.5rem 0;
  display: inline-block;
  width: 100%;
  border: solid 2px black;
  padding: 5px;
  box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  transition: all 0.25s ease-in-out;
}
.grid-container div:hover img {
  filter: grayscale(0);
}
.grid-container div:hover {
  border-color: coral;
}
.grid-container div img {
  width: 100%;
  filter: grayscale(100%);
  border-radius: 5px;
  transition: all 0.25s ease-in-out;
}
.grid-container div p {
  margin: 5px 0;
  padding: 0;
  text-align: center;
  font-style: italic;
}
</style>
@section('content')

<div class="center" style="font-size:31px;text-align:center;"><strong>

Photo Gallery</strong>
</div>
</div>
<br>
<div class="grid-container">
  <div>
    <img class='grid-item grid-item-1' src='img/mr1.jpg' alt=''>
    <p>"I'm so happy today!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-2' src='img/mr2.jpg' alt=''>
    <p>"Red and White"</p>
  </div>
  <div>
    <img class='grid-item grid-item-3' src='img/mr3.jpg' alt=''>
    <p>"The Competition is start now!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-4' src='img/mr4.jpg' alt=''>
    <p>"Waiting for Themes Announcement!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-5' src='img/mr5.jpg' alt=''>
    <p>"We are Champions!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-6' src='img/mr6.jpg' alt=''>
    <p>"C'mon friend!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-7' src='img/mr7.jpg' alt=''>
    <p>"Yes we are MGR!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-8' src='img/mr8.jpg' alt=''>
    <p>"Yes, I got it!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-9' src='img/mr9.jpg' alt=''>
    <p>"Let me have interview"</p>
  </div>
  <div>
    <img class='grid-item grid-item-10' src='img/mr10.jpg' alt=''>
    <p>"Ready!"</p>
  </div>
@endsection