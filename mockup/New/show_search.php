<html>
	<head>
		<meta charset='utf-8'>
		<style>
			table, td, th {
	    		border: 1px solid black;
	    		padding: 10px;
			}
		</style>
	</head>

	<body>
	<?php
		require_once('function.php');
		connectDB();
		$result  = mysql_query("SELECT * FROM tqf3_view WHERE (CourseID LIKE '%".$_GET['data']."%') or (CourseName LIKE '%".$_GET['data']."%') or (Section LIKE '%".$_GET['data']."%') or (Semester LIKE '%".$_GET['data']."%') or (Curriculum LIKE '%".$_GET['data']."%') or (Department LIKE '%".$_GET['data']."%') or (Faculty LIKE '%".$_GET['data']."%') or (Campus LIKE '%".$_GET['data']."%') or (University LIKE '%".$_GET['data']."%') ORDER BY Semester,CourseID ASC;")or die("Query error : ".mysql_error());
		$row = mysql_fetch_array($result);
		if(!$row)
		{
			echo '<h1>ไม่มีข้อมูลที่ท่านต้องการ</h1>';
		}
		else
		{
	?>
		<table style="border-collapse: collapse">
			<tr style="background:#999999; border:1px solid #000000;">
				<td align = "center"><b>รหัสวิชา</b></td>
				<td align = "center"><b>ชื่อวิชา</b></td>
				<td align = "center"><b>กลุ่มเรียน</b></td>
				<td align = "center"><b>ภาคการศึกษา</b></td>
				<td align = "center"><b>หลักสูตร</b></td>
				<td align = "center"><b>ภาควิชา</b></td>
				<td align = "center"><b>คณะ</b></td>
				<td align = "center"><b>มหาวิทยาลัย</b></td>
				<td align = "center"><b>Download มคอ.</b></td>
			</tr>
			<tr>
				<td><?php echo $row['CourseID']; ?> </td>
				<td> <?php echo $row['CourseName']; ?>  </td>
				<td align = "right"> <?php echo $row['Section']; ?> </td>
				<td align = "right"> <?php echo $row['Semester']; ?> </td>
				<td> <?php echo $row['Curriculum']; ?> </td>
				<td> <?php echo $row['Department']; ?> </td>
				<td> <?php echo $row['Faculty']; ?> </td>
				<td> <?php echo $row['University']; ?> (<?php echo $row['Campus']; ?>) </td>
				<td> <?php
				if($row['TQF3']!="")
				{
					echo '<a href="TQF.php?CourseID='.$row["CourseID"].'&Section='.$row["Section"].'&Semester='.$row["Semester"].'&Curriculum='.$row["Curriculum"].'&Department='.$row["Department"].'&Faculty='.$row["Faculty"].'&Campus='.$row["Campus"].'&University='.$row["University"].'">Download</a>';
				}
				else
				{
					echo 'aaa';
				}
				?>
				</td>
			</tr>
		<?php
		while($row = mysql_fetch_array($result))
		{
		?>
			<tr>
				<td><?php echo $row['CourseID']; ?> </td>
				<td> <?php echo $row['CourseName']; ?>  </td>
				<td align = "right"> <?php echo $row['Section']; ?> </td>
				<td align = "right"> <?php echo $row['Semester']; ?> </td>
				<td> <?php echo $row['Curriculum']; ?> </td>
				<td> <?php echo $row['Department']; ?> </td>
				<td> <?php echo $row['Faculty']; ?> </td>
				<td> <?php echo $row['University']; ?> (<?php echo $row['Campus']; ?>) </td>
				<td> <?php
					if($row['TQF3']!="")
					{
						echo '<a href="TQF.php?CourseID='.$row["CourseID"].'&Section='.$row["Section"].'&Semester='.$row["Semester"].'&Curriculum='.$row["Curriculum"].'&Department='.$row["Department"].'&Faculty='.$row["Faculty"].'&Campus='.$row["Campus"].'&University='.$row["University"].'">Download</a>';
					}
					else
					{
						echo 'ไม่มี';
					}
					?>
				</td>
			</tr>
		<?php } ?>
		</table>
		<?php } ?>
	</body>
</html>