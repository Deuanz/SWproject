<meta charset='utf-8'>
<?php
		require_once('function.php');
		connectDB();
		$username = $_GET['username'];
		$password = $_GET['password'];
		//echo "SELECT * FROM user WHERE ID='".$username."' and Password='".$password."'";
		$result  = mysql_query("SELECT * FROM user WHERE ID='".$username."' and Password='".$password."'")or die("Query error : ".mysql_error());
		$row = mysql_fetch_array($result);
		if(!$row)
		{
			echo '<div style="text-align:center;"><font size="10" color="red">Username หรือ Password ผิดพลาด</font></div>';
			echo '<div style="text-align:center;">กรุณารอสักคู่ระบบกำลังเข้าสู้หน้า Login</div>';
			header( 'refresh: 7; url=index.php' );
		}
		else
		{
			setcookie("username",$row[0],time()+(365*24*60*60));
			header( "location: index.php" );
		}
?>