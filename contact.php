

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





		<div class="contact-container">
			<div class="contact-wrapper">
				<div class="contact-title">
					<h3>Contact Us</h3>
				</div>
				<div class="contact-form">
					<div class="input-fields">
						<input type="text" class="input" placeholder="Name">
						<input type="text" class="input" placeholder="Email Address">
						<input type="text" class="input" placeholder="Phone">
						<input type="text" class="input" placeholder="Subject">
					</div>
					<div class="msg">
						<textarea placeholder="Message"></textarea>
						<div class="btn">Send</div>
					</div>
				</div>
				<div class="contact-info">
					<p>Tel: 01234567891</p>
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
