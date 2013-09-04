<?php
	session_start();

	include "classes.php";
	$chat = new chat();
	$chat->setChatUserId($_SESSION['UserId']);
	$chat->setChatText($_POST['ChatText']);
	$chat->InsertChatMessage();

?>