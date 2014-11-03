<?php
	$admin = ['ดูรายวิชาที่มี มคอ แล้ว','ดูรายวิชาที่ยังไม่มี มคอ.','ดูข้อมูลรายวิชาตามภาคการศึกษา'];
	$student = ['ดูโปรไฟล์','ดูรายวิชาที่เรียน'];
	$professor = ['ดูโปรไฟล์','ดูรายวิชาที่สอน','aaa'];
	$guest = ['ค้นหารายวิชา'];
	if(isset($_COOKIE['username']))
	{
		if($_COOKIE['role'] == '0')
		{
			$menu = $professor;
		}
		else if($_COOKIE['role']=='1')
		{
			$menu = $student;
		}
		// else if($_COOKIE['role']=='2')
		// {
			// $menu = $professor;
		// }	
	}
	else
	{
		$menu = $guest;
	}
	for($i=0;$i<count($menu);$i++)
	{
		echo '<button name="menu" value="'.$menu[$i].'" style="width:150px; text-align:left;">'.$menu[$i].'</button><br>';
	}
	
?>