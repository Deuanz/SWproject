<?php
	$admin = ['ดูรายวิชา','ดูรายวิชาที่มี มคอ แล้ว','ดูรายวิชาที่ยังไม่มี มคอ.','ดูข้อมูลรายวิชาตามภาคการศึกษา'];
	$student = ['ดูโปรไฟล์','ดูรายวิชาที่เรียน'];
	$teacher = ['ดูโปรไฟล์','ดูรายวิชาที่สอน'];
	$guest = ['ค้นหารายวิชา'];
	if(isset($_COOKIE['username']))
	{
		if($_COOKIE['type'] == '0')
		{
			$menu = $admin;
		}
		else if($_COOKIE['type']=='2')
		{
			$menu = $student;
		}
		else if($_COOKIE['type']=='1')
		{
			$menu = $teacher;
		}	
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