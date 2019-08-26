<!DOCTYPE html>
<html>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scal=1. 0">

<head>

  <link rel="stylesheet" type="text/css" href="style.css"> <!-- main style sheet -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- bootstrap css -->

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- font awsome -->

</head>

<title>Website Practice</title>

<body style="background-color: #e2e2dc;">

	<?php
		include 'header.php';
	?>


	<div>

	<!-- <div class="banner-container">
			<video autoplay>
				<source src="./assets/videos/vid1.mp4" type="video/mp4">
			</video>
			<h3 class="banner-content">Were there for you</h3>
		</div> -->


		<div>

		</div>




		<div class="home-flex-container">

			<div class="what-we-do">
				<a href="services.php">
					<img src="./assets/images/army5.jpg">
					<div class="what-we-do-text">
						<h4>What we do</h4>
						<h5>All services we provide</h5>
					</div>
				</a>
			</div>

			<div class="news-events">
				<img src="./assets/images/press.jpeg">
				<div class="news-events-text">
					<h4>News and events</h4>
					<h5>Keep up to date</h5>
				</div>
			</div>

			<div class="what-it-takes">
				<a href="careers.php">
					<img src="./assets/images/contractor4.jpg">
					<div class="what-it-takes-text">
						<h4>Why not join</h4>
						<h5>Have what it takes?</h5>
					</div>
				</a>
			</div>

		</div>



		<div class="job-info-container" style="margin-top: 50px;">

			<div style="margin-bottom: 50px;">
				<h2>THINKING OF JOINING?</h2>
			</div>

			<div class="home-jobs-container">

				<div id="quote" class="main-job-info">
					<h5>Life at browning reed</h5>
					<blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.""</blockquote>
				</div>

				<div>

					<div class="second-job-container">

						<div class="role-number">
							<h4>Over</h4>
							<h2>100</h2>
							<h4>different jobs</h4>
						</div>

						<div class="wage-info">
							<h4>Start Earning</h4>
							<h2>$50k</h2>
							<h4>After training</h4>
						</div>

					</div>

					<div class="third-job-container">

						<div class="wage-info">
							<h4>Over</h4>
							<h2>100</h2>
							<h4>different jobs</h4>
						</div>

						<div class="wage-info">
							<h4>Over</h4>
							<h2>100</h2>
							<h4>different jobs</h4>
						</div>

					</div>


				</div>


			</div>

		</div>



		<!-- news and events -->

		<div class="news-events-container" style="margin-top: 50px;">

			<div class="news-title">

				<div class="news-title-text">
					<h2>LATEST NEWS AND EVENTS</h2>
				</div>

				<div class="news-button">
					<p>VIEW ALL EVENTS AND NEWS</p>
				</div>

			</div>

			<div class="news-events-container-info">

				<div class="news1">
					<img src="./assets/images/funeral.jpg">
					<h2>K I A on operation</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h3>News</h3>
				</div>

				<div id="news2">
					<img src="./assets/images/training1.jpg">
					<h2>Public exercise</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h3>Event</h3>
				</div>

				<div id="news3">
					<img>
					<h2>K I A On operation</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

			</div>





		</div>

	</div>


	<?php
		include 'footer.php';
	?>



<!-- jquary -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" src="main.js"></script>

<!-- bootstap js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
