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
				<p class="animated wow slideInUp" data-wow-delay=".5s">Whether it's weddings, special events, or portraits... we make being photographed / video-graphed a comfortable experience so that you have images 
				to cherish for a lifetime. And while photography continues to change in its style and technology, we stay focused on what really matters... Capturing the essence of your moment and your spirit... 
				Professional Photo booth service for all party occasions!</p>
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
						<div class="panel panel-default">
							<div class="panel-heading panel-heading-sub" role="tab" id="headingTwo">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>Itaque earum rerum
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							   <div class="panel-body panel_text">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							  </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading panel-heading-sub" role="tab" id="headingThree">
							  <h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>autem accusamus terry richa
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							   <div class="panel-body panel_text">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
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
<!-- pricing-plans -->
	<div class="pricing-plans">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 abo abo1">

						<h2 class="abo_h"> Photography <span class="abo_h_col"> Price</span></h2>
					</div>
			<div class="pricing-plans-grids">
				<div class="col-md-4 pricing-plans-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="pricing-plans-grid1">
						<h4>Basic package</h4>
						<h5><sup>$</sup>54 <span>/ Month</span></h5>
						<ul>
							<li>Event will be on for 2 hours</li>
							<li>Photo booth</li>
							<li>150 photo prints will be available</li>
							<li>Complimentary gift will be given to the client</li>
							<li>Props will include:
								<ul>
									<li>Fancy hats</li>
									<li>Masks of different styles</li>
									<li>Fancy hair props</li>
									<li>Dialog box</li>
									<li>Fancy glasses</li>
									<li>Bows</li>
								</ul>
							</li>
						</ul>
						<!-- <div class="more m1">
							<a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical1">Learn More...</a>
						</div> -->
					</div>
				</div>
				<div class="col-md-4 pricing-plans-grid animated wow slideInLeft" data-wow-delay=".6s">
					<div class="pricing-plans-grid1">
						<h4>Standard package</h4>
						<h5><sup>$</sup>66 <span>/ Month</span></h5>
						<ul>
							<li>Event will be on for 3 hours</li>
							<li>Custom theme Photo booth</li>
							<li>300 photo prints will be available</li>
							<li>Live games will be conducted during the event and winners will be awarded with gifts</li>
							<li>Complimentary gift will be given to the client</li>
							<li>Props will include:
								<ul>
									<li>Fancy hats</li>
									<li>Masks of different styles</li>
									<li>Fancy hair props</li>
									<li>Dialog box</li>
									<li>Fancy glasses</li>
									<li>Bows</li>
							<br>
							<li>*This package will also include custom themed props</li>
								</ul>
							</li>
						</ul>
						<!-- <div class="more m1">
							<a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical1">Learn More...</a>
						</div> -->
					</div>
				</div>
				<div class="col-md-4 pricing-plans-grid animated wow slideInLeft" data-wow-delay=".7s">
					<div class="pricing-plans-grid1">
						<h4>Premium package</h4>
						<h5><sup>$</sup>87 <span>/ Month</span></h5>
						<ul>
							<li>Event will be on for 5 hours</li>
							<li>Custom theme Photo booth</li>
							<li>500 photo prints will be available</li>
							<li>Live games from a variety of choices will be conducted during the event and winners will be awarded with gifts</li>
							<li>Return gifts (maximum 200 nos). Extra return gifts have to be paid further</li>
							<li>Mash-up photo booth album (20 pages – including cover)</li>
							<li>After video smash (maximum duration - 4 minutes)</li>
							<li>Custom party cake</li>
							<li>Complimentary gift will be given to the client</li>
							<li>All Props will be custom themed. It will also include:
								<ul>
									<li>Fancy hats</li>
									<li>Masks of different styles</li>
									<li>Fancy hair props</li>
									<li>Dialog box</li>
									<li>Fancy glasses</li>
									<li>Bows</li>
								</ul>
							</li>
							<li>Additional Add-On Services:
								<ul>
									<li>Dj night</li>
									<li>Karaoke</li>
									<li>Live music 
									<li>Photo prints on mugs and frame</li>
									<li>Green screen</li>
								</ul>
							</li>
						</ul>
						<!-- <div class="more m1">
							<a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical1">Learn More...</a>
						</div> -->
					</div>
				</div>
				<div class="clearfix"><p class="ps">PS: Package rate valid upto 30th November 2016</p></div>
			</div>
		</div>
	</div>
<!-- //pricing-plans -->
@endsection