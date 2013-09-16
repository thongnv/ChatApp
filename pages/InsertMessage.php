<?php
	session_start();

	include "classes.php";

	if(strlen(trim($_POST['ChatText'])) > 0){
		$chat = new chat();
		$chat->setChatUserId($_SESSION['UserId']);
		$chat->setChatText($_POST['ChatText']);
		$chat->InsertChatMessage();
	}
?>