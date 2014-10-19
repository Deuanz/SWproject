<?php 
	setcookie("username", '', time() - 3600);
	header( "location: index.php" );
	exit(0);
?>