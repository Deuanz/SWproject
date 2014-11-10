<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
	</head>
	<body>
		<nav id="nav-top" class="shadow">
			<span style="display:inline-block; margin:5"><a href="about.php"><img src = "..\..\image\logo2-mini.png"></a></span>
			<?php 
				if(isset($_COOKIE['username'])){
					require_once('logedin.php');
				}
				else{
					require_once('login.php');
				}
			?>
		</nav>


		<div align="center" style="margin-top:95px">
			<?php require_once('search.php'); ?>
			<div align="center">
				<?php require_once('show_search.php'); ?>
			</div>
		</div>

	</body>
</html>