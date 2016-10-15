@extends('frontend.layouts.layout')
@section('Events','menu__item--current')
@section('body')
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.html">Home</a> / <span>Events</span></h2>
		</div>
	</div>
<!-- //banner -->

<div class="gallery">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 galp">

						<h2 class="galp_h">Events <span class="galp_h_col"> Gallery</span></h2>
					</div>
	    <div class="col-md-12 col-sm-12 col-xs-12 new_img">
		<div class="services wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
      @foreach($data as $event)
      <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><a href="{{url('Gallery/'.$event->id)}}"><img class="img_s" src="{{url('images/'.$event->image)}}" alt="img"> </a></div>
        </a></div>
      </div>

	      <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right">
		<div class="eve_gal">
			<h2>{{$event->name}} </h2>
			<p>Photography </p>
		</div>
		</div>
      </div>
      @endforeach

      <!--div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><a href="single-gallery.html"><img class="img_s" src="images/circ_img2.jpg" alt="img"></div>
        </a></div>
      </div>



   <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right">
		<div class="eve_gal">
			<h2>Engagement </h2>
			<p>Photography </p>
		</div>
		</div>
      </div>


	</div>
</div>
    <div class="col-md-12 col-sm-12 col-xs-12 new_img">
		<div class="services wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">

      <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img class="img_s" src="images/circ_img3.jpg" alt="img"></div>
        </a></div>
      </div>

	      <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right">
		<div class="eve_gal">
			<h2>Wedding Anniversary </h2>
			<p>Photography </p>
		</div>
		</div>
      </div>

      <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img class="img_s" src="images/circ_img4.jpg" alt="img"></div>
        </a></div>
      </div>



   <div class="col-md-3 col-sm-6 a">
        <div class="ih-item circle effect2 left_to_right">
		<div class="eve_gal">
			<h2>Engagement </h2>
			<p>Photography </p>
		</div>
		</div>
      </div-->


	</div>
</div>


	</div>
</div>

@endsection