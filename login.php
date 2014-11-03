<?php
	if(isset($_GET['submit_search']))
	{
		echo '<div style="position:absolute;top:15px;left:20px;"><form action="index.php" method="GET">
						<input id="search" type="text" name="data" value="">
						<input id="ssearch" type="submit" name="submit_search" value="ค้นหา">
					</form></div>';
	}
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
			$result  = mysql_query("SELECT * FROM user_view WHERE Username='".$username."'")or die("Query error : ".mysql_error());
			$row = mysql_fetch_array($result);
			
		
			echo '<form action="logout.php" method="GET">';
			echo $row[2].'  '.$row[3].' as '.$_COOKIE['role'];
			echo '  <input type="submit" name="logout" value="Logout">
				</form>';
		}
	echo '</div>';
?>