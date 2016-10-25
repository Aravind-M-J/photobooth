@extends('frontend.layouts.layout')
@section('Packages','menu__item--current')
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
			<!--
        #pricing
        ========================== -->
        <section id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" >
                        <div class="pricing-table text-center">
                            <div class="price">
                                <h2>Basic package</h2>
                            </div>
                            <ul class="text-center">
                                <li>Event will be on for 2 hours</li>
							<li>Photo booth</li>
							<li>150 photo prints will be available</li>
							<li>Complimentary gift will be given to the client</li>
							<li>Props will include:<br>  Fancy hats<br>  Masks of different styles<br>  Fancy hair props<br>Dialog box<br>Fancy glasses<br>Bows
							
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <h2>Standard package</h2>
                            </div>
                            <ul class="text-center">
                                <li>Event will be on for 3 hours</li>
							<li>Custom theme Photo booth</li>
							<li>300 photo prints will be available</li>
							<li>Live games will be conducted during the event and winners will be awarded with gifts</li>
							<li>Complimentary gift will be given to the client</li>
							<li>Props will include:<br>Fancy hats<br>Masks of different styles<br>Fancy hair props<br>Dialog box<br>Fancy glasses<br>Bows
							<li>*This package will also include custom themed props</li>
								</ul>
							</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <h2>Premium package</h2>
                            </div>
                            <ul class="text-center">
                                <li>Event will be on for 5 hours</li>
							<li>Custom theme Photo booth</li>
							<li>500 photo prints will be available</li>
							<li>Live games from a variety of choices will be conducted during the event and winners will be awarded with gifts</li>
							<li>Return gifts (maximum 200 nos). Extra return gifts have to be paid further</li>
							<li>Mash-up photo booth album (20 pages – including cover)</li>
							<li>After video smash (maximum duration - 4 minutes)</li>
							<li>Custom party cake</li>
							<li>Complimentary gift will be given to the client</li>
							<li>All Props will be custom themed. It will also include:<br>Fancy hats<br>Masks of different styles<br>Fancy hair props<br>Dialog box<br>Fancy glasses<br>Bows
                            </ul>
                        </div>
                    </div>
					
					<div class="col-md-12 col-sm-6 col-xs-12 wow fadeInUp break" data-wow-delay="0.3s">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <h2>Additional Add-On Services</h2>
                            </div>
							<ul>
                	    <li>Dj night</li>
                		<li>Karaoke</li>
                		<li>Live music
                		<li>Photo prints on mugs and frame</li>
                		<li>Green screen</li>
                	</ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #pricing
        ========================== -->
		</div>
	</div>
<!-- //pricing-plans -->
@endsection