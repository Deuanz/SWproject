<html>
	<head>
		<meta charset='utf-8'>
		<style>
			#slide-bar{
				background-color:#ff7260;
				width:15%;
				height:100%;
				position:fixed;
				left:0px;
				top:0px;
				font-family: sans-serif;
				line-height: 1;
				margin-top: 30px;
			}

			.btn-slide-bar{
				width:100%;
				height:10%;
				background-color:#ff7260;
				border:1px solid #ff7260;
				display:inline-block;
				cursor:pointer;
				color:#556270;
				font-family:arial;
				font-size:17px;
				text-decoration:none;
				border-bottom: 2px dashed;
			}

			.btn-slide-bar:hover {
				background-color:#f9cdad;
				border:1px solid #f9cdad;
				border-bottom: 2px dashed;
			}
			.btn-slide-bar:active {
				position:relative;
				top:1px;
			}

		</style>
	</head>

	<body>
		<div id="slide-bar">
			<button class="btn-slide-bar" type="button">ข้อมูลส่วนตัว</button>
			<button class="btn-slide-bar" type="button">รายวิชาที่ลงทะเบียน</button>
			<button class="btn-slide-bar" type="button">ลงทะเบียน</button>
			<button class="btn-slide-bar" type="button">ออกจากระบบ</button>
		</div>
	</body>
</html>