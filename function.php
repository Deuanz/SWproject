<?php 
		function connectDB()
		{
			mysql_connect("localhost","root","")or die("Connect error : ".mysql_error());
			mysql_select_db("swproject")or die("Database error : ".mysql_error());
		}
	?>