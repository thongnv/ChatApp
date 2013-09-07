<?php
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=chat", "root", "123" );	
	} catch(Exception $e){
		die("Error: ".$e->getMessage());
	}
?>