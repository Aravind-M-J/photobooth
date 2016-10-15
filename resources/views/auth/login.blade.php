
@extends('admin.layouts.layout')
@section('title','Login')
@section('small_title','')
@section('body')
<div class="box box-success">
	<div class="box-body">
		<form role="form" action="" method="post">
        {{ csrf_field() }}
			<div class="form-group">
				<label for="title" class="control-label">E-mail ID</label>
				<input class="form-control" type="email" name="email" placeholder="Enter E-mail ID">
			</div>
			<div class="form-group">
				<label for="cont" class="control-label">Password</label>
				<input class="form-control" type="Password" name="pwd" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<input type="submit" value="LOGIN" class="btn btn-primary" name="button"></button>
            </div>
            <div class="form-group">
    			<input type="checkbox" checked="checked" name="remember"> Remember Me				
			</div>
		</form>
	</div>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Login Form :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marvelous Contact Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<!-- Bootstrap 3.3.6 -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
@include('flash');
<br><br><br><br><br><br><br><br>
<!--<h1>Marvelous Contact Form</h1>-->
<div class="content-w3ls">
	<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
    			<div class="form-group">
    				<input type="email" name="email" placeholder="Enter E-mail ID">
    			</div>
    			<div class="form-group">
    				<input type="Password" name="password" placeholder="Enter Password">
    			</div>
    			<div class="form-group">
    				<input type="submit" class="sign-in" value="LOGIN"></button>
                </div>
                <div class="form-group">
        			<input type="checkbox" checked="checked"> Remember Me
    			</div>
    		</form>
</div>
</body>
</html>