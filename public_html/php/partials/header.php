<!--<header>-->
<!--	<nav>-->
<!--		<div class="container">-->
<!--			<div class="navbar-header">-->
<!--				<button type="button" class="navbar-toggle collapsed" data-toggle="#nav-collapse" aria-expanded="false">-->
<!--					<span class="sr-only">Toggle navigation</span>-->
<!--					<span class="icon-bar top-bar"></span>-->
<!--					<span class="icon-bar middle-bar"></span>-->
<!--					<span class="icon-bar bottom-bar"></span>-->
<!--				</button>-->
<!--				<a href="--><?php //echo $PREFIX;?><!--"><img src="--><?php //echo $PREFIX; ?><!--images/jzw-logo.png" alt="JZW" class="logo-small"/></a>-->
<!--			</div>-->
<!---->
<!--			<div class="collapse navbar-collapse" id="nav-collapse">-->
<!--				<ul class="nav navbar-nav navbar-right">-->
<!--					<li><a href="--><?php //echo $PREFIX;?><!--bio">Bio/Resume</a></li>-->
<!--					<!-- <li><a href="/~ttalcott/travis-pwp/public_html/our-work">Our Work</a></li> -->-->
<!--					<li><a href="--><?php //echo $PREFIX;?><!--headshots">Headshots</a></li>-->
<!--				</ul>-->
<!--			</div>-->
<!--		</div>-->
<!--	</nav>-->
<!--</header>-->

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
			<a class="" href="<?php echo $PREFIX;?>"><img src="<?php echo $PREFIX;?>image/jzw-logo-smallone1.png" alt="jzw"/></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $PREFIX;?>headshots">Headshots</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>