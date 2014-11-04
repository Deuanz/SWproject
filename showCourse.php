<meta charset='utf-8'>
<?php
	require_once('function.php');
	connectDB();
	if($_COOKIE['role']=="0")
	{
		$result  = mysql_query("SELECT * FROM teach_view WHERE Username='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
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
			</tr>
			
			<tr>
			<td align = "center"><a href="index.php?menu='.$_GET['menu'].'&clickData='.$row['ID'].'&sec='.$row['section'].'">'.$row['ID'].'</a></td>
			<td align = "center"><a href="index.php?clickMenu=1">'.$row['Course'].'</a></td>
			<td align = "center">'.$row['section'].'</td>
			</tr>';
			
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>
					<td align = "center"><a href="index.php?clickMenu=1">'.$row['ID'].'</a></td>
					<td align = "center"><a href="index.php?clickMenu=1">'.$row['Course'].'</a></td>
					<td align = "center">'.$row['section'].'</td>
					</tr>';
			}
		echo'</div>';
	}
?>
		
	