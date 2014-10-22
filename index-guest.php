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
	
	.central{
		position:absolute;
		left:50%;
		top:50%;
		margin-left: -200px;
	}

	</style>
	<body>
		<div id="center" style="width:100%; left:0px;">
			<div class="central">
				<form action="index.php" method="GET">
					<input id="search" type="text" name="data" value="">
					<input id="ssearch" type="submit" name="submit_search" value="ค้นหา">
				</form>
			</div>
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
