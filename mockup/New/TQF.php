<meta charset='utf-8'>
<?php
	require_once('function.php');
	connectDB();
	$result  = mysql_query("SELECT * FROM tqf3_view WHERE CourseID=".$_GET["CourseID"]." and Section=".$_GET["Section"]." and Curriculum='".$_GET["Curriculum"]."' and Department='".$_GET["Department"]."' and Faculty='".$_GET["Faculty"]."' and Campus='".$_GET["Campus"]."' and University='".$_GET["University"]."'")or die("Query error : ".mysql_error());
	$row = mysql_fetch_array($result);
	if($row)
	{
		// get the files details 
		$size = $row['Size'];
		$type = $row['Type'];
		$content = $row['TQF3'];

		//present file for download 
		header('Content-length: '.$size.'"'); 
		header('Content-type: '.$type.'"'); 
		header('Content-Disposition: attachment; name="'.$_GET["CourseID"].'_TQF3.pdf"'); 
		echo $content; 
		exit; 
	}
	else
	{
?>

<br><div align="center">
	<form method="post" enctype="multipart/form-data" action="addTQF.php">
		<table width="350" border="0" cellpadding="1"
		cellspacing="1" class="box">
		<tr>
		<td>กรุณาเลือกไฟล์</td></tr>
		<tr>
		<td>
		<input type="hidden" name="MAX_FILE_SIZE"
		value="16000000">
		<input name="userFile" type="file" id="userFile"> 
		</td>
		<td width="80"><input name="upload"
		type="submit" class="box" id="upload" value=" Upload "></td>
		</tr>
		</table>
	</form>
</div>
<?php
	}
?>
