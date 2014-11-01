<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/ui.css">
	</head>

	<body>
		<nav id="nav-top">
			<?php require_once('login.php'); ?>
			<span style="display:inline-block; margin:5"><img src = "..\image\logo2-mini.png"></span>
		</nav>
		<div align="center" style="margin-top:95px">
			<?php require_once('search.php'); ?>
			<div align="center">
				<?php require_once('show_search.php'); ?>
			</div>
		</div>
	</body>
</html>