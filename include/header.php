<?php

include_once 'ViewClass.php';
include_once 'sessionclass.php';
include_once 'InsertClass.php';
include_once 'DeleteClass.php';

$viewcls = new ViewClass();
$senddata = new InsertClass();
$deletedata = new DeleteClass();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>e - learning </title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />


	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<style type="text/css">
		.dropbtn {

			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.dropbtn:hover,
		.dropbtn:focus {
			background-color: #2980B9;

		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			overflow: auto;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown a:hover {
			background-color: #ddd;
		}

		.show {
			display: block;
		}
	</style>



</head>

<body>
	<style type="text/css">
		/* component */
		.header-buttn {
			margin: 17px 10px;
			color: wheat;
		}

		.star-rating {
			border: solid 1px #ccc;
			display: flex;
			flex-direction: row-reverse;
			font-size: 1.5em;
			justify-content: space-around;
			padding: 0 .2em;
			text-align: center;
			width: 5em;
		}



		.star-rating label {
			color: #fc0;

		}



		/* explanation */

		article {
			background-color: #ffe;
			box-shadow: 0 0 1em 1px rgba(0, 0, 0, .25);
			color: #006;
			font-family: cursive;
			font-style: italic;
			margin: 4em;
			max-width: 30em;
			padding: 2em;
		}
	</style>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img style="height: 93px;" src="img/logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<?php
					if (isset($_SESSION['true'])) {
						$student_id = $_SESSION['student_id'];

						if (isset($_SESSION['teacher_auth']) == 'teacher_auth') { ?>

						<?php } else {

						?>
							<div>
								
							</div>
						<?php } ?>



						<a href="?logout=action">
							<p style="float:right;font-size: 22px; margin-top: 5px;" class="header-buttn header-btn">Logout</p>
						</a>
						<?php if (isset($_SESSION['teacher_auth']) == 'teacher_auth') { ?>
							<a style="float: right;" class="header-buttn header-btn" href="teacherpro.php"> <?php } else { ?>

								<a style="float: right;" class="header-buttn header-btn" href="">

								<?php }
																										echo $_SESSION['name'];


																										if (isset($_GET['logout']) == 'action') {
																											session_destroy();
																											echo "<script> window.location = 'login.php';</script>";
																										}


								?></a>

							<?php  } else { ?>
								<a href="login.php" class="site-btn header-btn">Login</a>
							<?php }  ?>

							<nav class="main-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="courses.php">Courses</a></li>
									<?php
									if (isset($_SESSION['teacher_auth']) == 'teacher_auth') {

									?>
										<li><a href="my_course.php">My Courses</a></li>
									<?php } ?>
									<!-- <li><a href="blog.php">News</a></li> -->
									<!-- <li><a href="contact.php">Contact</a></li> -->
								</ul>
							</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->