<meta charset='utf-8'>
<script type="text/javascript" src="css/sortable.js"></script>
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
		?>
		<div align="center">
			<br>
			<table class="sortable" id="anyid" style="border-collapse: collapse" width="800" border=”1″>
			<tr style="background:#999999; border:1px solid #000000;">
			<td align = "center"><b>รหัสวิชา</b></td>
			<td align = "center"><b>ชื่อวิชา</b></td>
			<td align = "center"><b>กลุ่มที่</b></td>
			<td align = "center" class="unsortable"><b>มคอ.</b></td>
			</tr>
			
			<tr>
			<td align = "center"><?php echo $row['CourseID']; ?></a></td>
			<td align = "center"><?php echo $row['CourseName']; ?></a></td>
			<td align = "center"><?php echo $row['Section']; ?></td>
			<td align = "center">
		<?php
				if($row['TQF3']!="")
				{
					echo '<a href="TQF.php?SID='.$row["SID"].'"><img src="img/view_icon.png"></a>';
				}
				else
				{
				?>
					<img src="img/no_tqf3_icon.png">
				<?php } ?>
			</td>
			</tr>
			<?php
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>
					<td align = "center">'.$row['CourseID'].'</a></td>
					<td align = "center">'.$row['CourseName'].'</a></td>
					<td align = "center">'.$row['Section'].'</td>
					<td align = "center">';
						if($row['TQF3']!="")
						{
							echo '<a href="TQF.php?SID='.$row["SID"].'"><img src="img/view_icon.png"></a>';
						}
						else
						{
						?>
							<img src="img/no_tqf3_icon.png">
						<?php } 
					echo '</td>
					</tr>';
			}
		echo'</div>';
	}
?>
		
	