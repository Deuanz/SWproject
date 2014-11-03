<?php
	$result  = mysql_query("SELECT * FROM tqf3")or die("Query error : ".mysql_error());
	$row = mysql_fetch_array($result);
	if($row)
	{
		// get the files details 
		$size = $row['size'];
		$type = $row['type'];
		$name = $row['name'];
		$content = $row['Pdf'];

		//present file for download 
		header('Content-length: '.$size.'"'); 
		header('Content-type: '.$type.'"'); 
		header('Content-Disposition: attachment; name="abc.pdf"'); 
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
