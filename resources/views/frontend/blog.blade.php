@extends('frontend.layouts.layout')
@section('Blogs','menu__item--current')
@section('body')
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Gallery</span></h2>
		</div>
	</div>
<!-- //banner -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-grids">
				<div class="col-md-12 single-grid-left">
					<div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
										<div class="single-grid-left-grid">
											<img src="{{url('images/'.$blog->blog_img)}}" class="img-responsive" style="margin: auto; padding: 10px;"/>					<div class="single-grid-left-grid1">
												<div class="single-grid-left-grid1-left">
													<h3>{{$day}} <span>{{$month}}</span></h3>
												</div>
												<div class="single-grid-left-grid1-right blog_heading">
													<h4>{{$blog->blog_title}}</h4>
													
												</div>
												<div class="clearfix"> </div>
												<p class="fugiat">{{$blog->blog_cont}}</p>
												<!--<ul>
													<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Jan Mark</a></li>
													<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 20</a></li>
													<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 5</a></li>
													<li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Voluptatibus</li>
												</ul>-->
											</div>
										</div>
							<!--FlexSlider-->
									<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
									<script defer src="js/jquery.flexslider.js"></script>
									<script type="text/javascript">
									$(window).load(function(){
									  $('.flexslider').flexslider({
										animation: "slide",
										start: function(slider){
										  $('body').removeClass('loading');
										}
									  });
									});
								  </script>
							<!--End-slider-script-->
					</div>
					{{--<div class="popular-posts">--}}
						{{--<h3 class="animated wow zoomIn" data-wow-delay=".5s">Popular Posts</h3>--}}
						{{--<div class="popular-posts-grids">--}}
							{{--<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".5s">--}}
								{{--<div class="popular-posts-grid1">--}}
									{{--<a href="single.html"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>--}}
									{{--<h4><a href="single.html">doloribus asperiores</a></h4>--}}
									{{--<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".6s">--}}
								{{--<div class="popular-posts-grid1">--}}
									{{--<a href="single.html"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>--}}
									{{--<h4><a href="single.html">rerum hic tenetur</a></h4>--}}
									{{--<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-4 popular-posts-grid animated wow slideInLeft" data-wow-delay=".7s">--}}
								{{--<div class="popular-posts-grid1">--}}
									{{--<a href="single.html"><img src="images/12.jpg" alt=" " class="img-responsive" /></a>--}}
									{{--<h4><a href="single.html">saepe eveniet ut et</a></h4>--}}
									{{--<p>Itaque earum rerum hic tenetur a sapiente delectus.</p>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="clearfix"> </div>--}}
						{{--</div>--}}
					{{--</div>--}}


				</div>
				{{--<div class="col-md-4 single-grid-right">--}}
					{{--<div class="blog-right1">--}}
						{{--<div class="search1 animated wow slideInUp" data-wow-delay=".5s">--}}
							{{--<h3>Search</h3>--}}
							{{--<form action="#" method="post">--}}
								{{--<input type="text" name="Email" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" required="">--}}
								{{--<input type="submit" value="Send">--}}
							{{--</form>--}}
						{{--</div>--}}
						{{--<div class="categories animated wow slideInUp" data-wow-delay=".5s">--}}
							{{--<h3>Categories</h3>--}}
							{{--<ul>--}}
								{{--<li><a href="#">Aliquam dapibus tincidunt</a></li>--}}
								{{--<li><a href="#">Donec sollicitudin molestie</a></li>--}}
								{{--<li><a href="#">Fusce feugiat malesuada odio</a></li>--}}
								{{--<li><a href="#">Cum sociis natoque penatibus</a></li>--}}
								{{--<li><a href="#">Magnis dis parturient montes</a></li>--}}
								{{--<li><a href="#">Donec sollicitudin molestie</a></li>--}}
							{{--</ul>--}}
						{{--</div>--}}
						{{--<div class="categories categories-mid animated wow slideInUp" data-wow-delay=".5s">--}}
							{{--<h3>Archives</h3>--}}
							{{--<ul>--}}
								{{--<li><a href="#">May 20,2011</a></li>--}}
								{{--<li><a href="#">July 31,2012</a></li>--}}
								{{--<li><a href="#">January 20,2013</a></li>--}}
								{{--<li><a href="#">November 2,2014</a></li>--}}
								{{--<li><a href="#">April 25,2015</a></li>--}}
								{{--<li><a href="#">May 14,2016</a></li>--}}
							{{--</ul>--}}
						{{--</div>--}}
						{{--<div class="related-posts">--}}
							{{--<h3>Blog Posts</h3>--}}
							{{--<div class="related-post animated wow slideInUp" data-wow-delay=".5s">--}}
								{{--<div class="related-post-left">--}}
									{{--<a href="single.html"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>--}}
								{{--</div>--}}
								{{--<div class="related-post-right">--}}
									{{--<h4><a href="single.html">Donec sollicitudin</a></h4>--}}
									{{--<p>Aliquam dapibus tincidunt metus.--}}
										{{--<span>Praesent justo dolor, lobortis.</span>--}}
									{{--</p>--}}
									{{--<ul>--}}
										{{--<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 10:00 AM</li>--}}
										{{--<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 5 May 2016</li>--}}
									{{--</ul>--}}
								{{--</div>--}}
								{{--<div class="clearfix"> </div>--}}
							{{--</div>--}}
							{{--<div class="related-post animated wow slideInUp" data-wow-delay=".5s">--}}
								{{--<div class="related-post-left">--}}
									{{--<a href="single.html"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>--}}
								{{--</div>--}}
								{{--<div class="related-post-right">--}}
									{{--<h4><a href="single.html">tincidunt metus</a></h4>--}}
									{{--<p>Aliquam dapibus tincidunt metus.--}}
										{{--<span>Praesent justo dolor, lobortis.</span>--}}
									{{--</p>--}}
									{{--<ul>--}}
										{{--<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11:30 AM</li>--}}
										{{--<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 9 May 2016</li>--}}
									{{--</ul>--}}
								{{--</div>--}}
								{{--<div class="clearfix"> </div>--}}
							{{--</div>--}}
							{{--<div class="related-post animated wow slideInUp" data-wow-delay=".5s">--}}
								{{--<div class="related-post-left">--}}
									{{--<a href="single.html"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>--}}
								{{--</div>--}}
								{{--<div class="related-post-right">--}}
									{{--<h4><a href="single.html">earum rerum hic</a></h4>--}}
									{{--<p>Aliquam dapibus tincidunt metus.--}}
										{{--<span>Praesent justo dolor, lobortis.</span>--}}
									{{--</p>--}}
									{{--<ul>--}}
										{{--<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 12:30 PM</li>--}}
										{{--<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 17 May 2016</li>--}}
									{{--</ul>--}}
								{{--</div>--}}
								{{--<div class="clearfix"> </div>--}}
							{{--</div>--}}
							{{--<div class="related-post animated wow slideInUp" data-wow-delay=".5s">--}}
								{{--<div class="related-post-left">--}}
									{{--<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>--}}
								{{--</div>--}}
								{{--<div class="related-post-right">--}}
									{{--<h4><a href="single.html">saepe eveniet ptates</a></h4>--}}
									{{--<p>Aliquam dapibus tincidunt metus.--}}
										{{--<span>Praesent justo dolor, lobortis.</span>--}}
									{{--</p>--}}
									{{--<ul>--}}
										{{--<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 2:00 PM</li>--}}
										{{--<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 23 May 2016</li>--}}
									{{--</ul>--}}
								{{--</div>--}}
								{{--<div class="clearfix"> </div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->

@endsection