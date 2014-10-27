<?php
	echo '<div id="left">
				<form method="GET" action="index.php">';
					require_once("menu.php");				
	echo '		</form>
		</div>';
	echo '
	<div id="center">';
		if($_GET['menu']=="ดูโปรไฟล์")
				{
					include 'profile_student.php';
				}
				else
				{
					echo '<h1> ยินดีต้อนรับเข้าสู่บริการฝากหมายเลขโทรกลับ <br> Welcome to call back services </h1>';
				}
	echo '</div>';
?>