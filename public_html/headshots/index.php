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
				</section>
			</div>
		</div>
		</body>
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 50%;
			margin: auto;
		}
	</style>
</head>
<body>

	<div class="container">
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
					<img src="../media/babyface13.jpg" alt="Jeremiah" width="25" height="35">
					<div class="carousel-caption">
						<a href="../media/babyface13.jpg" download>
							<img src="../media/babyface13.jpg" />
						</a>
					</div>
				</div>

				<div class="item">
					<img src="../media/blueshirt16.jpg" alt="Jeremiah" width="25" height="35">
					<div class="carousel-caption">
					</div>
				</div>

				<div class="item">
					<img src="../media/walking13.jpg" alt="Jeremiah" width="25" height="35">
					<div class="carousel-caption">
					</div>
				</div>

				<div class="item">
					<img src="../media/greyBeard13.jpg" alt="Jeremiah" width="25" height="35">
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
		$(document).ready(function(){
			// Activate Carousel
			$("#myCarousel").carousel();

			// Enable Carousel Indicators
			$(".item1").click(function(){
				$("#myCarousel").carousel(0);
			});
			$(".item2").click(function(){
				$("#myCarousel").carousel(1);
			});
			$(".item3").click(function(){
				$("#myCarousel").carousel(2);
			});
			$(".item4").click(function(){
				$("#myCarousel").carousel(3);
			});

			// Enable Carousel Controls
			$(".left").click(function(){
				$("#myCarousel").carousel("prev");
			});
			$(".right").click(function(){
				$("#myCarousel").carousel("next");
			});
		});
	</script>

</body>
</html>


