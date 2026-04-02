<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PSTU</title>
	<link rel="shortcut icon" type="image" href="Picture/logo1.png">
	
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<img src="Picture/logo3.png" width="150px">
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="project.php">PROJECT</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="course.php">COURSE</a></li>
					<li><a href="blog.php">BLOG</a></li>
					<li><a href="login.php">Sign In</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>Sign IN</h1>
	</section>

	<style>
		.log-col {
			background-color: #11013f;
			padding: 30px 25px;
			color: white;
			font-size: 20px;
			font-family: Arial, Helvetica, sans-serif;
		}
		.text h3 {
			margin-bottom: 100px;
		}
		.row a {
			text-decoration: none;
		}
		.log-col:hover {
			background-color: rgb(28, 3, 121);
		}
	</style>

	<section class="log-in" style="width: 40%; margin: auto;">
		<div class="row">
			<!-- <a href="meadmin/index.php" target="_blank"> -->
				<div class="log-col">
					<!-- <h2>Admin Login</h2> -->
					<h2><a href="index.php">Admin Login</a></h2>
				</div>
			</a>
			<!-- <a href="students/index.php" target="_blank"> -->
				<div class="log-col">
					<!-- <h2>Admin Login</h2> -->
					<h2><a href="index.php">Student Login</a></h2>
				</div>
			</a>
		</div>

		<div class="row">
			<div class="text"><h3></h3></div>
			<div class="text">
				<h3>Please log in. If you are Admin click Admin option. If you are student please select Student Login.</h3>
			</div>
		</div>
	</section>

	<section class="fotter">
		<h4>About Us</h4>
		<p>|| University Management System</p>
		<p>|| Develop By Jihadul Islam</p>
		<div class="icons">
			<a href="https://www.facebook.com/Jihadul.Islam.Ramim1"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com/jihadul296/"><i class="fa fa-instagram"></i></a>
			<a href="https://www.linkedin.com/in/jihadul-islam-b645b4339/"><i class="fa fa-linkedin"></i></a>
		</div>
		<p>Made With <i class="fa fa-heart-o"></i> By Jihadul Islam</p>
	</section>
</body>
</html>
