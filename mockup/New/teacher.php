<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
		<?php require_once('navbar.php'); ?>
	</head>
	<body>
		<?php $isLogin = false ?>
		<nav id="nav-top" class="shadow">
			<span style="display:inline-block; margin:5"><img src = "..\..\image\logo2-mini.png"></span>
			<?php 
				if($isLogin){
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
	        				<button class="btn-slide-bar" type="button">ระเบียนประวัติ</button>
                        	<button class="btn-slide-bar" type="button">รายวิชาที่สอน</button>
                        	<button class="btn-slide-bar" type="button">เพิ่มรายวิชา</button>
                        	<button class="btn-slide-bar" type="button">ออกจากระบบ</button>
	                    </div>
	                    
	                </td>

	                 <td valign="top">
	                	<div id="toggleBtn"><a href="#" onclick="toggle()"><img src = "icon\menu48.png"></a></div>
	                </td>
	                <td>
	                	<div id="right">
	                    	<div id="wrap">
	                    		<div align="center" style="width:80%">เนื้อหา</div>
	                        </div>
			            </div>
	                   
	                </td>
	            </tr>

			</table>
		</div>
	</body>
</html>