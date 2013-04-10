<?php
    session_start(); 
    if($_SESSION['name']!='') header("Location: welcome.php");			//send user to opening screen if they are already logged in
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title> Login </title>
		<link href="common.css" rel="stylesheet" type="text/css"/>
		<link href="LogReg.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="title">
			<!-- http://www.onlinelogomaker.com/ -->
			<img src="family.jpg" alt="Logo" width="200px" height="150px"/>
		</div>
		<div id="mainbox">
			<form action = "loginform.php" method = "post">
				<div id="login"> 
					<strong>Enter Your Login Information</strong>
					<br/><br/>
						<label> Username </label>
						<input class="formfield" type="text" id = "username" name = "username" size="50" />
						<label> Password </label>
						<input class="formfield" type="password" id = "password" name = "password" size="50" />
					<br/>
					<br/>
					<br/>
					<br/>
					<input id="submit" type="submit" value="Submit" style="clear: both" />
				</div>
			</form>
		</div>				
		<div style="margin-right: auto; text-align: center;  margin-left: auto;">Not A Registered User? <a href="register.php">Request an Account</a></div><br/>
	</body>
</html>