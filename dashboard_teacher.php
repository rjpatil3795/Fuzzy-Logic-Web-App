<?php require 'config/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DASHBOARD</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	<input type="checkbox" id="check">
	<header>
		<label for="check">
			<i class="fas fa-bars" id="slidebar_btn"></i>
		</label>
		<div class="left_area">
			<h3>Student Performance System</h3>
		</div>

		<div class="right_area">
			<a href="index.html"class="logout_btn">Logout</a>
			
		</div>
	</header>

	<div class="slidebar">
		<center>
			<img src="images/user.png" class="profile_image" alt="">
			<h4>Profile</h4>
		</center>
		<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i><span>Profile</span></a>
		<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i><span>Academic</span></a>
		<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i><span>News</span></a>
		<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i><span>Notice</span></a>
	</div>

	<div class="content">
		<a href="department_to_view.php">
			<button type="button">View Students</button>
		</a>
		<a href="#">
		
			<a href="selectDepartment.php">
				<button type="button" class="primary-btn">Add Marks</button>
			</a>
			
		</a>
		<a href="piesemselect.php">
			<button type="button">Graphical View</button>
		</a>
	</div>


</body>
</html>