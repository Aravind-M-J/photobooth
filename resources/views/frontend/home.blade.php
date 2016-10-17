@extends('frontend.layouts.layout')
@section('root','menu__item--current')
@section('body')

<!-- banner -->
	<div class="example-animation">
		<div data-lazy-background="images/banner.jpg" class="banner">
			<div class="container">
				<div class="banner-info">
					<h1 class="ban_heading">WE ARE PROFESSIONAL IN <br>
						PHOTOGRAPHY</h1>

				</div>
			</div>
		</div>
		<div data-lazy-background="images/banner1.jpg" class="banner">
			<div class="container">
				<div class="banner-info">
					<h1 class="ban_heading">WE ARE PROFESSIONAL IN <br>
						PHOTOGRAPHY</h1>
				</div>
			</div>
		</div>

	</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.example-animation').DrSlider(); //Yes! that's it!
				});
			</script>
<!-- //banner -->
<!-- //welcome-->
<div class="welcome-section ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wel">

						<h2 class="wel_h"> Welcome to <span class="wel_h_col"> Party Crooks</span></h2>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="wel_text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
							esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div></br>
							<div class="more">
						<a href="single.html" class="hvr-shutter-in-vertical">Read More</a>
					</div>

					</div>



				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

<!-- //welcome end -->
<!-- //3 col service -->
<div class="steps">
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

<!-- //3 col service End -->
<!-- //Events Gallery End -->

<div class="eventsgallery-section ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 gal">

						<h2 class="gal_h">Events <span class="gal_h_col"> Gallery</span></h2>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="gal_text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
						</div>

	<div class="col-md-12 col-sm-12 col-xs-12 new_img">
	<div class="services wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	@foreach($data as $row)
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="{{url('Gallery/'.$row->id)}}">
        <div class="img"><img class="img_s" src="{{url('images/'.$row->image)}}" alt="img"></div>
        <div class="info">
          <h3>{{$row->name}}</h3>
        </div></a></div>
      </div>
	  @endforeach
	  
      <!--<div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img class="img_s" src="images/circ_img2.jpg" alt="img"></div>
        <div class="info">
          <h3>Romantic Scenes </h3>
        </div></a></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img class="img_s" src="images/circ_img3.jpg" alt="img"></div>
        <div class="info">
          <h3>Wedding Anniversary</h3>
        </div></a></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img class="img_s" src="images/circ_img4.jpg" alt="img"></div>
        <div class="info">
          <h3>Engagement (20-10-2016)</h3>
        </div></a></div>
      </div>
    </div>
  </div>



					</div-->


</div></div>
				</div>
			</div></div>
			<div class="clearfix"> </div>
		</div>



<!-- //welcome-->
<div class="welcome-section ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wel">

						<h2 class="wel_h"> Our <span class="wel_h_col"> Partners</span></h2>
					</div>

					 <div class="col-md-12 col-sm-12 col-xs-12 new_img">
	<div class="services wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img img-size"><img src="images/part_img1.jpg" width="200" height="100" alt="img"></div>
       </a></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img img-size"><img src="images/part_img2.jpg" width="200" height="100" alt="img"></div>
       </a></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img img-size"><img src="images/part_img3.jpg" width="200" height="100" alt="img"></div>
        </a></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img img-size"><img src="images/part_img4.jpg" width="200" height="100" alt="img"></div>
        </a></div>
      </div>


    </div>
  </div>


				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

<!-- //welcome end -->
@endsection