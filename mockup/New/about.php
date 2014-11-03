<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<link rel="stylesheet" href="css/styleSheet.css">
	<style type="text/css">
		.kob {border-style: ridge;
				height: 100%;
				border-width:5px}

		.kobnay {border-style: ridge;
				height: 500px;
				border-width:5px;
				display: inline;}


		.yona {text-indent:80px;}
		.space {word-spacing: 10px}

	</style>
</head>
<body>
	
		<?php $isLogin = true ?>
		<nav id="nav-top" class="shadow">
			<span style="display:inline-block; margin:5"><img src = "..\..\image\logo2-mini.png"></span>
			<?php 
				if($isLogin){
					require_once('logedin.php');
				}
				else{
					require_once('login.php');
				}
			?>
		</nav>

		<div><div style="margin:100 auto"></div> </div>
		<div class="kob"><br><br>
			<div>
  				<div class="yona"><img src = "icon/1.jpg" width="100"></div>
  				<span class="kobnay"> abcdef </span>
  			</div>

		</div>






</body>
</html>