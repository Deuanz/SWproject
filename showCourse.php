<?php
	require_once('function.php');
	connectDB();
	$result  = mysql_query("SELECT * FROM course_view WHERE UserID='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
	$row = mysql_fetch_array($result);
	if(!$row)
	{
		echo '<div align="center"><h1>ไม่มีรายวิชา</h1></div>';
	}
	else
	{
		echo '<div align="center">
			<br>
				<table width="800" border=”1″>
			<tr>
			<td align = "center"><b>รหัสวิชา</b></td>
			<td align = "center"><b>ชื่อวิชา</b></td>
			<td align = "center"><b>หน่วยกิจ</b></td>
			<td align = "center"><b>กลุ่มเรียน</b></td>
			</tr>
			
			<tr>
			<td align = "center">'.$row['ID'].'</b></td>
			<td align = "center">'.$row['Name'].'</td>
			<td align = "center">'.$row['Credit'].'</td>
			<td align = "center">'.$row['Section'].'</td>
			</tr>';
			
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>
					<td align = "center">'.$row['ID'].'</b></td>
					<td align = "center">'.$row['Name'].'</td>
					<td align = "center">'.$row['Credit'].'</td>
					<td align = "center">'.$row['Section'].'</td>
					</tr>';
			}
		echo'</div>';
	}
?>
		
	