<?php
	$conn = new mysqli('localhost', 'root', '', 'csrapp');
	
	if(!$conn){
		die("Error: Can't connect to database");
	}
?>