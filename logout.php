<?php 
	setcookie("username", '', time() - 3600);
	setcookie("role", '', time() - 3600);
	header( "location: index.php" );
	exit(0);
?>