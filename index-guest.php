<?php
	echo '<div id="center" style="width:100%; left:0px;">
				<form action="index.php" method="GET">
					<input type="text" name="data" value="">
					<input type="submit" name="submit_search" value="ค้นหา">
				</form>';
	if(isset($_GET['submit_search']))
	{
		include 'showData.php';
	}
	echo '</div>';
?>