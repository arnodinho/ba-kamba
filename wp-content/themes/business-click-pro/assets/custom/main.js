+(function($) {

	function convertToSlug(Text)
	{
	   return Text
	       .toLowerCase()
	       .replace(/ /g,'-')
	       .replace(/[^\w-]+/g,'')
	       ;
	}


	var Section1		= convertToSlug(customzier_values['full-page-nav-item-1']); 
	var Section2		= convertToSlug(customzier_values['full-page-nav-item-2']); 
	var Section3		= convertToSlug(customzier_values['full-page-nav-item-3']); 
	var Section4		= convertToSlug(customzier_values['full-page-nav-item-4']); 
	var Section5		= convertToSlug(customzier_values['full-page-nav-item-5']); 
	var Section6		= convertToSlug(customzier_values['full-page-nav-item-6']); 
	var Section7		= convertToSlug(customzier_values['full-page-nav-item-7']); 
	var Section8		= convertToSlug(customzier_values['full-page-nav-item-8']); 
	var Section9		= convertToSlug(customzier_values['full-page-nav-item-9']); 
	var Section10		= convertToSlug(customzier_values['full-page-nav-item-10']); 
	var Section11		= convertToSlug(customzier_values['full-page-nav-item-11']); 


	function fullpage_init() {		
	    $('#content.site-content').fullpage({
	        verticalCentered: true,
	        scrollOverflow: true,

	        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',


	        //to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
	        css3: false,
	        anchors: [
	        	Section1, 
	        	Section2, 
	        	Section3, 
	        	Section4, 
	        	Section5, 
	        	Section6, 
	        	Section7, 
	        	Section8, 
	        	Section9, 
	        	Section10,
	        	Section11,
	        	],
	        menu: '#fp-menu',
	        	        
	        // navigation: true,
	        // navigationPosition: 'right',
	        // navigationTooltips: ['First page', 'Second page', 'Third and last page'],

	        // dragAndMove: true,

	        // can't be used with fixed background
	        //equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
	        // easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)'
	    });

        // calling fullpage.js methods using jQuery
	    $('#moveSectionDown').click(function(e){
	        e.preventDefault();
	        $.fn.fullpage.moveSectionDown();
	    });

	    $(document).on('click', '#evt-scroll-top', function(){
			fullpage_api.moveTo(1);
		});
	}

	function page_padding_top() {
		var header_height = $('header').height();

		if($('body').hasClass('fixed-header')) {
			if($('body').hasClass('blog')) {
				header_height += 30;
			}
		}
		else {
			// $('#page.site').css({ 'padding-top': '0' }); 
			header_height = 0;
		}

		if($('body.blog').hasClass('logo-left-nav-left')) {
			header_height += $('.evt-logo-center-nav').height();
		}
		
		$('#page.site').css({ 'padding-top': header_height + 'px' });

		// transparent-header
		if($('body.home').hasClass('transparent-header')) {
			$('body.home #page.site').css({ 'padding-top': '0' }); //if not top header
			// $('#page.site').css({ 'padding-top': $('header #evt-top-header').height() + 'px' });
		} 


		if($('body.home').hasClass('fullpage-enabled')) {
			header_height += 30;
			$('body.home .section .evt-img-overlay').css({ 'padding-top': header_height + 'px' });
		}

	}

	function nav_padding_right() {
		var padding_right = 0;
		if($('#evt-buy-btn').width() != null) {
			padding_right = $('#evt-buy-btn').width() + 40 + 20 + 'px';
		}

		if($('body').hasClass('logo-left'))
			$('nav#site-navigation').css({'padding-right': padding_right});

		else if($('body').hasClass('logo-right'))
			$('nav#site-navigation').css({'padding-left': padding_right});
	}

	$(window).resize(function() {
		page_padding_top();
		nav_padding_right();
	});

	$(document).ready(function() {
		// $('body.home').addClass('fullpage-enabled');


		// fullpage on homepage only
		if($('body.home').hasClass('fullpage-enabled')) {
			fullpage_init();
		}


		// dismissable
		$('.evt-preloader-close').click(function() {
			$('#evt-preloader').addClass('d-none');
		});

		// might need to see for fixed header
		/*jQuery('nav li a').click(function(e) { 
			// no need to disable link
			// e.preventDefault(); 

			var link = $(this);
	    	var id = link[0].hash;

	    	var adminbar = '';
	    	var headerHeight = $('header.site-header').height();
	    	var paddingOffset = 40;
	    	if($('body').hasClass('admin-bar')) {
	    		adminbar = $('#wpadminbar').height();
	    	}

	    	$("html, body").animate({ 
	    		scrollTop: $( id ).offset().top - headerHeight - adminbar + paddingOffset
	    	}, "slow");
		});*/

	});

	$(window).load(function() {
		// fixed header
		// boxed for archive page
		// transparent-header
		// hide-header-on-scroll-down
		// enable-scroll-animations
		$('body').addClass('fixed-header');// boxed

		// evt mobile menu
		$('#site-navigation').evtMobileMenu ();

		// padding top - also for fullpage
		page_padding_top();
		
		nav_padding_right();


		// show hide header contact info
		jQuery('.head-list-toggle').click(function(){
			jQuery('#evt-top-header').toggleClass('show-evt-head-list');
			// jQuery('#evt-head-list-item').toggle('fade');
			page_padding_top();

			// if(jQuery('.evt-head-list-item-wrap'))
		});

		// search toggle
		$('body').append('<div class="evt-search-mask"></div>');
		
		$('.evt-head-search-toggler').click(function() {
			$('body').toggleClass('head-search-active');

			// focus search input
			if($('body').hasClass('head-search-active')) {
				$('header.site-header .evt-head-search input.search-field').focus();
			}
		});

		$('.evt-search-mask').click(function() { 
			// console.log('mask');
			$('#evt-top-header .evt-head-search-toggler').trigger('click');
		});


		

		// scroll top
		$(window).scroll(function() { 
			var scrollTopPosition    = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;

			if (scrollTopPosition > 50) {//50, 200
				// scrolled down
		        $("body").addClass('small-header');
		        
		        $('#evt-scroll-top').css({'bottom': '40px'});
		    } else {
		        $("body").removeClass('small-header');

		        $('#evt-scroll-top').css({'bottom': '-40px'});
		    } 
		});



    	var adminbar = '';
    	var headerHeight = $('header.site-header').height();
    	var paddingOffset = 40;
		
		// might need to check if ...
		headerHeight = '';
		paddingOffset = '';
    	
    	if($('body').hasClass('admin-bar')) {
    		adminbar = $('#wpadminbar').height();
    	}

	    $('a[href*="#"]').on('click', function(event){
	        if ($(this.hash).length){
	            event.preventDefault();
	            $("html, body").stop().animate({
	            	scrollTop: $(this.hash).offset().top - adminbar - headerHeight - paddingOffset
	            }, 2e3, "easeInOutExpo");
	        }
	    });

		// slick_init
		var slick_ltr, slick_rtl;

		var slick_ltr = false;//ltr, rtl both works in false

		if($('body').hasClass('rtl')) {
			slick_rtl = true;//rtl works in true
		} else {
			slick_rtl = false;//ltr works in false
		}
		

		var Enable_Arrow		= customzier_values['business-click-enable-arrow'];
		var Enable_Autoplay		= customzier_values['business-click-enable-autoplay'];
		var Enable_Pager		= customzier_values['business-click-enable-pager'];
		var AutoSlider			= customzier_values['business-click-time-auto-slider'];
		var AutoSliderSpeed 	= (AutoSlider * 1000);

		// banner - slick
		$(".evt-banner-slider").slick({
			// normal options...
			arrows: 		(Enable_Arrow == 1) ? true : false,
			autoplay: 		(Enable_Autoplay == 1) ? true : false,
			autoplaySpeed: 	AutoSliderSpeed,
			draggable: 		true,
			dots: 			(Enable_Pager == 1) ? true : false,
			
			fade: 			true,//Fade if true

			infinite: 		true,
			pauseOnFocus: 	false,
			pauseOnHover: 	true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			swipe: true,

			useCSS: true,
		});

    	// show banner
		$("#evt-banner").css({'opacity': 1});

		// featured
		var EnableAutoPlay 			= customzier_values['business-click-feature-enable-autoplay'];
		var EnablePager 			= customzier_values['business-click-feature-enable-pager'];
		var AutoSliderTime 			= customzier_values['business-click-feature-time-autoplay-slide'];
		var AutoSliderSpeed 		= (AutoSliderTime * 1000);
		var Per_Row_Item			= customzier_values['business-click-feature-show-per-page'];

		$(".evt-featured-slider.evt-carousel").slick({
			// normal options...
			arrows: false,
			autoplay: (EnableAutoPlay == 1) ? true : false,
			autoplaySpeed: AutoSliderSpeed,
			draggable: true,
			dots: ( EnablePager == 1 ) ? true : false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: Per_Row_Item,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			swipe: true,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: Per_Row_Item,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});

		// carousel
		$(".evt-team-slider.evt-carousel .tmm_container").slick({
			// normal options...
			arrows: true,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			swipe: true,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});

		// blog
		var Enable_Arrow_Blog	 	= customzier_values['business-click-blog-enable-arrow'];
		var Enable_Autoplay_BLog	= customzier_values['business-click-blog-enable-autoplay'];
		var AutoSlider_Time_blog 	= customzier_values['business-click-blog-autoslide-time'];
		var AutoSliderSpeed 		= (AutoSlider_Time_blog * 1000);

		$(".evt-blog-slider.evt-carousel").slick({
			// normal options...
			arrows: (Enable_Arrow_Blog == 1) ? true : false,
			autoplay: ( Enable_Autoplay_BLog == 1) ? true : false,
			autoplaySpeed: AutoSliderSpeed,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			swipe: true,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});

		// testimonials	
		var Testimonials_Enable_arrow 		= customzier_values['business-click-testimonial-enable-arrow'];
		var Testimonials_Enable_autoplay 	= customzier_values['business-click-testimonial-enable-autoplay'];
		var Testimonials_Enable_pager 	    = customzier_values['business-click-testimonial-enable-pager'];
		var Testimonials_Autoplay_time 	    = customzier_values['business-click-testimonial-time-auto-slide'];
		var AutoSliderSpeed 				= (Testimonials_Autoplay_time * 1000);



		$(".evt-testimonials-slider").slick({
			// normal options...
			arrows: (Testimonials_Enable_arrow == 1) ? true : false,
			autoplay: (Testimonials_Enable_autoplay == 1) ? true : false,
			autoplaySpeed: AutoSliderSpeed,
			draggable: true,
			dots: (Testimonials_Enable_pager == 1 ) ? true : false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 1,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			swipe: true,
			useCSS: true,
		});

		// partner	
		$(".evt-partner-slider").slick({
			// normal options...
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 4,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			swipe: true,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 767,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 359,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});



	    /*wow js*/
		// wow js
	    if( $('body').hasClass('enable-scroll-animations') ) {
			if($('body.home').hasClass('fullpage-enabled')) {
		    }
		    else {
		    	// if full page is not enabled
			    wow = new WOW({
			            boxClass: 'evision-animate'
			        }
			    )
			    wow.init();
		    }
		}


	    /* isotope */
	    var grid = $('.evt-grid');
		// grid.imagesLoaded( function(){
			grid.isotope({
			    itemSelector: '.element-item',
			    masonry: {
			    	// columnWidth: 200
			    }
		    });
	    // });

	    // filter items on button click
		$('#filters.button-group').on( 'click', 'button', function() {
		  var filterValue = $(this).attr('data-filter');
		  grid.isotope({ filter: filterValue });
		});

		// change is-checked class on buttons
		$('#filters.button-group').each( function( i, buttonGroup ) {
		  var $buttonGroup = $( buttonGroup );
		  $buttonGroup.on( 'click', 'button', function() {
		    $buttonGroup.find('.is-checked').removeClass('is-checked');
		    $( this ).addClass('is-checked');
		  });
		});


		// hide header on scroll down, show on scroll up
		// Hide Header on on scroll down
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('header').outerHeight();

		$(window).scroll(function(event){
		    didScroll = true;
		});

		setInterval(function() {
		    if (didScroll) {
		        hasScrolled();
		        didScroll = false;
		    }
		}, 250);

		function hasScrolled() {
		    var st = $(this).scrollTop();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta)
		        return;
		    
		    // If they scrolled down and are past the navbar, add class .nav-up.
		    // This is necessary so you never see what is "behind" the navbar.
		    if (st > lastScrollTop && st > navbarHeight){
		        // Scroll Down
		        $('header.site-header').removeClass('nav-down').addClass('nav-up');
		    } else {
		        // Scroll Up
		        if(st + $(window).height() < $(document).height()) {
		            $('header.site-header').removeClass('nav-up').addClass('nav-down');
		        }
		    }
		    
		    lastScrollTop = st;
		}

		// preloader
		$('#evt-preloader').hide();
		
	});
})(jQuery);
//git branch markup