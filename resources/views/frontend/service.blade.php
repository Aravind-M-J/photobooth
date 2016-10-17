@extends('frontend.layouts.layout')
@section('Services','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.html">Home</a> / <span>Services</span></h2>
		</div>
	</div>
<!-- //banner -->

<!-- service start -->

	<div class="mail">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 abo">
				<h2 class="mail_h">Our <span class="mail_h_col"> Services</span></h2>
			</div>
			<div class="img col-md-4" style='height:10px'>
				<br><br><br>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-md-6 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
			<center><b><h2>The Party crooks Services</h2></b></center><br>
			<p class="justify animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">The VIP Open Style Photo Booth services any event. Great entertainment and fun for all ages. Why hide the fun behind a curtain, our open photo booth shares all the fun with everyone! It captures more than just head shots and fits more people so theres more smiles!It’s all about the quality of your images and our lighting.</p><br>
			<p class="justify animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">We take pride in the quality of your photos. Rest assured that in hiring our photo booth, you’ll agree with many past clients that the quality of your photos are some of the best in the business.We will ensure our services to you and your guests are on point at your event. Our team are friendly, helpful and cheerful just like your family and friends!</p>
		</div>
		<div class="col-md-6 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
			<img class="img_s" src="images/service.jpg" alt="img" style='max-height:100%, max-width:100%;'><br>
		</div>
	</div>

	<br><br>

	<div class="gallery" id="gallery">
	<div class="container">
	    <div class="gallery-main">
			<div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
				<center><b><h2>Custom designed prints</h2></b></center><br>
			</div>
			<div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
				<p class="justify animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">Your memory, your prints. Not only do you need a great photo, but a well crafted photo design that goes with it. Our team works with you in creating your photos to have their own style to specially suite your event theme. Remember the photo designs represent your event and your personality. Please view some samples of our designs below.</p><br>
			</div>
			<div class="gallery-bott">
				<div class="col-md-4 col1 gallery-grid">
					<a href="images/b1.jpg" class="b-link-stripe b-animate-go  thickbox" rel="title">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service1.jpg" alt="">
						</figure>
					</a>
				</div>
				<div class="col-md-4 col1 gallery-grid">
					<a href="images/b2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service2.jpg" alt="">
						</figure>
					</a>
				</div>
				<div class="col-md-4 col1 gallery-grid">
					<a href="images/b3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/service3.jpg" alt="">
						</figure>
				</a>
			</div>
		</div></div></div></div>

	<br><br>

	<div class="steps_service">
		<div class="container">
			<div class="wthree_steps_grids">
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Amazing Photos</h4>
					<p>Studio quality images, flattering lighting.</p>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Beautiful designs</h4>
						<p>Studio quality images, flattering lighting.</p>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Friendly service</h4>
						<p>Studio quality images, flattering lighting.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<br><br>

	<!-- div class="container">
			<div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
				<center><b><h2>Other Services</h2></b></center><br>
			</div>
			<div class="steps_other_service">
		<div class="container">
			<div class="wthree_steps_grids">
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Photo Activation</h4>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Roaming Photography</h4>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Mobile studio</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div -->

	<div class="container">
			<div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s"><br><br><br>
				<blockquote class="testimonial_style">
						<div>
							<p class="justify_service animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">" Thank you so much for everything on the wedding day, everyone including ourselves LOVED the photo booth! The setup, photo layout, friendly service and the lighting and the quality of the photos were fantastic! I was even told that this was the best photo booth people have ever seen! Thank you so much. "</p><br>
						</div>
						<div class="w-testimonial-person">
							<img src="images/testimonial_couple.jpg" width="100px height="100px"/>  Anna & Tom
						</div>
				</blockquote><br>
			</div>
	</div>

<!-- //service -->
@endsection