    @extends('frontend.layouts.layout')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.html">Home</a> / <span>Mail Us</span></h2>
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
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address: Address Line1, Address Line2,<br>
																								Quis autem vel eum iure	<br>
																								Country - 123456
																									</li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +1234 567 893</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
						<ul class="social-nav model-8">
							<li><a href="#" class="facebook"><i></i></a></li>
							<li><a href="#" class="twitter"><i> </i></a></li>
							<li><a href="#" class="g"><i></i></a></li>
							<li><a href="#" class="p"><i></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.7638135888296!2d-77.47669308468912!3d39.04350424592369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b63eb3bc8da92b%3A0x78c8e09ab1cabc90!2sShopping+Plaza%2C+Ashburn%2C+VA+20147%2C+USA!5e0!3m2!1sen!2sin!4v1457602090579" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
<!-- //mail -->
@endsection