<meta charset='utf-8'>
<?php
		require_once('function.php');
		connectDB();
		$username = $_GET['username'];
		$password = $_GET['password'];
		$result  = mysql_query("SELECT * FROM user_view WHERE Username='".$username."' and Password='".$password."'")or die("Query error : ".mysql_error());
		$row = mysql_fetch_array($result);
		if(!$row)
		{
			echo '<div style="text-align:center;"><font size="10" color="red">Username หรือ Password ผิดพลาด</font></div>';
			echo '<div style="text-align:center;">กรุณารอสักคู่ระบบกำลังเข้าสู้หน้า Login</div>';
			header( 'refresh: 3; url=index.php' );
		}
		else
		{
			$temp = ['professor','student'];
			for($i=0;$i<count($temp);$i++)
			{
				$result1 = mysql_query("SELECT * FROM ".$temp[$i]." WHERE Username ='".$username."'")or die("Query error : ".mysql_error());
				$row1 = mysql_fetch_array($result1);
				if($row1)
				{
					if($i==0)
					{
						$role="professor";
						setcookie("role","0",time()+(365*24*60*60));
					}
					else if($i==1)
					{
						$role="student";
						setcookie("role","1",time()+(365*24*60*60));
					}
				}
			}
			setcookie("username",$row[0],time()+(365*24*60*60));
			header( "location: index.php" );
		}
?>