<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="{{url('/')}}"><img class="img_logo1" src="{{url('images/Partycrooks-logo.png')}}"></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--francisco">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item @yield('root')"><a href="{{url('/')}}" class="menu__link"><span class="menu__helper">Home</span></a></li>
							<li class="menu__item @yield('aboutUs')"><a href="{{url('aboutUs')}}" class="menu__link"><span class="menu__helper">About Us</span></a></li>
							<li class="menu__item @yield('Events')"><a href="{{url('Events')}}" class="menu__link"><span class="menu__helper">Events Gallery</span></a></li>
							<li class="menu__item @yield('Blogs')"><a href="{{url('Blogs')}}" class="menu__link"><span class="menu__helper">Blogs</span></a></li>
							<li class="menu__item @yield('contactUs')"><a href="{{url('contactUs')}}" class="menu__link"><span class="menu__helper">Mail Us</span></a></li>
							<li class="menu__item @yield('Services')"><a href="{{url('Services')}}" class="menu__link"><span class="menu__helper">Services</span></a></li>
						</ul>
					</nav>

					<div class="phone">
						<p class="phone_right">Call Us &nbsp; &nbsp;:&nbsp; <span class="phone_bold"> +0123 456 789</span> <br>
							Email Us : &nbsp;<span class="phone_bold">  info@companyname.com </span>
						</p>
					</div>
					{{--<div class="phone">--}}
						{{--<p><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>Call- to -us <span>098951 90809</span></p>--}}
					{{--</div>--}}
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header -->