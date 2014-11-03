<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
		<style>
			#contrainer{ width:100%; background-color:#FFFFFF; margin: 80px auto; position: fixed;}
			#area{ width:800px;}
			#left{ background-color:#CCC; float:left; height:100%; width:250px; overflow:hidden; border-radius:10 0 10 10;}
			#toggleBtn{ background-color:#CCC; width:auto; height:auto float:right; padding: 5px; border-radius:0 10 10 0;}
			#toggleBtn a{ color:#FFFFFF;}
			#right{  background-color:#FFFFFF; float:left; height:800px; width:100%; clear:right;}
			.clear{ clear:both;}
			#wrap{ margin:0 20%}

			.btn-slide-bar{
				width:100%;
				height:35px;
				background-color:#CCC;
				border:1px solid #CCC;
				display:inline-block;
				cursor:pointer;
				color:#556270;
				font-family:arial;
				font-size:17px;
				text-decoration:none;
				border-bottom: 1px solid;
			}

			.btn-slide-bar:hover {
				background-color:#BBB;
				border:1px solid #BBB;
				border-bottom: 1px solid;
			}
			.btn-slide-bar:active {
				position:relative;
				top:1px;
			}

		</style>
		<script>
			var interval,interval2;
			var togID = 1;
			function toggle(){
				if(togID == 1){
					interval = setInterval("slideHide()",4);		
				}else{
					interval2 = setInterval("slideShow()",4);		
				}
			}
			function hide(){
				interval = setInterval("slideHide()",4);		
			}
			function slideHide(){
				var left=document.getElementById("left");
				var toggleBtn2=document.getElementById("toggleBtn2");
				var desX;
				//desX = left.offsetWidth-10;	
				/*if(desX <=0){
					clearInterval(interval);
					left.style.width=0+"px";		
				}else{
					left.style.width=desX+"px";		
				}*/
				//easing 
				desX = left.offsetWidth+(0-left.offsetWidth)/10;
				left.style.width=desX+"px";		
				if (Math.abs(left.offsetWidth-0)<=7 ) {
					clearInterval(interval);
					left.style.width=0+"px";		
					togID=0;
					toggleBtn2.innerHTML =">";
				}
				
			}
			function show(){
				interval2 = setInterval("slideShow()",4);		
			}
			function slideShow(){
				var left=document.getElementById("left");
				var desX;
				var toggleBtn2=document.getElementById("toggleBtn2");
				/* desX = left.offsetWidth+10;	
				if(desX >=250){
					clearInterval(interval2);
					left.style.width=250+"px";		
				}else{
					left.style.width=desX+"px";		
				}*/
				
				desX = left.offsetWidth+(250-left.offsetWidth)/10;
				left.style.width=desX+"px";		
				//left.innerHTML = Math.abs(left.offsetWidth-250);
				if (Math.abs(left.offsetWidth-250)<=9 ) {
					clearInterval(interval2);
					left.style.width=250+"px";	
					togID=1;	
					toggleBtn2.innerHTML ="<";
				}
				
			}
		</script>
	</head>
	<body>
		<!--
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

	-->
	<!--
		<div id="contrainer">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td valign="top">
	                	<div id="left">
     
                        	<button class="btn-slide-bar" type="button">Nav1</button>
                        	<button class="btn-slide-bar" type="button">Nav2</button>
                        	<button class="btn-slide-bar" type="button">Nav3</button>
                        	<button class="btn-slide-bar" type="button">Nav4</button>
                        	<button class="btn-slide-bar" type="button">Nav1</button>
                        	<button class="btn-slide-bar" type="button">Nav2</button>
                        	<button class="btn-slide-bar" type="button">Nav3</button>
                        	<button class="btn-slide-bar" type="button">Nav4</button>

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
	-->
	



	</body>
</html>