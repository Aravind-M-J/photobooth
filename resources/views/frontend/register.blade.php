@extends('frontend.layouts.layout')
@section('Register','menu__item--current')
@section('body')

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="{{url('/')}}">Home</a> / <span>Register</span></h2>
		</div>
	</div>
<!-- banner end -->

<!-- order form start -->

	<div class="mail1">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 abo"><br>
				<h2 class="mail_h">Party Crooks <span class="mail_h_col"> Order Form</span></h2>
			
			</div>
			
			</div>
		
	</div>

<!-- order form end -->

<!-- form starts  -->

<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery-main">
			<form action="{{url('Register')}}" method="post">
                                        {{csrf_field()}}
                <div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Client Name</span>
                    	<input type="text" name="client_name" placeholder="Client Name" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Contact number</span>
                    	<input type="text" name="contact_number" placeholder="Contact Number" required="">
					</div>

					<div class="col-md-6 reg_form">
				    	<span class="reg_form">Address</span>
						<textarea name="address" placeholder="Address" required=""></textarea>
					</div>

					<div class="col-md-6 reg_form reg_form">
                    	<span class="reg_form">Email</span>
                    	<input type="email" name="email" placeholder="Email" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Date</span>
                    	<input type="date" name="date" placeholder="Date" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Event Date</span>
                    	<input type="date" name="event_date" placeholder="Event Date" required="">
					</div>

					<div class="col-md-6">
                    	<span class="reg_form">Event Venue</span>
                    	<input type="text" name="event_venue" placeholder="Event Venue" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Event Type</span>
                    	<input type="text" name="event_type" placeholder="Event Type" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Package Selected</span><br>
                    	<input type="radio" name="package_selected" value="basic" required="" checked> Basic &nbsp;&nbsp;&nbsp;
                    	<input type="radio" name="package_selected" value="standard" required=""> Standard &nbsp;&nbsp;&nbsp;
                    	<input type="radio" name="package_selected" value="premium" required=""> Premium &nbsp;&nbsp;&nbsp;
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Number of Guests</span>
                    	<input type="text" name="number_of_guests" placeholder="Number of Guests" required="">
					</div>

					<div class="col-md-6">
                    	<span class="reg_form">Suggestions</span>
						<textarea name="suggestions" placeholder="Suggestions"></textarea>
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Mode of Payment</span>
                    	<input type="text" name="mode_payement" placeholder="Mode of Payment" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Advance Amount</span>
                    	<input type="text" name="advance" placeholder="Advance Amount" required="">
					</div>

					<div class="col-md-6 reg_form">
                    	<span class="reg_form">Balance Amount</span>
                    	<input type="text" name="balance" placeholder="Balance Amount" required="">
					</div>
				</div>
					<div class="col-md-6 blog-grid-left animated wow slideInLeft backgroundDiv " data-wow-delay=".5s">
                    	<input style="margin-left: 12px;" type="submit" value="Submit Now">
                	</div>
			</form>
		</div>
	</div>
</div>

<!-- form end -->

@endsection