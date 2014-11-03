<html>
	<style>
	#search {
		width: 350px;
		height: 30px;
		display: inline;
		margin-bottom: 15px;
	}
	
	#ssearch {
		width: 50px;
		height: 30px;
		display: inline;
		margin-bottom: 15px;
	}

	</style>
	<body>

		<div id="center" style="width:100%; left:0px;">
			<?php
			if(!isset($_GET['submit_search']))
			{
			?>
				<div style="margin:120 auto;">
					<div align="center">
						<img src = "image\logo2.png"> 
					</div>

					<div  align="center">
						<form action="index.php" method="GET">
							<input id="search" type="text" name="data" value="">
							<input id="ssearch" type="submit" name="submit_search" value="ค้นหา">
						</form>
					</div>
				</div>
			<?php
			}
			?>
			<?php
				if(isset($_GET['submit_search']))
				{
					include 'showData.php';
				}
				echo '</div>';
			?>
		</div>
	</body>
</html>
