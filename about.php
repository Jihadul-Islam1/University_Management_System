<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSTU</title>

    <link rel="shortcut icon" type="image" href="Picture/logo1.png">
    
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/typed.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="header">
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

        <div class="text-box">
            <div class="code">
                <h1>Patuakhali Science &amp; Technology <span class="type"></span></h1>
            </div>

            <script type="text/javascript">
                var typed = new Typed('.type', {
                    strings: ['University'],
                    typeSpeed: 120,
                    backSpeed: 60,
                    loop: true
                });
            </script>

            <p>
                Patuakhali Science and Technology University (PSTU), located in Dumki, Patuakhali, Bangladesh,<br>
                is a public university dedicated to excellence in agriculture, science and technology education.
            </p>

            <a href="https://www.pstu.ac.bd/" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Patuakhali Science and Technology University</h1>
                <p>
                    Patuakhali Science and Technology University (PSTU), located in Dumki, Patuakhali, is a public university in Bangladesh. It offers degrees in Agriculture, Fisheries, Computer Science, Veterinary Medicine, Business Administration and more. PSTU plays a vital role in the academic and socio-economic development of southern Bangladesh.
                </p>
                <p>
                    The university has multiple faculties and institutes, with a green and eco-friendly campus spread across a large area. PSTU's central library provides thousands of books, journals and digital resources to support learning and research.
                </p>

                <a href="#" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="Picture/m.jpg">
            </div>
        </div>
    </section>

    <section class="fotter">
        <h4>About Us</h4>
        <p>It's my project. I made it using HTML5, CSS, JavaScript and PHP.</p>
        <div class="icons">
            <a href="https://www.facebook.com/Jihadul.Islam.Ramim1"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com"><i class="fa fa-twitter" ></i></a>
				<a href="https://www.instagram.com/jihadul296/"><i class="fa fa-instagram" ></i></a>
				<a href="https://www.linkedin.com/in/jihadul-islam-b645b4339/"><i class="fa fa-linkedin" ></i></a>
				
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Jihadul Islam</p>
    </section>
</body>
</html>
