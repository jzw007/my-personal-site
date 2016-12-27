<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/

require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf 8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--Fonts for the page-->
		<link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet">
<!--Font for main page-->
		<link href="https://fonts.googleapis.com/css?family=Loved+by+the+King|Slackey" rel="stylesheet">

		<!--latest compiled and minified css-->
		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>


		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!-- Fontawesome link-->
		<script src="https://use.fontawesome.com/06252b5f20.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="<?php echo $PREFIX; ?>js/jquery-validate.js"></script>

<!--	Custom JS	-->
		<script src="<?php echo $PREFIX; ?>js/custom-js.js"></script>
		<!--	insert for the flickity carousel-->
		<link rel="stylesheet" href="<?php echo $PREFIX; ?>css/flickity.css">
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		<link type="text/css" href="<?php echo $PREFIX; ?>css/style.css" rel="stylesheet"/>
		<title>Jeremiah Z. Wood</title>

		<!--insert reCAPTCHA Google-->
		<script src='https://www.google.com/recaptcha/api.js'></script>



	</head>