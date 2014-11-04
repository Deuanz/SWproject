<?php
	if(isset($_POST['upload'])&&$_FILES['userFile']['size']>0)
	{
		$fileName = $_FILES['userFile']['name'];
		$tmpName  = $_FILES['userFile']['tmp_name'];
		$fileSize = $_FILES['userFile']['size'];
		$fileType = $_FILES['userFile']['type'];
		$fileType=(get_magic_quotes_gpc()==0 ? mysql_real_escape_string(
		$_FILES['userFile']['type']) : mysql_real_escape_string(
		stripslashes ($_FILES['userFile'])));
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
		echo "<br>File $fileName uploaded<br>";
	}
?>