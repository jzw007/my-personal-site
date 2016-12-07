<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

// set page title
$PAGE_TITLE = "JZW";

//load head-utils.php
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<!--content of main page starts here-->
<body class="main-layout sfooter">
		<!--content of main page starts here-->
		<?php require_once($PREFIX . "php/partials/header.php"); ?>
	<div class="main-layout">
		<div class="container-fluid">
			<div class="row">
				<section class="home-picture">
					<div class="center-text"><h1></h1></div>
				</section>
			</div>
		</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="headshot">
					<img src="media/blueshirt16.jpg" alt="Jeremiah">
				</div>

				<div class="headshot	">
					<img src="media/walking13.jpg" alt="Jeremiah">
				</div>

				<div class="headshot">
					<img src="media/gshirt16.png" alt="Jeremiah">
				</div>

				<div class="headshot">
					<img src="media/greyBeard13.jpg" alt="Jeremiah">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		</div>

	</body>
<?php require_once($PREFIX . "php/partials/footer.php"); ?>
</html>
