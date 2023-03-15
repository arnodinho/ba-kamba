jQuery(window).load(function() {
	// on window load

	// Top Header Bar
	jQuery('.menu_locations').click(function() {
		wp.customize.section( 'menu_locations' ).focus();
	});

	// Slider Section - Select post type for slider - From Page, From Category
	evt_feature_setting_show_hide( jQuery('ul#sub-accordion-section-business-click-slider-section li#customize-control-business_click_options-business-click-post-type-slider select').val(), 'ul#sub-accordion-section-business-click-slider-section' );

	// on change
	jQuery('ul#sub-accordion-section-business-click-slider-section li#customize-control-business_click_options-business-click-post-type-slider select').on('change', function() {
		evt_feature_setting_show_hide(this.value, 'ul#sub-accordion-section-business-click-slider-section');
	});


	// Slider - Number of Post - 1 to 7
	var sliderSelectedNum;
	var sliderNumberOfPostId = 'ul#sub-accordion-section-business-click-slider-section li#customize-control-business_click_options-business-click-number-of-slider select';
	var sliderNumberOfPostHideId = 'ul#sub-accordion-section-business-click-slider-section .customize-control-dropdown-pages';
	var sliderNumberOfPostShowId = 'li.customize-control-dropdown-pages#customize-control-business_click_options-business-click-page-id_';

	sliderSelectedNum = jQuery(sliderNumberOfPostId).val();
	number_of_post(sliderSelectedNum, sliderNumberOfPostHideId, sliderNumberOfPostShowId);

	// on change
	jQuery(sliderNumberOfPostId).on('change', function() {
		sliderSelectedNum = jQuery(this).val();
		number_of_post(sliderSelectedNum, sliderNumberOfPostHideId, sliderNumberOfPostShowId)
	});


	// Slider Section - Overlay
	// evt_slider_overlay('li#customize-control-business_click_options-business-click-slider-overlay-transparency');
	// evt_slider_overlay('li#customize-control-business_click_options-business-click-slider-hover-overlay-transparency');





	// Feature Section - Number of Post - 1 to 6
	var featuredSelectedNum;
	var featuredNumberOfPostId = 'ul#sub-accordion-section-business-click-feature-section li#customize-control-business_click_options-business-click-feature-number-post select';
	var featuredNumberOfPostHideId = 'ul#sub-accordion-section-business-click-feature-section li[id*="customize-control-business_click_options-feature-page-ids_"], ul#sub-accordion-section-business-click-feature-section li[id*="customize-control-business_click_options-feature-icons-ids_"]';
	var featuredNumberOfPostShowId = '.customize-control-dropdown-pages#customize-control-business_click_options-feature-page-ids_';
	var featuredNumberOfPostShowId2 = '.customize-control-text#customize-control-business_click_options-feature-icons-ids_';

	featuredSelectedNum = jQuery(featuredNumberOfPostId).val();
	number_of_post(featuredSelectedNum, featuredNumberOfPostHideId, featuredNumberOfPostShowId, featuredNumberOfPostShowId2);

	// on change
	jQuery(featuredNumberOfPostId).on('change', function() {
		featuredSelectedNum = jQuery(this).val();
		number_of_post(featuredSelectedNum, featuredNumberOfPostHideId, featuredNumberOfPostShowId, featuredNumberOfPostShowId2)
	});

	// Feature Section - Select Number of post
	/*jQuery('ul#sub-accordion-section-business-click-feature-section li#customize-control-business_click_options-business-click-feature-number-post select').on('change', function() {
		var selectedNum = jQuery(this).val();

		jQuery('ul#sub-accordion-section-business-click-feature-section li[id*="customize-control-business_click_options-feature-page-ids_"], ul#sub-accordion-section-business-click-feature-section li[id*="customize-control-business_click_options-feature-icons-ids_"]').hide();

		for(var i = 1; i <= selectedNum; i++) {
			jQuery('.customize-control-dropdown-pages#customize-control-business_click_options-feature-page-ids_'+i).show();
			jQuery('.customize-control-text#customize-control-business_click_options-feature-icons-ids_'+i).show();
		}
	});*/

	// Portfolio - Number of Category - 1 to 4
	var portfolioSelectedNum;
	var portfolioNumberOfPostId = 'ul#sub-accordion-section-business-click-portfolio-section li#customize-control-business_click_options-business-click-portfolio-number-of-post select';
	var portfolioNumberOfPostHideId = 'ul#sub-accordion-section-business-click-portfolio-section li[id*="customize-control-business_click_options-portfolio-category-post-ids_"]';
	var portfolioNumberOfPostShowId = '.customize-control-category_dropdown#customize-control-business_click_options-portfolio-category-post-ids_';

	portfolioSelectedNum = jQuery(portfolioNumberOfPostId).val();
	number_of_post(portfolioSelectedNum, portfolioNumberOfPostHideId, portfolioNumberOfPostShowId);

	// on change
	jQuery(portfolioNumberOfPostId).on('change', function() {
		portfolioSelectedNum = jQuery(this).val();
		number_of_post(portfolioSelectedNum, portfolioNumberOfPostHideId, portfolioNumberOfPostShowId)
	});





	// testimonial - Number of Category - 1 to 4
	var testimonialSelectedNum;
	var testimonialNumberOfPostId = 'ul#sub-accordion-section-business-click-testimonial-section li#customize-control-business_click_options-business-click-number-of-testimonial select';
	var testimonialNumberOfPostHideId = 'li[id*="customize-control-business_click_options-testimonial-designation-ids_"], li[id*="customize-control-business_click_options-testimonial-page-ids_"]';
	var testimonialNumberOfPostShowId = 'li#customize-control-business_click_options-testimonial-designation-ids_';
	var testimonialNumberOfPostShowId2 = 'li#customize-control-business_click_options-testimonial-page-ids_';

	testimonialSelectedNum = jQuery(testimonialNumberOfPostId).val();
	number_of_post(testimonialSelectedNum, testimonialNumberOfPostHideId, testimonialNumberOfPostShowId, testimonialNumberOfPostShowId2);

	// on change
	jQuery(testimonialNumberOfPostId).on('change', function() {
		testimonialSelectedNum = jQuery(this).val();
		number_of_post(testimonialSelectedNum, testimonialNumberOfPostHideId, testimonialNumberOfPostShowId, testimonialNumberOfPostShowId2)
	});


	// Testimonial Section - Select Number of post
	/*jQuery('ul#sub-accordion-section-business-click-testimonial-section li#customize-control-business_click_options-business-click-number-of-testimonial select').on('change', function() {
		var selectedNum = jQuery(this).val();
		jQuery('ul#sub-accordion-section-business-click-testimonial-section li[id*="customize-control-business_click_options-testimonial-page-ids_"], ul#sub-accordion-section-business-click-testimonial-section li[id*="customize-control-business_click_options-testimonial-designation-ids_"]').hide();

		for(var i = 1; i <= selectedNum; i++) {
			jQuery('.customize-control-dropdown-pages#customize-control-business_click_options-testimonial-page-ids_'+i).show();
			jQuery('.customize-control-text#customize-control-business_click_options-testimonial-designation-ids_'+i).show();
		}
	});*/



	// on change Logo Alignment (Header)
	// on load + on change
	var logoId = 'li#customize-control-business_click_options-business-click-logo select';
	logoIdSelected = jQuery(logoId).val();
	show_hide_header_contact(logoIdSelected);

	jQuery(logoId).on('change', function() {
		logoIdSelected = jQuery(this).val();

		show_hide_header_contact(logoIdSelected);
	});
});

function show_hide_header_contact(logoIdSelected) {
	if(logoIdSelected == 'logo-left-nav-left') {
		$('#customize-control-business_click_options-business-click-header-phone-enable').show();
		$('#customize-control-business_click_options-business-click-header-email-enable').show();
		$('#customize-control-business_click_options-business-click-header-location-enable').show();
	}
	else {
		$('#customize-control-business_click_options-business-click-header-phone-enable').hide();
		$('#customize-control-business_click_options-business-click-header-email-enable').hide();
		$('#customize-control-business_click_options-business-click-header-location-enable').hide();
	}
}

function number_of_post(selectedNum, hide_id, show_id, show_id2 = '') {
	jQuery(hide_id).hide();

	for(var i = 1; i <= selectedNum; i++) {
		jQuery(show_id+i).show();	
		jQuery(show_id2+i).show();	
	}
}

function evt_feature_setting_show_hide(value, parent_id) {
	if(value == 'From-Page') {
		jQuery(parent_id).addClass('from-page-selected');
		jQuery(parent_id).removeClass('from-category-selected');	
	}
	else {
		jQuery(parent_id).addClass('from-category-selected');	
		jQuery(parent_id).removeClass('from-page-selected');
	}
}

function evt_slider_overlay(li_id) {
	jQuery(li_id).append('<div class="slider-overlay"></div>');

	jQuery(li_id + " .slider-overlay").slider({
	    range: "min",
	    value: 0.5,
	    step: 0.01,
	    min: 0,
	    max: 1,
	    slide: function( event, ui ) {
	        jQuery( li_id + " input" ).val( ui.value );
	    }
	});
	jQuery(li_id+ " input").keyup(function () {
	    var value = this.value;
	    jQuery(li_id + " .slider-overlay").slider("value", value);
	});
}