<html>
<head></head>
<body>
<?php
		mysql_connect("192.168.95.52","fuck","123456789")or die("Connect error : ".mysql_error());
		mysql_select_db("swproject")or die("Database error : ".mysql_error());
		$result  = mysql_query("SELECT * FROM user")or die("Query error : ".mysql_error());
		while($row =mysql_fetch_array($result))
		{
			setcookie("username",$row[0],time()+(365*24*60*60));
		}
?>
</body>
</html>