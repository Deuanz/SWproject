<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/styleSheet.css">
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
		<?php $isLogin = true ?>
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



	</body>
</html>