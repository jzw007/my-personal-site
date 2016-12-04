<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

// set page title
$PAGE_TITLE = "JZW";

//load head-utils.php
require_once("php/partials/head-utils.php");
?>
	<!--content of main page starts here-->
<?php require_once($PREFIX . "php/partials/header.php"); ?>
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
				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>

	</body>
</html>

