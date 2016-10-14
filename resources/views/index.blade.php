<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body><br><br><br><br><br><br><br><br>
<!--<h1>Marvelous Contact Form</h1>-->
<div class="content-w3ls">
	<form action="{{ url('login')}}" method="post" class="form-agileits">
	{{ csrf_field() }}
		<div class="form-w3ls">
			<h2>LOGIN</h2><br>
			<!--<button type="submit" class="sign-in" value="Sign In"><img src="images/mail2.png" alt="w3layouts"></button>-->
			<div class="clear"></div>
		</div>
		<input type="email" name="email" value="E-mail ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail ID';}">
		<input type="password" name="pwd" placeholder="Password" ;}">
		<input type="submit" class="sign-in" value="LOGIN" name="button" ><br><br><br>
		<input type="checkbox" checked="checked" name="remember"><font color="red"><b>Remember Me</b></font>
	</form>
</div>
</body>
</html>