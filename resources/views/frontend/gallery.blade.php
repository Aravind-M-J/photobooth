@extends('frontend.layouts.layout')
@section('Events','menu__item--current')
@section('body')
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Gallery</span></h2>
        </div>
	</div>
<br><br>

		<script src="{{url('frontend/js/jquery.chocolat.js')}}"> </script>
		<link rel="stylesheet" href="{{url('frontend/css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>
		<div class="col-md-12 col-sm-12 col-xs-12 galp">
        	<h2 class="galp_h">{{$event->name}}</h2>
		</div>
		<p class="text-center container">{{$event->description}}</p>

<div class="gallery" id="gallery">
	<div class="container">
	  <div class="gallery-main">
		<div class="gallery-bott">
		@foreach($data as $col)
			<div class="col-md-4 col1 gallery-grid">
				    <a href="{{url('images/'.$col->name)}}" class="b-link-stripe b-animate-go  thickbox" rel="title">
						<figure class="effect-bubba">
							<img class="img-responsive" src="{{url('images/'.$col->name)}}" alt="">
							@if($col->caption!=null)
							<figcaption>
								<h4 class="gal">{{$col->caption}}</h4>
								<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p-->
							</figcaption>
							@endif
						</figure>
					</a>
					</div>
					@endforeach
					<!--<div class="col-md-4 col1 gallery-grid">
						<a href="images/b2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b2.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
									<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/b3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b3.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>
			     <div class="col-md-4 col1 gallery-grid">
				  <a href="images/b4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b4.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
					</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/b5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b5.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
									<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/b6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b6.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
									<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/b7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b7.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
									<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/b8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b8.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
								<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/b7.jpg"  rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/b7.jpg" alt="">
							<figcaption>
								<h4 class="gal">Nemo voluptatem</h4>
									<!--p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>
							</figcaption>
						</figure>
						</a>
					</div>-->
			     <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

@endsection