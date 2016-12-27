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

	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 50%;
			margin: auto;
		}
	</style>

	<!--content of main page starts here-->
	<?php require_once($PREFIX . "php/partials/header.php"); ?>
	<div class="main-layout">
		<div class="container-fluid">
			<div class="row">
				<section class="home-picture">
					<img class="center-block" src="../image/acting images/Charly Chaplin.png" alt="Jeremiah">
				</section>
			</div>
		</div>


		<div class="container text-center">
			<h2>Headshots</h2>
			<p> click the image to download</p>
			<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="item1 active"></li>
					<li class="item2"></li>
					<li class="item3"></li>
					<li class="item4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<div class="item active">
						<a download="../media/babyface13.jpg" href="../media/babyface13.jpg" title="Jeremiah" width="25"
							height="35">
							<img alt="Jeremiah" src="../media/babyface13.jpg">
						</a>
						<div class="carousel-caption">
						</div>
					</div>

					<div class="item">
						<a download="../media/blueshirt16.jpg" href="../media/blueshirt16.jpg" title="Jeremiah" width="25"
							height="35">
							<img src="../media/blueshirt16.jpg" alt="Jeremiah" width="25" height="35">
						</a>
						<div class="carousel-caption">
						</div>
					</div>

					<div class="item">
						<a src="../media/walking13.jpg" href="../media/walking13.jpg" title="Jeremiah" width="25" height="35">
							<img src="../media/walking13.jpg" alt="Jeremiah" width="25" height="35">
						</a>
						<div class="carousel-caption">
						</div>
					</div>

					<div class="item">
						<a download="../media/greyBeard13.jpg" href="../media/greyBeard13.jpg" title="Jeremiah" alt="Jeremiah"
							width="25" height="35">
							<img src="../media/greyBeard13.jpg" alt="Jeremiah" width="25" height="35">
						</a>
						<div class="carousel-caption">
						</div>
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				// Activate Carousel
				$("#myCarousel").carousel();

				// Enable Carousel Indicators
				$(".item1").click(function() {
					$("#myCarousel").carousel(0);
				});
				$(".item2").click(function() {
					$("#myCarousel").carousel(1);
				});
				$(".item3").click(function() {
					$("#myCarousel").carousel(2);
				});
				$(".item4").click(function() {
					$("#myCarousel").carousel(3);
				});

				// Enable Carousel Controls
				$(".left").click(function() {
					$("#myCarousel").carousel("prev");
				});
				$(".right").click(function() {
					$("#myCarousel").carousel("next");
				});
			});
		</script>

</body>
</html>


