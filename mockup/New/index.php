<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
	</head>
	<body>
		<?php $isLogin = false ?>
		<nav id="nav-top" class="shadow">
			<?php 
				if($isLogin){
					require_once('logedin.php');
				}
				else{
					require_once('login.php');
				}
			?>
		</nav>

		<div style="margin-top:70px">
			<div style="margin:200px auto">
				<div align="center">
					<img src = "..\..\image\logo2.png"> 
				</div>

				<div  align="center">
					<?php require_once('search.php'); ?>
				</div>
			</div>
		</div>
	</body>
</html>