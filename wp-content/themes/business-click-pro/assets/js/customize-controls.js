/**
 * Scripts within the customizer controls window.
 *
 * Contextually shows the color hue control and informs the preview
 * when users open or close the front page sections section.
 */

(function() {
	wp.customize.bind( 'ready', function() {

		function expandCustomizer(customizerId) {
			wp.customize.section( customizerId, function( section ) {
				section.expanded.bind( function( isExpanding ) {
					// Value of isExpanding will = true if you're entering the section, false if you're leaving it.
					wp.customize.previewer.send( customizerId, { expanded: isExpanding });
				} );
			} );	
		}

		expandCustomizer('business-click-top-header-bar-sections');
		expandCustomizer('business-click-header-section');
		expandCustomizer('business-click-slider-section');
		expandCustomizer('business-click-feature-section');
		expandCustomizer('busiess-click-about-us-section');
		expandCustomizer('business-click-call-to-action-portfolio');
		expandCustomizer('business-click-portfolio-section');
		expandCustomizer('business-click-testimonial-section');
		expandCustomizer('business-click-our-team-section');
		expandCustomizer('business-click-blog-section');
		expandCustomizer('business-click-our-partner-section');
		expandCustomizer('business-click-contact-section');
		expandCustomizer('short-code1-section');
		expandCustomizer('short-code2-section');
		expandCustomizer('business-click-footer-options');
	});
})( jQuery );
