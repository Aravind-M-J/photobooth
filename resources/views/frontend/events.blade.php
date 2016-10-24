@extends('frontend.layouts.layout')
@section('Events','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Events Gallery</span></h2>
		</div>
	</div>
<!-- //banner -->

<div class="gallery">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 galp"><br>
						<h2 class="galp_h">Events <span class="galp_h_col"> Gallery</span></h2>
					</div>
	   <div class="col-md-12 col-sm-12 col-xs-12 new_img">
		<div class="services wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
 @foreach($data as $event)
      <div class="col-md-4 col-sm-6 a">
           <div class="ih-item circle effect2 left_to_right">
   		  <div class="view view-eighth">
            <a href="{{url('Gallery/'.$event->id)}}">
                <img class="img-responsive img_size1" src="{{url('images/'.$event->image)}}" />
                <div class="mask"> <h2>{{$event->name}}</h2>
                </div>
            </a>
          </div>
   		</div>
       </div>
      @endforeach
	</div>
</div>


	</div>
</div>

@endsection