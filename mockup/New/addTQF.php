<?php
	if($_FILES['upload']['size']>0)
	{
		$fileName = $_FILES['upload']['name'];
		$tmpName  = $_FILES['upload']['tmp_name'];
		$fileSize = $_FILES['upload']['size'];
		$fileType = $_FILES['upload']['type'];
		$fileType=(get_magic_quotes_gpc()==0 ? mysql_real_escape_string(
		$_FILES['upload']['type']) : mysql_real_escape_string(
		stripslashes ($_FILES['upload'])));
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		if(!get_magic_quotes_gpc())
		{
			$fileName = addslashes($fileName);
		}
		require_once('function.php');
		connectDB();
		$query = "UPDATE tqf3 SET Pdf='".$content."', size='".$fileSize."', type='".$fileType."', name='".$fileName."' WHERE ID='".$_GET['SID']."'";
		//echo $query;
		echo '<br>';
		mysql_query($query) or die('Error, query failed'); 
		mysql_close();
		header( "location: teacher.php?course=รายวิชาที่สอน" );
		exit(0);
	}
	else
	
	{
		echo $_FILES['upload']['size'];
	}
?>