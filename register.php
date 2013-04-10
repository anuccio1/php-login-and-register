<?php session_start();
 if($_SESSION['name']!='') session_destroy();	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title> Register An Account </title>
		<link href="common.css" rel="stylesheet" type="text/css"/>
		<link href="LogReg.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="scripts.js"></script>
	</head>
	<body onload="javascript:document.getElementById('username').focus();"> 
		<div id="title">
			<!-- http://www.onlinelogomaker.com/ -->

			<img src="family.jpg" alt="Logo" width="200px" height="150px"/>
		</div>
		<a href="home.php">Home</a>
		<div id="mainbox">
			<form action = "registerform.php" onsubmit="return validateForm();" method = "post">
				<div id="register"> 
					<strong> Register </strong><br/><br/>
					<label class="regfield"> Username </label>
					<input class="formfield" type="text" id="username" name="username" size="45" />
					<label class="regfield"> Password </label>
					<input class="formfield" type="password" id="password" name="password" size="45" />
					<label class="regfield"> Confirm Password </label>
					<input class="formfield" type="password" id="pwconfirm" name="pwconfirm" size="45" />
					<label class="regfield"> Email </label>
					<input class="formfield" type="text" id="email" name="email" size="45" />
					
					<input type="submit" value="Register" id="submit"/>
					
				</div>
			</form>		
		</div>
	</body>
</html>