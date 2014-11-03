<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	

	
	</head>
	<style>
		#sizep {
		height:300px;
		width:200px;
	}
	</style>
	<body>

				<?php
					require_once('function.php');
					connectDB();
					$result  = mysql_query("SELECT * FROM profile_view WHERE UserID='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
					$row = mysql_fetch_array($result);
					if(!$row)
					{
						echo '<div align="center"><h1>ไม่มีรายวิชา</h1></div>';
					}
					else
					{
						echo '<div id="sizep" style="float:left;"> pic </div> 
						<div style="float:left;">
						 ชื่อ :'.$row[0].'  '.$row[1].'<br>
						มหาวิทยาลัย  :'.$row[2].'<br>
						วิทยาเขต  :'.$row[3].'<br>
						คณะ  :'.$row[4].'<br>
						ภาควิชา  :'.$row[5].'<br>
						หลักสูตร  :'.$row[6].'<br>';
					}
				?>

	</body>
</html>
