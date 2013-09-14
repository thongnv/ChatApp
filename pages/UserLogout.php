<?php
	session_start();
	$_SESSION = array(); 
	session_unset();
	session_destroy();
	//echo "Logged Out !";
	// Note: Putting echo "Logged Out !" before sending the header could result in a "Headers already sent" warning and won't redirect your page to the login page - pointed out by @Treur - I didn't spot that one.. Thanks...
	header("Location:../index.php");
	exit(); # NOTE THE EXIT
?>