@extends('frontend.layouts.layout')
@section('aboutUs','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Packages</span></h2>
		</div>
	</div>
<!-- //banner --><br>
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
						</ul>
						<!-- <div class="more m1">
							<a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical1">Learn More...</a>
						</div> -->
					</div>
				</div>
				<div class="container">
				<div class="pricing-plans-grid1 animated wow slideInLeft" data-wow-delay=".6s"
				style="float: left; margin-top: 10px; width: 97%; height: 240px; padding: 10px;">
				Additional Add-On Services:
                    <ul>
                	    <li>Dj night</li>
                		<li>Karaoke</li>
                		<li>Live music
                		<li>Photo prints on mugs and frame</li>
                		<li>Green screen</li>
                	</ul>
				</div>
				</div>
				<div class="clearfix"><p class="ps">PS: Package rate valid upto 30th November 2016</p></div>
			</div>
		</div>
	</div>
<!-- //pricing-plans -->
@endsection