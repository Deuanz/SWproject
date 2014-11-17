<html>
	<head>
		<meta charset='utf-8'>
		<style>
			#login-rigth{
				float: right;
				margin: 15px;
			}

			#btn-login{
				background-color: #f97;
				border:1px solid #ee5555;
				cursor:pointer;
				color: #fff;
			}

		</style>
	</head>
	<body>
		<div id="login-rigth">
			<span>
				<form action="logout.php" method="GET">
				<span style="display:inline-block">
					<div>
						<?php
							$username = $_COOKIE['username'];
							require_once('function.php');
							connectDB();
							$result  = mysql_query("SELECT * FROM user_view WHERE Username='".$username."'")or die("Query error : ".mysql_error());
							$row = mysql_fetch_array($result);
						?>
						<font size=2 color="#fff">
							<?php
								if($username=="admin")
								{
									echo '<b>Admin</b>';
								}
								else
								{
									?>
									<b><?php echo $row['Username'].'   '.$row['Fname'].'  '.$row['Lname'] ?></b>
									<?php
								}
							?>
						</font>
					</div>

				</span>

				<span>
					<input id="btn-login" type="submit" name="submit" value="logout">
				</span>
				</form>
			</span>
		</div>
	</body>
</html>