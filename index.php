<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf 8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Fonts for the page-->
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">


		<!--latest compiled and minified css-->
		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>


		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				...
			</div>
		</nav>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

<!--	insert for the flickity carousel-->
		<link rel="stylesheet" href="css/flickity.css">
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		<link type="text/css" href="css/style.css" rel="stylesheet" />
		<title>Jeremiah Z. Wood</title>

		<!--Insert Nice and Simple contact Form-->
		<link rel="stylesheet" href="NiceSimpleContactForm/style.css">
		<link rel="stylesheet" href="NiceSimpleContactForm/index.html">
		<script src="https://css-tricks.com/nice-and-simple-contact-form"></script>

		<!--insert reCAPTCHA Google-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>

	<!--content of main page starts here-->
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="jumbotron">
						<h1><strong>Jeremiah Z. Wood</strong></h1>
						<p>Albuquerque, N.M.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<nav> class="navbar navbar-default navbar-fixed-top">
								<div class="container">
								</div>
							</nav>
					</div>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-6">
				<h1 class="column-label">
					<strong>Headshots</strong>
				</h1>

				<div class="main-carousel" data-flickity>
					<div class="carousel-cell">
						<!--<img class="img-responsive" src="media/Headh shot 004-07-12-2013.png">-->
						<!--<a href="media/Headh shot 004-07-12-2013.png">Download</a>-->
					</div>

					<div class="carousel-cell">
						<img class="img-responsive" src="media/head shot 001 on 11-15-16.png">
						<a href="media/head shot 001 on 11-15-16.png">Download</a>
					</div>

					<div class="carousel-cell">
						<img class="img-responsive" src="media/head shot 002, 11-15-16.png">
						<a href="media/head shot 002, 11-15-16.png">Download</a>
					</div>

					<div class="carousel-cell">
						<img class="img-responsive" src="media/Headshot 00311-15-16.png">
						<a href="media/Headshot 00311-15-16.png">Download</a>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<h1 class="column-label">
					<strong>Video Real</strong>
				</h1>
				<p class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PvkcqgpZJCw" frameborder="0" allowfullscreen></iframe>

					<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12">
							<div class="NiceSimpleContactForm">

								<!--Begin Contact Form-->
								<form id="contact-form" action="php/mailer.php" method="post">
									<div class="form-group">
										<label for="name">Name <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="message">Message <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
										</div>
									</div>

									<!-- reCAPTCHA -->
									<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

									<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
									<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
								</form>

								<!--empty area for form error/success output-->
								<div class="row">
									<div class="col-xs-12">
										<div id="output-area"></div>
									</div>
								</div>


<!--insert the reCAPTCHA widget and info here-->
								<div class="g-recaptcha" data-sitekey="6Lfxkg0UAAAAAAJKQ4syBJZwGjcrq4FeuAf7sGkc"></div>

							</div>
				</p>
			</div>
		</div>
		</div>
	</body>
</html>

