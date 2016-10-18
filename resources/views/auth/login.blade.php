<!doctype html>
<html>
<head>
<title>Login</title>
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
@include('flash')
<br><br><br>
<!--<h1>Marvelous Contact Form</h1>-->
<div class="content-w3ls">
    <h2>LOGIN</h2>
    <div class="line"></div><br>
	<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
    			<div class="form-group">
    				<input type="email" name="email" placeholder="E-mail ID">
    			</div>
    			<div class="form-group">
    				<input type="Password" name="password" placeholder="Password">
    			</div>
    			<div class="form-group  inner-addon left-addon">
    				<input type="submit" class="sign-in" value="LOGIN"></button>
                </div>
                <div class="form-group">
        			<input type="checkbox" checked="checked"> Remember Me
    			</div>
    		</form>
</div>
</body>
</html>