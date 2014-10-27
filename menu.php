<?php
	$admin = ['a','b','c','d'];
	$student = ['a','b','c'];
	$teacher = ['a','b','d'];
	if(isset($_COOKIE['username']))
	{
		if($_COOKIE['type'] == '0')
		{
			$menu = $admin;
		}
		else if($_COOKIE['type']=='1')
		{
			$menu = $student;
		}
		else
		{
			$menu = $teacher;
		}	
	}
	else
	{
		$menu = ['a','b'];
	}
	for($i=0;$i<count($menu);$i++)
	{
		echo '<button style="width:100px;text-align:left;">'.$menu[$i].'</button><br>';
	}
?>