<?php
	$server='127.0.0.1';
	$username='root';
	$password='password';
	$database='techblog';
	$db = mysqli_connect($server,$username,$password,$database);
	// Check connection
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// else{
	// 	echo 'connected';
	// }

?>