@extends('frontend.layouts.layout')
@section('Services','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Services</span></h2>
		</div>
	</div>
<!-- //banner -->

<!-- service start -->

	<div class="mail1">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 abo">
				<h2 class="mail_h">Our <span class="mail_h_col"> Services</span></h2>
			
			</div>
			
			</div>
		
	</div>



	<div class="gallery" id="gallery">
	<div class="container">
	    <div class="gallery-main">
			<div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
			<p class="animated wow slideInUp" data-wow-delay=".5s">Party crooks add colour to any event. It provides a great entertainment and fun for all ages. We take pride in the printing quality of our photos. We provide custom designed products. We create a theme according to your dreams.</p>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<p class=" ser1_text animated wow slideInUp" data-wow-delay=".5s">
						•	Personalised printed design <br>
						•	Custom photo booth <br>
						•	Custom theme setting <br>
						•	Extensive prop box <br>
						•	Customised album setting <br>
						•	Customised return gifts <br>
					</p>
				</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
					<p class="ser1_text animated wow slideInUp" data-wow-delay=".5s">
						•	Custom party cakes <br>
						•	Fun and entertainment for guests <br>
						•	Friendly and experienced booth butl<br>
						•	High quality photos and prints <br>
						•	A professional service from start to finish <br>
						•	Customised invitation <br>
	

					</p>
				</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
					<p class="ser1_text animated wow slideInUp" data-wow-delay=".5s">
						•	Green screen <br>
						•	Event logo <br>
						•	Dj music <br>
						•	Karaoke  <br>
						•	Live music  <br>

					</p>
				</div>
			</div>
			</div>
			<div class="col-md-12 ser_border blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
				<h2> Themes
			</div>
			<div class="gallery-bott">
				<div class="col-md-3 col1 gallery-grid">
					<a href="images/b1.jpg" class="b-link-stripe b-animate-go  thickbox" rel="title">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service1.jpg" height="200px" alt="">
						</figure>
						<center> Birthday parties </center>
					</a>
				</div>
				<div class="col-md-3 col1 gallery-grid">
					<a href="images/b2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service2.jpg" height="200px" alt="">
						</figure>
						<center> Get together </center>
					</a>
				</div>
				<div class="col-md-3 col1 gallery-grid">
					<a href="images/b3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service3.jpg" height="200px" alt="">
						</figure>
					</a>
				</div>
				<div class="col-md-3 col1 gallery-grid">
					<a href="images/b3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service3.jpg" height="200px" alt="">
						</figure>
					</a>
				</div>
			</div>
		</div>
	</div></div>






<!-- //service -->
@endsection