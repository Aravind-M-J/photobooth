
<!-- //footer Start -->
<div class="steps1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">		
					<div class="col-md-2 col-sm-6 about_cont">
					<h3>ABOUT US </h3>
					<p>
					<a href="{{ url('/') }}"><i class="fa icon1 fa-caret-right"></i>Home</a> <br>
					<a href="{{ url('/aboutUs') }}"><i class="fa icon1 fa-caret-right"></i>About Us </a><br>
					<a href="{{ url('/Events') }}"><i class="fa icon1 fa-caret-right"></i>Events Gallery </a><br>
					<a href="{{ url('/Blogs') }}"><i class="fa icon1 fa-caret-right"></i>Blogs </a><br>
					<a href="{{ url('/contactUs') }}"><i class="fa icon1 fa-caret-right"></i>Contact Us </a> <br>
					<a href="{{ url('/Services') }}"><i class="fa icon1 fa-caret-right"></i>Services </a> <br>
					</p>
					</div>
					<div class="col-md-5 col-sm-6 con_cont foo-right">
					<h3>CONTACT US</h3>
				<form action="{{url('contactUs')}}" method="post">
				{{csrf_field()}}
					<input type="text" name="name" placeholder="Name" required="">
					<input type="text" name="email" placeholder="E-mail" required="">

					<input type="text" name="phone" placeholder="Phone" required="">

					<input type="text" name="message" placeholder="Message" required="">
					<input type="submit" value="Submit">
				</form>
					</div>
					<div class="col-md-3 col-sm-6 add_cont">
					<h3>HAVE QUESTIONS?</h3>
					<p>Phone: +91 9895190809<br>
					Email: info@partycrooks.com<br>
					Address: H.O – Lionmarks<br>
 					Beach Road<br>
					Kollam(Quilon)<br>
					PIN - 691016
					</div>
					<div class="col-md-2 col-sm-6 fol_cont">
					<h3>FOLLOW US</h3>
					<div class="social">
						<ul class="social-nav model-8">
							<li><a href="https://www.facebook.com/partycrooks/" target="_blank" class="facebook"><i></i></a></li>
							<li><a href="#" class="twitter"><i> </i></a></li>
							<li><a href="#" class="g"><i></i></a></li>
							<li><a href="#" class="p"><i></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>

		</div>
</div>
<!-- //footer End -->
<!-- //footer-bootom Start -->

<div class="steps2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">	
				<p>&copy; 2016 Party Crooks. All Rights Reserved </p>
					</div>
				</div>
			</div>

		</div>
				
				

<!-- //footer-bootom End -->






<!-- for bootstrap working -->
	<script src="{{url('frontend/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	@yield('pagescript')
<!-- //here ends scrolling icon -->
</body>
</html>