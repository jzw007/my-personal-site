<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf 8">
		<meta http-equiv="x-ua-compatible"content="ie=edge">
		<meta name="viewport" content="width=device-width, initial scale=1">

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

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link type="text/css" href="../css/style.css" rel="stylesheet" />
		<title>Boo</title>
	</head>

	<!--content starts here-->
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6"> Column One: 6/12 columns, 50% of container width. </div>
				<div class="col-md-6"> Column Two: 6/12 columns, 50% of container width. </div>
			</div>

			<div class="row">
				<h1>BoYah BootStrap</h1>
				<div class="col-md-4"> Column Three: 4/12 columns, 33.33% of container width. </div>
				<div class="col-md-4"> Column Four: 4/12 columns, 33.33% of container width. </div>
				<div class="col-md-4"> Column Five: 4/12 columns, 33.33% of container width. </div>
			</div>
		</div>
	</body>
</html>

<html>

	<!-- thanks bootstrap: http://getbootstrap.com/components/#navbar -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo $PREFIX; ?>index.php">Home</a></li>
					<li><a href="<?php echo $PREFIX; ?>astronomy.php">Astronomy Apps</a></li>
					<li><a href="<?php echo $PREFIX; ?>demos.php">Games and Demos</a></li>
					<li><a href="<?php echo $PREFIX; ?>java.php">Java Downloads</a></li>
					<li><a href="<?php echo $PREFIX; ?>resume.pdf">Resume</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

