<?php 
	//echo "Hello world";
	setcookie("username", '', time() - 100000);
	setcookie("role", '', time() - 10000);
	header( "location: index.php" );
	exit(0);
?>