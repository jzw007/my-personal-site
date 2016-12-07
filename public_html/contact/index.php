<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

// set page title
$PAGE_TITLE = "Contact";

//load head-utils.php
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<!--content of main page starts here-->


<body class="sfooter main-layout">
	<div class="sfooter-content">
		<?php require_once($PREFIX . "php/partials/header.php"); ?>
		<div class="main-layout">
			<div class="container-fluid">
				<div class="row">
					<div class="home-picture">
						<div class="center-image">
							<img class="headshot" src="../image/acting images/Robin Williams.png" alt="Jeremiah">
						</div>
					</div>

				</div>
			</div>
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

	</div>
</body>
<?php require_once($PREFIX . "php/partials/footer.php"); ?>

</html>
