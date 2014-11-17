<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
		<?php require_once('navbar.php'); ?>
	</head>
	<body>
		<?php $isLogin = true ?>
		<nav id="nav-top" class="shadow">
			<span style="display:inline-block; margin:5"><a href="about.php"><img src = "image\logo2-mini.png"></a></span>
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
	        				<button class="btn-slide-bar" type="button">จัดการมหาวิทยาลัย</button>
                        	<button class="btn-slide-bar" type="button">จัดการวิทยาเขต</button>
                        	<button class="btn-slide-bar" type="button">จัดการคณะ</button>
                        	<button class="btn-slide-bar" type="button">จัดการภาควิชา</button>
                        	<button class="btn-slide-bar" type="button">จัดการสาขา</button>
                        	<button class="btn-slide-bar" type="button">จัดการหลักสูตร</button>
                        	<button class="btn-slide-bar" type="button">จัดการรายวิชา</button>
                        	<button class="btn-slide-bar" type="button">จัดการกลุ่มเรียน</button>
                        	<button class="btn-slide-bar" type="button">จัดการอาจารย์</button>
                        	<button class="btn-slide-bar" type="button">จัดการนักเรียน</button>
                        	<button class="btn-slide-bar" type="button">ออกจากระบบ</button>
	                    </div>
	                    
	                </td>

	                 <td valign="top">
	                	<div id="toggleBtn"><a href="#" onclick="toggle()"><img src = "icon\menu48.png"></a></div>
	                </td>
	                <td>
	                	<div id="right">
	                    	<div id="wrap">
	                    		<div align="center" style="width:650px">
	                    			<?php
	                    				include "comingsoon.php";
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