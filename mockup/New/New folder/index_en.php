<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
		<style type="text/css">
			a:link{
				color: #CCC;
				text-decoration:none;
			}
			a:visited{
				color: #CCC;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
		<nav id="nav-top" class="shadow">
			<?php 
				if(isset($_COOKIE['username'])){
					if($_COOKIE['role']=='0')
					{
						header( "location: teacher.php" );
					}
					else
					{
						header( "location: student.php" );
					}
				}
				else{
					require_once('login.php');
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
				<div align="center" style="color:#CCC">
					Copyright &#169 <a href="about.php"> 2&Friend</a>
				</div>
			</div>
		</div>
			<?php
			}
			?>
	</body>
</html>