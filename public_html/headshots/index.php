<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>JZW Headshots</title>
	</head>

		<?php
		//load head-utils.php
		require_once("php/partials/head-utils.php");
		?>
		<!--content of main page starts here-->
		<?php require_once($PREFIX . "php/partials/header.php"); ?>
	<body class="main-layout">
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
				<div class="item active">
					<img src="Headshot 00311-15-16.png" alt="Chania">
				</div>

				<div class="item">
					<img src="Headh shot 004-07-12-2013.png" alt="Chania">
				</div>

				<div class="item">
					<img src="head shot 001 on 11-15-16.png" alt="Flower">
				</div>

				<div class="item">
					<img src="head shot 002, 11-15-16.png" alt="Flower">
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

	</body>
</html>
