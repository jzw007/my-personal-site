<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

// set page title
$PAGE_TITLE = "JZW";

//load head-utils.php
require_once("php/partials/head-utils.php");
?>
	<!--content of main page starts here-->
	<body>
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
						<img class="img-responsive" src="media/head%20shot%20001%20on%2011-15-16.png">
						<a href="media/head%20shot%20001%20on%2011-15-16.png">Download</a>
					</div>

					<div class="carousel-cell">
						<img class="img-responsive" src="media/head%20shot%20002,%2011-15-16.png">
						<a href="media/head%20shot%20002,%2011-15-16.png">Download</a>
					</div>

					<div class="carousel-cell">
						<img class="img-responsive" src="media/Headshot%2000311-15-16.png">
						<a href="media/Headshot%2000311-15-16.png">Download</a>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<h1 class="column-label">
					<strong>Video Real</strong>
				</h1>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PvkcqgpZJCw" frameborder="0"
							  allowfullscreen></iframe>
				</div>

				<!--Begin Contact Form-->
				<form id="contact-form" action="php/mailer.php" method="post" novalidate>
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
							<input type="text" class="form-control" id="subject" name="subject"
									 placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message"
										 placeholder="Message (2000 characters max)"></textarea>
						</div>
					</div>

					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6Lfxkg0UAAAAAAJKQ4syBJZwGjcrq4FeuAf7sGkc"></div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>

	</body>
</html>

