<?php
	session_start();
	include "classes.php";

	if(isset($_POST['UserMailLogin']) && isset($_POST['UserPasswordLogin'])){
		$user = new user();
		$user->setUserMail($_POST['UserMailLogin']);
		$user->setUserPassword(sha1($_POST['UserPasswordLogin']));
		$user->UserLogin();

		if($user->UserLogin()){
			$userid = $_SESSION['UserId'] = $user->getUserId();
			$_SESSION['UserName'] = $user->getUserName();
			$_SESSION['UserMail'] = $user->getUserMail();
			header("Location: home.php?userid=$userid");
		}
	}

?>