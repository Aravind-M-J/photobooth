
<!-- //footer Start -->
<div class="steps1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">		
					<div class="col-md-2 col-sm-6 about_cont">
					<h3>ABOUT US </h3>
					<p>
					<a href="index.html"><i class="fa icon1 fa-caret-right"></i>Home</a> <br>
					<a href="about.html"><i class="fa icon1 fa-caret-right"></i>About Us </a><br>
					<a href="gallery.html"><i class="fa icon1 fa-caret-right"></i>Events Gallery </a><br>
					<a href="blog.html"><i class="fa icon1 fa-caret-right"></i>Blogs </a><br>
					<a href="mail.html"><i class="fa icon1 fa-caret-right"></i>Contact Us </a> <br>
					</p>
					</div>
					<div class="col-md-5 col-sm-6 con_cont foo-right">
					<h3>CONTACT US</h3>
					<form action="#" method="post">
					<input type="text" name="Your email" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" name="Your email" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
					<input type="text" name="Your email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}" required="">
					<input type="text" name="Your email" value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">
					<input type="submit" value="Subscribe">
				</form>
					</div>
					<div class="col-md-3 col-sm-6 add_cont">
					<h3>HAVE QUESTIONS?</h3>
					<p>123-456-7890<br>
					Info@companyname.com <br>
					Address Line-1, Address Line-2<br>
					Lorem Ipsum is simply dummy<br>
					Country -123456 </p>
					</div>
					<div class="col-md-2 col-sm-6 fol_cont">
					<h3>FOLLOW US</h3>
					<div class="social">
						<ul class="social-nav model-8">
							<li><a href="#" class="facebook"><i></i></a></li>
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
				<p>Copy Right @ 2016 PartyCrooks. All Rights Reserved </p>
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