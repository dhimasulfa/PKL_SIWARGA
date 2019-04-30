
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<link rel="icon" href="<?php echo base_url().'assets/front-end/img/icon_sw.png'?>" type="image/x-icon" />
<title>SIWARGA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hexagon Sign in Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url().'assets/front-end/css/style_1.css'?>" rel='stylesheet' type='text/css' />	
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
</head>
<body>
<!--main-->
	  <div class="main">
		       <div class="login hexagon_box">
			          <h1>LOGIN</h2>
					<form action="<?php echo base_url('Login_fe/auth') ?>" method="post">
						<input type="text" class="text" value="username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
						<input type="password" class="text" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" >
                        <input type="submit" onclick="myFunction()" value="Login" >
						 <div class="new">
					<p><a href="<?php echo base_url ('Siwarga_fe')?>">Kembali</a></p>
					<div class="clear"></div>
				</div>
					</form>
					
			</div>
		</div>
</body>
</html>