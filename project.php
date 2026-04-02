<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PSTU</title>
	<link rel="shortcut icon" type="image" href="Picture/logo1.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="library.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<li><a href="login.php" target="_blank">Sign In</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>University Management System</h1>
	</section>

	<section class="project">
		<div class="row">
			<div class="project-col">
				<h1>HI, I'M Jihadul Islam</h1>
				<p>Me Jihad, I am a 3rd year student of undergraduate from Patuakhali Science And Technology University. My major is Computer Science and Engineering. I am Inquisitive, energetic computer science specialist skilled in programming, with a strong foundation in math, logic, and cross-platform coding.</p>
				<div class="project-right">
					<h3>University Management System</h3>
					<div><span>Name : </span><span>Jihadul Islam</span></div>
					<div><span>Student ID : </span><span>2102071</span></div>
					<div><span>Class Name :</span><span>"2019 CSE"</span></div>
					<div><span>Tutor's Name :</span><span>Atikur Rahman</span></div>
				</div>
			</div>
			<div class="project-col">
				<img src="Picture/jihad.jpg">
			</div>
		</div>
	</section>

	<section class="library">
		<h1>Patuakhali Science And Technology University Library</h1>
		<div class="row">
			<div class="library-col-1">
				<div class="bookadd-box">
					<h3>ADD A BOOK</h3>
					<form class="add-form">
						<input type="text" id="title" placeholder="Enter the Title Name">
						<input type="text" id="author" placeholder="Enter Author Name">
						<input type="text" id="isbn" placeholder="Enter ISBN">
						<input type="text" id="year" placeholder="Enter year">
						<input type="button" onclick="handleButtonClick()" id="addButton" value="Add Book">
						<input type="button" onclick="clearButtonClick()" id="clearButton" value="Clear">
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="library-col">
				<div class="showbook-box">
					<h3>SHOW BOOKS</h3>
					<table id="book-table">
						<thead>
							<tr>
								<th>TITLE</th>
								<th>AUTHOR</th>
								<th>ISBN</th>
								<th>YEAR</th>
								<th>DELETE</th>
								<th>UPDATE</th>
							</tr>
						</thead>
						<tbody id="booklist"></tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

	<section class="Calculator">
		<h1>Calculator Project</h1>
		<div class="row">
			<div class="Calculator-col">
				<form class="Calculator1" name="clac">
					<input class="value" type="text" name="txt" readonly>
					<span class="num clear" onclick="document.clac.txt.value =''">C</span>
					<span class="num" onclick="document.clac.txt.value +='/'">/</span>
					<span class="num" onclick="document.clac.txt.value +='*'">*</span>
					<span class="num" onclick="document.clac.txt.value +='7'">7</span>
					<span class="num" onclick="document.clac.txt.value +='8'">8</span>
					<span class="num" onclick="document.clac.txt.value +='9'">9</span>
					<span class="num" onclick="document.clac.txt.value +='-'">-</span>
					<span class="num" onclick="document.clac.txt.value +='4'">4</span>
					<span class="num" onclick="document.clac.txt.value +='5'">5</span>
					<span class="num" onclick="document.clac.txt.value +='6'">6</span>
					<span class="num plus" onclick="document.clac.txt.value +='+'">+</span>
					<span class="num" onclick="document.clac.txt.value +='3'">3</span>
					<span class="num" onclick="document.clac.txt.value +='2'">2</span>
					<span class="num" onclick="document.clac.txt.value +='1'">1</span>
					<span class="num" onclick="document.clac.txt.value +='0'">0</span>
					<span class="num" onclick="document.clac.txt.value +='00'">00</span>
					<span class="num" onclick="document.clac.txt.value +='.'">.</span>
					<span class="num equal" onclick="document.clac.txt.value = eval(clac.txt.value)">=</span>
				</form>
			</div>
		</div>
	</section>

	<section class="gallery">
		<h1>Gallery Project</h1>
		<p>
			Patuakhali Science and Technology University (PSTU) has a beautiful, green, and serene campus. <br>
			Below are some selected pictures showcasing the natural beauty, student life, and modern academic facilities of the university in our gallery.
		</p>
		<div class="owl-carousel owl-theme">
			<div class="item"><img src="Picture/26.jpg"></div>
			<div class="item"><img src="Picture/19.jpg"></div>
			<div class="item"><img src="Picture/14.jpg"></div>
			<div class="item"><img src="Picture/17.jpg"></div>
			<div class="item"><img src="Picture/24.png"></div>
			<div class="item"><img src="Picture/10.jpg"></div>
			<div class="item"><img src="Picture/20.jpg"></div>
		</div>
	</section>

	<section class="fotter">
		<h4>About Us</h4>
		<p>It's My Project. I made it by using HTML5, CSS, JavaScript, MySQL and PHP</p>
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
