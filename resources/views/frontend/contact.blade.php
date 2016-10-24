    @extends('frontend.layouts.layout')
@section('contactUs','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Contact Us</span></h2>
		</div>
	</div>
<!-- //banner -->
<!-- mail -->


</div>
	<div class="mail">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 abo">

						<h2 class="mail_h">Our <span class="mail_h_col"> Contact</span></h2>
					</div>
			<div class="mail-grids">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form action="{{url('contactUs')}}" method="post">
						{{csrf_field()}}
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" name="email" placeholder="Email" required="">
						<input type="text" name="subject" placeholder="Subject" required="">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Submit Now">
					</form>
				</div>
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="mail-grid-right1">

						<h4><span>Contact US</span></h4>
						<ul class="phone-mail">
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address: Party Crooks<br>
																								H.O – Lionmarks<br>
 																								Beach Road<br>
																								Kollam(Quilon)<br>
																								PIN - 691016
																									</li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +91 9895190809</li>
							{{--<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: info@partycrooks.com </li>--}}
						</ul>
						<ul class="social-nav model-8">
							<li><a href="https://www.facebook.com/partycrooks/" target="_blank" class="facebook"><i></i></a></li>
							{{--<li><a href="#" class="twitter"><i> </i></a></li>--}}
							{{--<li><a href="#" class="g"><i></i></a></li>--}}
							{{--<li><a href="#" class="p"><i></i></a></li>--}}
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://wego.here.com/india/thiruvananthapuram/street-square/party-crooks--loc-dmVyc2lvbj0xO3RpdGxlPVBhcnR5K0Nyb29rcztsYXQ9OC4zOTgwNztsb249NzYuOTgyMTQ7c3RyZWV0PUJlYWNoK1JvYWQ7Y2l0eT1UaGlydXZhbmFudGhhcHVyYW07cG9zdGFsQ29kZT02OTU1Mjc7Y291bnRyeT1JTkQ7ZGlzdHJpY3Q9S292YWxhbTtzdGF0ZUNvZGU9S0w7Y291bnR5PVRoaXJ1dmFuYW50aGFwdXJhbTtjYXRlZ29yeUlkPXN0cmVldC1zcXVhcmU7c291cmNlU3lzdGVtPWludGVybmFs?map=8.3972,76.98229,17,normal&fb_locale=en_US" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
<!-- //mail -->
@endsection