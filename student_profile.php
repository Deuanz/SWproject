<html>
	<head>
		<meta charset='utf-8'>
		<style>

			
			
		</style>
		</head>
<body>

	<table style="border-collapse: collapse">
			<tr style="background:#ECAB53; border:2px">
				<td WIDTH=512; align = "center"><b>ข้อมูลส่วนตัว</b></td>
			</tr>
			
	</table>
	<?php
					require_once('function.php');
					connectDB();
					if($_COOKIE['role']=="0")
					{
						$result  = mysql_query("SELECT * FROM professor_profile_view WHERE Username='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
					}
					else if($_COOKIE['role']=="1")
					{
						$result  = mysql_query("SELECT * FROM student_profile_view WHERE Username='".$_COOKIE['username']."'")or die("Query error : ".mysql_error());
					}
					$row = mysql_fetch_array($result);
					if(!$row)
					{
						echo '<div align="center"><h1>ไม่มีข้อมูล</h1></div>';
					}
					else
					{
	?>
	<table style="border-collapse: collapse; height:200px;">
			<tr>
			<td WIDTH=700; align = ""><b>รหัสประจำตัว  :</b> </td> 
			<td WIDTH=; align = ""><?php echo $row['Username']; ?> </td> 
			</tr>
			<tr>
			<td WIDTH=150; align = ""><b>ชื่อ  :</b> </td> 
			<td WIDTH=350; align = ""><?php echo $row['Fname'].'  '.$row['Lname']; ?>  </td> 
			</tr>
			<?php if($_COOKIE['role']=="1")
			{
			?>
				<tr>
				<td WIDTH=150; align = ""><b>สาขา  :</b> </td> 
				<td WIDTH=350; align = ""><?php echo $row['Major']; ?> </td> 
				</tr>
			<?php
			}
			?>
			<tr>
			<td WIDTH=150; align = ""><b>ภาควิชา  :</b> </td> 
			<td WIDTH=350; align = ""><?php echo $row['Department']; ?> </td> 
			</tr>
			<tr>
			<td WIDTH=150; align = ""><b>คณะ  :</b> </td> 
			<td WIDTH=350; align = ""><?php echo $row['Faculty']; ?> </td> 
			</tr>
			<tr>
			<td WIDTH=150; align = ""><b>วิทยาเขต  :</b> </td> 
			<td WIDTH=350; align = ""><?php echo $row['Campus']; ?> </td> 
			</tr>
			<tr>
			<td WIDTH=150; align = ""><b>มหาวิทยาลัย  :</b> </td> 
			<td WIDTH=350; align = ""><?php echo $row['University']; ?> </td> 
			</tr>
	</table>
	<?php
	}
	?>
			
				
	
	
</body>
</html>