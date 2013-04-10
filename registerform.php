<?php
    session_start();
	require_once('credentials.php');		//in this file you will connect to the desired database
 
	$email = $_POST['email'];
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	 

	$checker = mysql_query("SELECT * FROM users WHERE username='$uname'");
	$logincheck = mysql_num_rows($checker);
 
 	if ($logincheck > 0) {
 		header("Location: registerWrong.php");
 	}
    else {
	
	header("Location: newUser.php");
	}

?>