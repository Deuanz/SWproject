<meta charset='utf-8'>
<script>
	function GotPDF(data)
	{
		// Here, data contains "%PDF-1.4 ..." etc.
		var datauri = 'data:application/pdf;base64,' + Base64.encode(data);
		var win = window.open("", "Your PDF", "width=1024,height=768,resizable=yes,scrollbars=yes,toolbar=no,location=no,directories=no,status=no,menubar=no,copyhistory=no");
		win.document.location.href = datauri;
	}

</script>
<?php
	require_once('function.php');
	connectDB();
	if($_COOKIE['role']=="0")
	{
		$result  = mysql_query("SELECT * FROM tqf3_view WHERE Username='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
	}
	else if($_COOKIE['role']=="1")
	{
		$result  = mysql_query("SELECT * FROM register_view WHERE Username='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
	}
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
			<td align = "center"><b>กลุ่มที่</b></td>
			<td align = "center"><b>มคอ.</b></td>
			</tr>
			
			<tr>
			<td align = "center">'.$row['CourseID'].'</a></td>
			<td align = "center">'.$row['CourseName'].'</a></td>
			<td align = "center">'.$row['Section'].'</td>
			<td align = "center">';
				if($row['TQF3']!="")
				{
					echo '<button name="view" value="btn_view" onClick="GotPDF('.$row['TQF3'].')"></button>';
				}
				else
				{
					echo 'ไม่มี มคอ.';
				}
			echo '</td>
			</tr>';
			
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>
					<td align = "center">'.$row['CourseID'].'</a></td>
					<td align = "center">'.$row['CourseName'].'</a></td>
					<td align = "center">'.$row['Section'].'</td>
					<td align = "center">';
						if($row['TQF3']!="")
						{
							echo '<button name="view" value="btn_view" onClick="GotPDF('.$row['TQF3'].')"></button>';
						}
						else
						{
							echo '<a href="TQF.php?SID='.$row["SID"].'">เพิ่ม มคอ.</a>';
						}
					echo '</td>
					</tr>';
			}
		echo'</div>';
	}
?>
		
	
		
	