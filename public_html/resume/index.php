<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

// set page title
$PAGE_TITLE = "Resume";

//load head-utils.php
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<!--content of main page starts here-->

<body class="sfooter main-layout">
	<div class="sfooter-content">
		<?php require_once($PREFIX . "php/partials/header.php"); ?>
		<div class="container-fluid">
			<div class="row">
				<section class="home-picture">
					<div class="center-text container">
						<h1 class="main-heading">
							Resume
						</h1>
						<img class="headshot" src="../image/acting images/Johnny Dep.png" alt="Jeremiah">
					</div>

				</section>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="center-image">
					<img class="center-image resume" src="../image/acting-resume.png" alt="Jeremiah">
				</div>
			</div>
		</div>


	</div>
</body>
<?php require_once($PREFIX . "php/partials/footer.php"); ?>

</html>