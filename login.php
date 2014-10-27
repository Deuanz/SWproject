<?php
	echo '<div style="position:absolute;top:15px;right:20px;">';
		if(!isset($_COOKIE['username'])){
			echo '<form action="checkLogin.php" method="GET">
			Username : <input type="text" name="username" value="">
			Password : <input type="password" name="password" value="">
			<input type="submit" name="submit" value="OK">
			</form>';
		}
		else
		{
			$username = $_COOKIE['username'];
			require_once('function.php');
			connectDB();
			$result  = mysql_query("SELECT * FROM user WHERE ID='".$username."'")or die("Query error : ".mysql_error());
			$row = mysql_fetch_array($result);
			if($row[4]==0)
				$role = "Admin";
			else if($row[4]==1)
				$role = "Teacher";
			else 
				$role = "Student";
			echo '<form action="logout.php" method="GET">';
			echo $row[2].'  '.$row[3].' เป็น '.$role;
			echo '  <input type="submit" name="logout" value="Logout">
				</form>';
		}
	echo '</div>';
?>