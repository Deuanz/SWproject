<html>
<head>
	<link rel="stylesheet" href="css/indexStyles.css">
	<meta charset='utf-8'>
</head>
<body>
	<div id="login">
		<?php 
			require_once('login.php');
		?>
	</div>
	<?php
		if(!isset($_COOKIE['username'])){
			require_once('index-guest.php');
		}
		else
		{
			require_once('index-user.php');
		}
	?>
</body>
</html>