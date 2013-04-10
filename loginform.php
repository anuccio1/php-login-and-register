<?php
    session_start();
    require_once('credentials.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    $login = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' ") or die(mysql_error());
    $logincheck = mysql_num_rows($login);
    $row = mysql_fetch_array($login);
    
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $row[1];


    if($logincheck < 1) {
        header("Location: loginWrong.php");
    }

    else  if ($row[3] != 1) { 
        header("Location: loginnotapproved.php"); 
    
    }

    else {header("Location: welcome.php"); }
?>
