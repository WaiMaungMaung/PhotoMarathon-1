@extends('layouts.app')
<style>

div.b {
  line-height: 1.6;
}

#rcorners1 {
  border-radius: 10px;
  background:  rgb(3, 196, 255);
  padding: 2px; 
  width: 400px;
  border:2px solid rgb(4, 0, 255);
  height: 40px;  
  text-align:center;
  font-size:20px;
}

#rcorners2 {
  border-radius: 10px;
  background:  rgb(216, 36, 36);
  
  border:2px solid rgb(4, 0, 255);
  padding: 2px; 
  width: 400px;
  height: 40px;  
  text-align:center;
  font-size:20px;
}
</style>
@section('content')
        <p>
        <h4><strong>CANON PHOTOMARATHON​</strong></h4>
        <h5><strong>The Region’s Largest On-ground Photography Competition!</strong>​</h5>
        Singapore was the birthplace of CPM back in 2003. With overwhelming response, the competition is now 
        available in most parts of Asia, Hong Kong, Taiwan, the Philippines, Singapore, Malaysia,
         Indonesia, Vietnam, India, Brunei, Cambodia, China and Sri Lanka.​
         Join the multitude of participants who rose to the challenge of this photo competition and create
         photographic masterpieces in line with assigned themes - under time pressure.<br>
        </p>
        
        <p>
        <h4><strong>CANON PHOTOMARATHON MYANMAR​​</strong></h4>
        The first Canon PhotoMarathon Myanmar was hosted in year 2019 at Thuwunna Indoor Stadium, Yangon and a
        total of over 700 enthusiastic contestants were participating under the two unusual themes in the event. Three
        amazing prizes were awarded for each theme and one grand prize was awarded to a participant who showed
        fantastic photographic idea.​<br>
        </p>
        <div class="row" >
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners1">
            <strong> 	THEME - 1 	</strong>
          </div>
        </div>	
        <div class="row" >
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners2">
            <strong> SILHOUTTE 	</strong>
          </div>
        </div>
        <BR>
        <div class="row" >          
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners1">
            <strong> 	THEME - 2 	</strong>
          </div>
        </div>	

        <div class="row" >
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners2">
            <strong> 	COMBINATION 	</strong>
          </div>
        </div>			   
        
        <br>
        <div class="container w_slide" >
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('/img/1st.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/2nd.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/3rd.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/Grand.jpg')}}" alt="First slide">
              </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
        <br>
        <p>Even in menacing of Covid-19 outbreak in the world, the second Canon PhotoMarathon Myanmar was
        successfully hosted in year 2020 at Rose Garden Hotel, Yangon and a total of over 400 enthusiastic
        contestants were participating under the three unexpected themes in the event. In the 2nd CPM, the amateur
        category was opened for competition for young talented photographer or camera user who wants to show
        their creativity and imagination. Three amazing prizes were awarded for each theme and one grand prize 
        was awarded to a participant who showed fantastic photographic idea.​
        </p>
        
        <div class="row" >
		
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners1">
            <strong> 	AMATEUR CATEGORY 	</strong>

          </div>
        </div>	
        
         
        <div class="row" >
		
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners2">
            <strong> WORK FOR LIFE	</strong>

          </div>
        </div>	
        <br>
        <div class="row" >
		
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners1">
            <strong> 	PROFESSIONAL CATEGORY THEME - 1 	</strong>

          </div>
        </div>		
        <div class="row" >
		
          <div class="offset-md-4 offset-sm-1 text-white" id="rcorners2">
            <strong> 	DYNAMIC   	</strong>

          </div>
        </div>	   
        <br>
        <div class="container w_slide" >
          <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('/img/A_1st.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/A_2nd.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/A_3rd.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/P_1st.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/P_2nd.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/P_3rd.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/img/Grand2020.jpg')}}" alt="slide">
              </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>

@stop