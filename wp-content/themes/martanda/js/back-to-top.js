( function() {
	'use strict';

    // Feature Test
	if ( 'querySelector' in document && 'addEventListener' in window ) {

		var goTopBtn = document.querySelector( '.martanda-back-to-top' );

		var trackScroll = function() {
			var scrolled = window.pageYOffset;
			var coords = goTopBtn.getAttribute( 'data-start-scroll' ) ;

			if ( scrolled > coords ) {
				goTopBtn.style.opacity = '1';
				goTopBtn.style.visibility = 'visible';
			}

			if (scrolled < coords) {
				goTopBtn.style.opacity = '0';
				goTopBtn.style.visibility = 'hidden';
			}
		};

		// Function to animate the scroll
		var smoothScroll = function (anchor, duration) {
			// Calculate how far and how fast to scroll
			var startLocation = window.pageYOffset;
			var endLocation = document.body.offsetTop;
			var distance = endLocation - startLocation;
			var increments = distance/(duration/16);
			var stopAnimation;

			// Scroll the page by an increment, and check if it's time to stop
			var animateScroll = function () {
				window.scrollBy(0, increments);
				stopAnimation();
			};

			// Stop animation when you reach the anchor OR the top of the page
			stopAnimation = function () {
				var travelled = window.pageYOffset;
				if ( travelled <= (endLocation || 0) ) {
					clearInterval(runAnimation);
				}
			};

			// Loop the animation function
			var runAnimation = setInterval(animateScroll, 16);
		};

		if (goTopBtn) {
			// Show the button when scrolling down.
			window.addEventListener('scroll', trackScroll);
			
			// Check if body has specific classes to exclude
			const body = document.body;
			if (!body.classList.contains('page-template-elementor_header_footer') && 
				!body.classList.contains('page-template-elementor_canvas') && 
				!body.classList.contains('elementor-page')) {

				// Scroll back to top when clicked.
				goTopBtn.addEventListener('click', function(e) {
					e.preventDefault();
					smoothScroll(document.body, goTopBtn.getAttribute('data-scroll-speed') || 400);
				}, false);
			}
		}

	}

 } )();
