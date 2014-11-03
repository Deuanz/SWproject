<html>
<head>
	<link rel="stylesheet" href="css/indexStyles.css">
	<meta charset='utf-8'>
</head>
<body>
	<div id="login">
		<?php 
			include 'login.php';
		?>
	</div>
	<?php
		if(!isset($_COOKIE['username'])){
			include 'index-guest.php';
		}
		else
		{
			include 'index-user.php';
		}
	?>
</body>
</html>