<?php
	echo '<div id="left">
				<form method="GET" action="index.php">';
					require_once("menu.php");				
	echo '		</form>
		</div>';
	echo '
	<div id="center">';
		if(!isset($_GET['menu']))
		{
			echo '<h1> ยินดีต้อนรับเข้าสู่ระบบ <br> Welcome to system</h1>';
		}
		else
		{
				if($_GET['menu']=="ดูโปรไฟล์")
				{
					include 'profile_student.php';
				}
		}
	echo '</div>';
?>