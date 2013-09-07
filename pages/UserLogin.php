<?php
	session_start();
	include "classes.php";

	if(isset($_POST['UserMailLogin']) && isset($_POST['UserPasswordLogin'])){
		$user = new user();
		$user->setUserMail($_POST['UserMailLogin']);
		$user->setUserPassword(sha1($_POST['UserPasswordLogin']));
		$user->UserLogin();

		if($user->UserLogin()){
			$_SESSION['UserId'] = $user->getUserId();
			$_SESSION['UserName'] = $user->getUserName();
			$_SESSION['UserMail'] = $user->getUserMail();
		}
	}

?>