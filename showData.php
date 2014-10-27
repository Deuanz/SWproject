<?php
	echo '<div align="center">
		<br>
			<table width="800" border=”1″>
		<tr>
		<td align = "center"><b>รหัส</b></td>
		<td align = "center"><b>ชื่อวิชา</b></td>
		<td align = "center"><b>หน่วยกิจ</b></td>
		<td align = "center"><b>คณะ</b></td>
		<td align = "center"><b>สาขา</b></td>
		<td align = "center"><b>มหาวิทยาลัย </b></td>
		<td align = "center"><b>วิทยาเขต</b></td>
		</tr>';
	require_once('function.php');
	connectDB();
	 $result  = mysql_query("SELECT * FROM search_table_view WHERE (Name_EN LIKE '%".$_GET['data']."%') or (COID LIKE '%".$_GET['data']."%') or (Fname LIKE '%".$_GET['data']."%') or (Dname LIKE '%".$_GET['data']."%') or (Uname LIKE '%".$_GET['data']."%') or (Cname LIKE '%".$_GET['data']."%')")or die("Query error : ".mysql_error());
	
	 while($row = mysql_fetch_array($result))
	 {
		 echo '<tr>
			 <td align = "center">'.$row[0].'</td>
			<td align = "center">'.$row[1].'</td>
			<td align = "center">'.$row[2].'</td>
			<td align = "center">'.$row[3].'</td>
			<td align = "center">'.$row[4].'</td>
			<td align = "center">'.$row[5].'</td>
			<td align = "center">'.$row[6].'</td>
			</tr>';
	}
?>