/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );



	// user friendly
	// Collect information from customize-controls.js about which panels are opening.
	wp.customize.bind( 'preview-ready', function() {
    	
    	var adminbar = '';
    	var headerHeight = '';
    	var paddingOffset = '';
    	var homeClass = 'home page-template-default';

    	// if fixed header
    	/*var headerHeight = $('header.site-header').height();
    	var paddingOffset = 40;
    	if($('body').hasClass('admin-bar')) {
    		adminbar = $('#wpadminbar').height();
    	}*/

		function scrollToSection(customizerId, sectionId) {
			wp.customize.preview.bind( customizerId, function( data ) {
				// Only on the front page.
				if ( ! $( 'body' ).hasClass( homeClass ) ) {
					return;
				}

				// When the section is expanded, show and scroll to the content placeholders
				if ( true === data.expanded ) {		

			    	var headerHeight = $('header.site-header').height();
			    	var paddingOffset = 40;
					
					// might need to check if ...
					if($('body').hasClass('hide-header-on-scroll-down')) {
						headerHeight = '';
						paddingOffset = '';
					}

					$("html, body").animate({ 
			    		scrollTop: $( sectionId ).offset().top - headerHeight + paddingOffset
			    	}, 2e3, "easeInOutExpo");

				}
			});//end wp.customize
		}

		scrollToSection('business-click-top-header-bar-sections', '#page');//#evt-top-header
		scrollToSection('business-click-header-section', '#page');//#masthead
		scrollToSection('business-click-slider-section', '#evt-banner');//#masthead

		scrollToSection('business-click-feature-section', '#evt-featured');
		scrollToSection('busiess-click-about-us-section', '#evt-why-us');
		// 
		scrollToSection('business-click-call-to-action-portfolio', '#evt-call-to-action');
		scrollToSection('business-click-portfolio-section', '#evt-portfolio');
		scrollToSection('business-click-testimonial-section', '#evt-testimonials');
		scrollToSection('business-click-our-team-section', '#evt-team');
		scrollToSection('business-click-blog-section', '#evt-blog');
		scrollToSection('business-click-our-partner-section', '#evt-partner');
		scrollToSection('business-click-contact-section', '#evt-contact');
		scrollToSection('short-code1-section', '#evt-short-code1');
		scrollToSection('short-code2-section', '#evt-short-code2');

		scrollToSection('business-click-footer-options', 'footer.site-footer .site-info');


	});

} )( jQuery );
