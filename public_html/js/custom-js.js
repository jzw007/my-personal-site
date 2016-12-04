$(document).ready(function(){

	/********************************************
	 * Navbar Class Swap
	 * @author rlewis37@cnm.edu
	 *
	 * These functions require the jQuery library.
	 *
	 * On document load, these functions check the
	 * <body> tag for a class that indicates the
	 * layout type: either home-layout or content-layout.
	 *
	 * Then, applies the appropriate Bootstrap navbar
	 * style class is added depending on the layout.
	 *
	 * On the Home Page only, the navbar will change
	 * colors on scroll.
	 *
	 ********************************************/

	/* check <body> tag for the main-layout class, and add navbar-INVERSE class */
	if($('body').hasClass('main-layout')) {

		$('.navbar').addClass('navbar-inverse');

		/* on home page ONLY, swap out navabar classes if user scrolls down 50 px */
		$(window).on('scroll', function() {

			if($(window).scrollTop() > 50) {
				$('.navbar').addClass('navbar-inverse').removeClass('navbar-default');
			}

			/* when user scrolls back up, reset navbar*/
			if($(window).scrollTop() <= 50) {
				$('.navbar').addClass('navbar-default').removeClass('navbar-inverse');
			}

		});
	}

});