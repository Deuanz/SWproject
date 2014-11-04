<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
		<?php require_once('navbar.php'); ?>
	</head>
	<body>
		<nav id="nav-top" class="shadow">
			<span style="display:inline-block; margin:5"><img src = "..\..\image\logo2-mini.png"></span>
			<?php 
				if(isset($_COOKIE['username'])){
					require_once('logedin.php');
				}
				else{
					require_once('login.php');
				}
			?>
		</nav>

		<div id="contrainer">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td valign="top">
	                	<div id="left">
							<form method="GET">
								<input name="profile" class="btn-slide-bar" type="submit" value="ระเบียนประวัติ">
								<input name="course" class="btn-slide-bar" type="submit" value="รายวิชาที่สอน">
							</form>
	                    </div>
	                    
	                </td>

	                 <td valign="top">
	                	<div id="toggleBtn"><a href="#" onclick="toggle()"><img src = "icon\menu48.png"></a></div>
	                </td>
	                <td>
	                	<div id="right">
	                    	<div id="wrap">
	                    		<div align="center" style="width:80%">
									<?php
	                    				if(isset($_GET['profile']))
	                    				{
	                    					include 'student_profile.php';
	                    				}
	                    				else if(isset($_GET['course']))
	                    				{
	                    					include 'showCourse.php';
	                    				}
	                    			?>
								</div>
	                        </div>
			            </div>
	                   
	                </td>
	            </tr>

			</table>
		</div>
	</body>
</html>