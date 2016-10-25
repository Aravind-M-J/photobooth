@extends('frontend.layouts.layout')
@section('aboutUs','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>About Us</span></h2>
		</div>
	</div>
<!-- //banner -->
<!-- about -->
	<div class="about">
<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 abo">

						<h2 class="abo_h">About <span class="abo_h_col">History</span></h2>
					</div>

			<div class="team-grids">
				<div class="clearfix"> </div>
				<p class="animated wow slideInUp" data-wow-delay=".5s">
				Yes! We steal the show in a party....
                From the house of lionmarks, we bring to you a new way of celebration. If you’re ready to have a party that stands out from the same old thing that everyone else does, then impress your guests with the creativity of party crooks. Party crooks are a fun and creative way for everyone to loosen up and interact. Party crooks create an atmosphere constantly surrounded by people who are laughing and creating positive memories at your event, and of course each guest walks away with a tangible photograph in their hand. We develop a unique way to create and capture photographic memories. We aim at celebrating your moments according to your dreams.
                PARTY CROOKS a complete package of fun and entertainment.
				</p>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- team -->
	<div class="team">
	<div class="container">
			<!--div class="col-md-12 col-sm-12 col-xs-12 abo">

						<h2 class="abo_h"> About<span class="abo_h_col">Us</span></h2>
					</div-->

			<div class="about-grids">
				<div class="col-md-6 about-grids-left">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading panel-heading-sub" role="tab" id="headingOne">
							  <h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>About Us
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body panel_text">
									Whether it's weddings, special events, or portraits... we make being photographed / video-graphed a comfortable experience so that you have images 
				                    to cherish for a lifetime. And while photography continues to change in its style and technology, we stay focused on what really matters... Capturing the essence of your moment and your spirit... 
									Professional Photo booth service for all party occasions!
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 about-grids-right animated wow slideInRight" data-wow-delay=".5s">
					<img src="images/3.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
<!-- //team -->
@endsection