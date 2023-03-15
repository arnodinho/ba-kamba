<?php
/*color alignment single post*/
if( ! function_exists( 'business_click_page_color' ) ) :
    /**
     * business-click default layout function
     *
     * @since  business-click 1.0.0
     *
     * @param int
     * @return string
     */
    function business_click_page_color( $post_id = null ){
        global $business_click_customizer_all_values,$post;
        if( null == $post_id && isset ( $post->ID ) ){
            $post_id = $post->ID;
        }
        $business_click_page_color = $business_click_customizer_all_values['business-color-page'];
       
        $business_click_page_color_meta = get_post_meta( $post_id, 'business-color-page', true );

        if( false != $business_click_page_color_meta ) {
            $business_click_page_color = $business_click_page_color_meta;
        }
        return $business_click_page_color;
    }
endif;

/**
*Inline style to use color options
**/
if( ! function_exists( 'business_click_inline_style' ) ) :

    /**
     * style to use color options
     *
     * @since  flare 1.0.1
     */
    function business_click_inline_style()
    {
      
        global $business_click_customizer_all_values;

        global $business_click_google_fonts;
        $business_click_customizer_defaults['business-click-font-family-site-identity']         = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-menu']                  = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-heading']                 = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-body-p']                = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-button-text']           = 'Roboto+Condensed:400,300,400italic,700';
        $business_click_customizer_defaults['business-click-footer-copy-right-text']            = 'Open+Sans:400,400italic,600,700';

        $business_click_font_family_site_identity           = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-site-identity']];
        $business_click_font_family_menu_text               = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-menu']];

        $business_click_font_family_h1_h6                   = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-heading']];
        $business_click_font_family_body_paragraph          = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-body-p']];
        $business_click_font_family_button_text             = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-button-text']];
        $business_click_font_family_footer_copyright_text   = $business_click_google_fonts[$business_click_customizer_all_values['business-click-footer-copy-right-text']];

        
        //*color options*/
        $business_click_background_color                        = get_background_color();
        $business_click_site_identity_color_option              = $business_click_customizer_all_values['business-click-site-identity-color'];
        $business_click_inner_page_color = business_click_page_color();

        if(null != $business_click_inner_page_color){
            $business_click_primary_color_option =  $business_click_inner_page_color;
        $business_click_link_text_color                         = $business_click_inner_page_color;
        }else{

            $business_click_primary_color_option                    = $business_click_customizer_all_values['business-click-primary-color'];
            $business_click_link_text_color                         = $business_click_customizer_all_values['business-click-link-text-color'];
        }
        $business_click_top_header_bar_background_color         = $business_click_customizer_all_values['business-click-top-header-background-bar-color'];
        $business_click_top_header_bar_text_color               = $business_click_customizer_all_values['business-click-top-header-bar-text-color'];
        $business_click_menu_header_background_color            = $business_click_customizer_all_values['business-click-menu-header-background-color'];
        $business_click_header_menu_text_color                  = $business_click_customizer_all_values['business-click-menu-header-text-color'];
        $business_click_menu_text_transparent_color             = $business_click_customizer_all_values['business-click-menu-text-color-transparent'];
        $business_click_button_background_hover_color           = $business_click_customizer_all_values['business-click-button-background-hover-color'];
        $business_click_button_text_color                       = $business_click_customizer_all_values['business-click-button-text-color'];
        $business_click_h1_h6                                   = $business_click_customizer_all_values['business-click-business-click-h1-h6'];
        $business_click_section_heading_bottom_border           = $business_click_customizer_all_values['business-click-section-heading-bottom-border-color'];
        $business_click_footer_background                       = $business_click_customizer_all_values['business-click-footer-background-color'];
        $business_click_footer_text_color                       = $business_click_customizer_all_values['business-click-footer-text-color'];
        $business_click_footer_link_color                       = $business_click_customizer_all_values['business-click-footer-link-color'];


        $business_click_slider_overlay                          = $business_click_customizer_all_values['business-click-slider-overlay-transparency'];
        $business_click_slider_hover_overlay                    = $business_click_customizer_all_values['business-click-slider-hover-overlay-transparency'];
        $business_click_portfolio_overlay                       = $business_click_customizer_all_values['business-click-portfolio-overlay-transparent'];
        $business_click_partner_overlay                       = $business_click_customizer_all_values['business-click-our-partner-overlay-transparent'];
        $business_click_feature_overlay                         = $business_click_customizer_all_values['business-click-feature-overlay-transparent'];
        $business_click_call_to_action_overlay                  = $business_click_customizer_all_values['business-click-call-to-action-overlay-transparent'];
        $business_click_testimonial_overlay                     = $business_click_customizer_all_values['business-click-testimonial-overlay-transparency'];
        $business_click_blog_overlay_transparency               =  $business_click_customizer_all_values['business-click-blog-overlay-transparency'] ;
        $business_click_contaner_width                          = $business_click_customizer_all_values['business-click-conatiner-width-layout'];

        /*feature box background  sextion*/
        $business_click_feature_box_bg_color                    = $business_click_customizer_all_values['business-click-feature-box-bg-color'];
        /*feature box text clor*/
        $business_click_feature_box_text_color                  = $business_click_customizer_all_values['business-click-feature-box-text-color'];

        /*loading screen*/
        $business_click_loading_background_color                = $business_click_customizer_all_values['business-click-loading-background-color'];
        $business_click_loading_color                           = $business_click_customizer_all_values['business-click-loading-color'];
        $business_click_loading_always_show                     = $business_click_customizer_all_values['business-click-loading-always-show'];


        /*For Menu Font Size,Spacing,Height*/
        $business_click_menu_font_size                          = $business_click_customizer_all_values['business-click-font-family-menu-size'];
        $business_click_menu_font_Line_height                   = $business_click_customizer_all_values['business-click-font-family-menu-line-height'];
        $business_click_menu_font_letter_spacing                = $business_click_customizer_all_values['business-click-font-family-menu-letter'];
        $business_click_menu_font_wieght                        = $business_click_customizer_all_values['business-click-font-family-menu-weight'];
        $business_click_menu_font_enable_italic                 = $business_click_customizer_all_values['business-click-font-family-menu-italic'];
        $business_click_menu_font_enable_uppercase              = $business_click_customizer_all_values['business-click-font-family-menu-uppercase'];

        /*For Heading Font Size,Spacing,Height*/
        $business_click_header_font_size                         = $business_click_customizer_all_values['business-click-font-family-heading-size'];
        $business_click_header_font_Line_height                  = $business_click_customizer_all_values['business-click-font-family-heading-line-height'];
        $business_click_header_font_letter_spacing               = $business_click_customizer_all_values['business-click-font-family-heading-letter'];
        $business_click_header_font_wieght                       = $business_click_customizer_all_values['business-click-font-family-heading-weight'];
        $business_click_header_font_enable_italic                = $business_click_customizer_all_values['business-click-font-family-heading-italic'];
        $business_click_header_font_enable_uppercase             = $business_click_customizer_all_values['business-click-font-family-heading-uppercase'];

        $business_click_h1_size = $business_click_customizer_all_values['business-click-font-family-heading-h1-size'];
        $business_click_h2_size = $business_click_customizer_all_values['business-click-font-family-heading-h2-size'];
        $business_click_h3_size = $business_click_customizer_all_values['business-click-font-family-heading-h3-size'];


        /*For Heading Font Size,Spacing,Height*/
        $business_click_body_font_size                             = $business_click_customizer_all_values['business-click-font-family-body-size'];
        $business_click_body_font_Line_height                      = $business_click_customizer_all_values['business-click-font-family-body-line-height'];
        $business_click_body_font_letter_spacing                   = $business_click_customizer_all_values['business-click-font-family-body-letter'];
        $business_click_body_font_wieght                           = $business_click_customizer_all_values['business-click-font-family-body-weight'];
        $business_click_body_font_enable_italic                    = $business_click_customizer_all_values['business-click-font-family-body-italic'];
        $business_click_body_font_enable_uppercase                 = $business_click_customizer_all_values['business-click-font-family-body-uppercase'];


        // fp menu text - slugify
        $fp_menu_section1 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-1']);
        $fp_menu_section2 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-2']);
        $fp_menu_section3 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-3']);
        $fp_menu_section4 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-4']);
        $fp_menu_section5 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-5']);
        $fp_menu_section6 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-6']);
        $fp_menu_section7 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-7']);
        $fp_menu_section8 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-8']);
        $fp_menu_section9 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-9']);
        $fp_menu_section10 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-10']);
        $fp_menu_section11 = business_click_slugify($business_click_customizer_all_values['full-page-nav-item-11']);
        ?>
      
      <style type="text/css">

        /*site identity font family*/
            .site-title,
            .site-title a,
            .site-description,
            .site-description a {
                font-family: '<?php echo esc_attr( $business_click_font_family_site_identity ); ?>';
            }
                        
            h2, h2 a, .h2, .h2 a, 
            h2.widget-title, .h1, .h3, .h4, .h5, .h6, 
            h1, h3, h4, h5, h6 .h1 a, .h3 a, .h4 a,
            .h5 a, .h6 a, h1 a, h3 a, h4 a, h5 a, 
            h6 a {
                /*font-family: '<?php //echo esc_attr( $business_click_font_family_heading ); ?>';*/
            }

            /* readmore and fonts*/
            .readmore, .business-click-header-wrap .business-click-head-search form .search-submit, .widget_search form .search-submit, a.btn, .btn, a.readmore, .readmore, .wpcf7-form .wpcf7-submit, button, input[type="button"], input[type="reset"], input[type="submit"], .dark-theme .site-content a.readmore, .dark-theme .site-content .readmore, .dark-theme #business-click-social-icons ul li a, .dark-theme-coloured .btn, .dark-theme-coloured a.btn, .dark-theme-coloured button, .dark-theme-coloured input[type="submit"], .dark-theme-coloured .business-click-header-wrap .business-click-head-search form .search-submit {
                font-family: '<?php echo esc_attr( $business_click_font_family_button_text ); ?>';
            }

            /*font family menu text*/
             nav#site-navigation ul a
            {
                font-family: '<?php echo esc_attr( $business_click_font_family_menu_text ); ?>';
            }

            /*font family body paragraph text*/
            p
            {
                font-family: '<?php echo esc_attr( $business_click_font_family_body_paragraph ); ?>';
            }

            /*font family footer copyright  text*/
            .evt-copyright 
            {
                font-family: '<?php echo esc_attr( $business_click_font_family_footer_copyright_text ); ?>'!important;
            }




        /*=====COLOR OPTION=====*/
        /*Color*/
        /*----------------------------------*/
        <?php 
        /*Primary*/
        if( !empty($business_click_primary_color_option) ){
        // removing , .readmore:hover, a.readmore:hover from bg
        // adding in color
        ?>

        .widget-title:before, .widgettitle:before, .page-title:before, .entry-title:before, .widget_search form .search-submit, .evt-head-search form .search-submit, .pagination .nav-links a, .wp-pagenavi a, .woocommerce nav.woocommerce-pagination a, .pagination .nav-links span, .wp-pagenavi span, .woocommerce nav.woocommerce-pagination span, a.btn, .btn, .wpcf7-form .wpcf7-submit, .woocommerce #respond input#submit, .woocommerce div.product form.cart .button, .woocommerce #respond input#submit.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, button, input[type="button"], input[type="reset"], input[type="submit"], .btn.btn-reverse:hover, .wp-pagenavi a:hover, .wp-pagenavi span.current, .pagination .nav-links ul li span.current, .wp-pagenavi ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current, .pagination .nav-links ul li span:hover, .wp-pagenavi ul li span:hover, .woocommerce nav.woocommerce-pagination ul li span:hover, .pagination .nav-links ul li a:hover, .wp-pagenavi ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, header.site-header .evt-header-wrap-nav .evt-menu-toggler-manage #menu-icon.menu-toggler:hover span, ul.slick-dots li button:hover, ul.slick-dots li.slick-active button, .woocommerce span.onsale, .evt-carousel.slick-slider ul.slick-dots li button:hover, .evt-carousel.slick-slider ul.slick-dots li.slick-active button, .evt-featured-item-wrap .evt-featured-item .evt-featured-icon, #evt-top-header, .evt-thumb-holder .evt-thumb-hover, #evt-team .evt-box-item-wrap .evt-box-image .evt-box-social-icons, #evt-testimonials.dark-background, #evt-testimonials .evt-testimonials-slider, .elementor-widget-button a.elementor-button, .elementor-widget-button .elementor-button, .elementor-slick-slider ul.slick-dots li button, .elementor-widget-icon.elementor-view-stacked .elementor-icon, body .elementor-social-icon, body .elementor-add-new-section .elementor-add-section-button, #evt-featured.featured-background .evt-featured-item-wrap .evt-featured-item, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce div.product .product_title:before,
        #evt-call-to-action.layout-2,
        body.logo-left-nav-left nav#site-navigation,
        body.logo-left-nav-left .evt-logo-center-nav.evt-menu-toggler-manage,
        body.transparent-header.logo-left-nav-left .evt-logo-center-nav.evt-menu-toggler-manage,
        .read-more,
        .read-more-text a,
        ul#fp-menu li a span.fp-menu-text,
        ul#fp-menu li a span.fp-menu-indicator span,
        .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
            background-color: <?php echo esc_attr( $business_click_primary_color_option ) ;?>;
        }
        ul#fp-menu li a span.fp-menu-text:after {
            border-color: transparent transparent transparent <?php echo esc_attr( $business_click_primary_color_option ) ;?>;
        }
        body.home.logo-left-nav-left.non-tarnsparent:not(.small-header) .evt-logo-center-nav.evt-menu-toggler-manage {
            background-color: transparent;
        }

        .woocommerce-message, .woocommerce-info, .pbThumbs li.active a img,
        nav#site-navigation ul#menu > li > ul, nav#site-navigation ul.nav-menu > li > ul, nav#site-navigation ul.menu > li > ul,
        nav#site-navigation [id^=mega-menu-wrap-menu] [id^=mega-menu-menu] > li.mega-menu-flyout ul.mega-sub-menu, nav#site-navigation [id^=mega-menu-wrap-menu] [id^=mega-menu-menu] > li.mega-menu-megamenu > ul.mega-sub-menu {
            border-color: <?php echo esc_attr( $business_click_primary_color_option ) ;?> !important;
        }

        /* link color */
        a:hover, .evt-item article .entry-title a:hover, a.readmore, .readmore, .breadcrumbs .trail-items .trail-item a, nav#site-navigation ul li:hover > a, nav#site-navigation ul#menu > li.current-menu-item > a, nav#site-navigation ul.nav-menu > li.current-menu-item > a, nav#site-navigation ul.menu > li.current-menu-item > a, nav#site-navigation ul > li.current-menu-ancestor > a, nav#site-navigation ul li.current_page_item > a, .slick-slider .slick-arrow:hover, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce-message::before, .woocommerce-info::before, .woocommerce form .form-row .required, .evt-head-search-toggler:hover i, body.head-search-active .evt-head-search-toggler .fa-search, #evt-top-header .evt-head-search-toggler:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul#menu > li > a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul.nav-menu > li > a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul.menu > li > a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul#menu > li.current-menu-item > a, body.home.transparent-header:not(.small-header) nav#site-navigation ul.nav-menu > li.current-menu-item > a, body.home.transparent-header:not(.small-header) nav#site-navigation ul.menu > li.current-menu-item > a, #evt-portfolio #filters button.is-checked, #evt-team .evt-box-item-wrap .evt-box-caption .evt-designation,
        .evt-mbl-menu a:hover, 
        .evt-mbl-menu li.current-menu-item a {
          color: <?php echo esc_attr( $business_click_link_text_color );?>;
        }
        .readmore:hover, a.readmore:hover {
            background: none;
        }

        a.read-more-btn,
        #content .nav-links a,
        .author-more,
        {
            border-color: <?php echo esc_attr( $business_click_primary_color_option ) ;?>;
        }

        /* css3 gradient */
        .home.fullpage-enabled .section.css-gradient .fp-tableCell,
        .css-gradient,
        .evt-banner-image.css-gradient {
            background: rgb(0,0,0);
            background: -moz-linear-gradient(40deg, rgba(0,0,0,1) 0%, <?php echo esc_attr( $business_click_primary_color_option ) ;?> 100%);
            background: -webkit-linear-gradient(40deg, rgba(0,0,0,1) 0%, <?php echo esc_attr( $business_click_primary_color_option ) ;?> 100%);
            background: linear-gradient(40deg, rgba(0,0,0,1) 0%, <?php echo esc_attr( $business_click_primary_color_option ) ;?> 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="<?php echo esc_attr( $business_click_primary_color_option ) ;?>",GradientType=1);
            background-size: cover;
            background-position: center center;
        }
        <?php
        } 
        if( !empty($business_click_site_identity_color_option) ){
        ?>
            /*Site identity / logo & tagline*/
            body:not(.transparent-header) .site-branding a,
            body:not(.transparent-header) .site-branding p,
            body.home.transparent-header.small-header .site-branding a,
            body.home.transparent-header.small-header .site-branding p {
              color: <?php echo esc_attr( $business_click_site_identity_color_option );?>;
            }
        <?php
        }

        /*top-header bar background color*/
        if( !empty($business_click_top_header_bar_background_color) ){?>
            #evt-top-header
            {
                background-color: <?php echo esc_attr($business_click_top_header_bar_background_color);?>;
            }

        <?php }

        /*container*/
        if( !empty($business_click_contaner_width) ){?>
            @media (min-width: 1200px) {
                .container {
                    max-width: <?php echo esc_attr($business_click_contaner_width);?>px;
                }
            }

        <?php }

        /*top-header bar text color*/
        if( !empty($business_click_top_header_bar_text_color) ){?>
            #evt-top-header, #evt-top-header .evt-head-search-toggler, #evt-top-header a
            {
                color: <?php echo esc_attr($business_click_top_header_bar_text_color);?>;
            }

        <?php }

        /*menu-background color*/
        if( !empty($business_click_menu_header_background_color) )
        {?>
            header.site-header
            {
                background-color: <?php echo esc_attr($business_click_menu_header_background_color);?>;
            }

        <?php }
            
         /*menu-text color*/   
        if( !empty($business_click_header_menu_text_color) )
        {?>
            nav#site-navigation ul a,
            body.logo-left-nav-left nav#site-navigation ul.menu > li > a
            {
                color: <?php echo esc_attr($business_click_header_menu_text_color);?>;
            }

            body.logo-left-nav-left nav#site-navigation ul.menu > li > a:hover {
                color: <?php echo esc_attr($business_click_header_menu_text_color);?>;
            }

        <?php }

        /*menu-text color for transparent*/   
        if( !empty($business_click_menu_text_transparent_color) )
        {?>
            body.home.transparent-header:not(.small-header) nav#site-navigation ul.nav-menu > li > a
            {
                color: <?php echo esc_attr($business_click_menu_text_transparent_color);?>;
            }


            body.transparent-header.logo-left-nav-left nav#site-navigation ul.menu > li > a {
                color: <?php echo esc_attr($business_click_menu_text_transparent_color);?> !important;
            }

        <?php }

        /*button background color*/   
        if( !empty($business_click_button_background_hover_color) )
        {?>
            .widget_search form .search-submit:before, .evt-head-search form .search-submit:before, .pagination .nav-links a:before, .wp-pagenavi a:before, .woocommerce nav.woocommerce-pagination a:before, .pagination .nav-links span:before, .wp-pagenavi span:before, .woocommerce nav.woocommerce-pagination span:before, .btn:before, .read-more:before, .wpcf7-form .wpcf7-submit:before, .woocommerce #respond input#submit:before, .woocommerce div.product form.cart .button:before, .woocommerce #respond input#submit.alt:before, .woocommerce a.button:before, .woocommerce button.button:before, .woocommerce input.button:before, .woocommerce a.button.alt:before, .woocommerce button.button.alt:before, .woocommerce input.button.alt:before, button:before, input[type="button"]:before, input[type="reset"]:before, input[type="submit"]:before, .widget_search form .search-submit:hover, .evt-head-search form .search-submit:hover, input[type="submit"]:hover
            {
                background-color: <?php echo esc_attr($business_click_button_background_hover_color);?>;
            }

        <?php }

        /*button-text color*/   
        if( !empty($business_click_button_text_color) )
        {?>
            .widget_search form .search-submit, .evt-head-search form .search-submit, .pagination .nav-links a, .wp-pagenavi a, .woocommerce nav.woocommerce-pagination a, .pagination .nav-links span, .wp-pagenavi span, .woocommerce nav.woocommerce-pagination span, a.btn, .btn, .wpcf7-form .wpcf7-submit, .woocommerce #respond input#submit, .woocommerce div.product form.cart .button, .woocommerce #respond input#submit.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, button, input[type="button"], input[type="reset"], input[type="submit"], body.home.fullpage-enabled ul#fp-menu li a span.fp-menu-text, .read-more 
            {
                color: <?php echo esc_attr($business_click_button_text_color);?>;
            }

        <?php }

        /*h1-h6 color*/   
        if( !empty($business_click_heading) )
        {?>
            .widget-title, .widgettitle, .page-title, .entry-title, .widget-title a, .widgettitle a, .page-title a, .entry-title a
            {
                color: <?php echo esc_attr($business_click_h1_h6);?>;
            }

        <?php }

        /*Section heading buttom border*/   
        if( (1 == $business_click_customizer_all_values['business-click-enable-section-header-bottom'] && !empty($business_click_section_heading_bottom_border) ) )
        {?>
            .widget-title:before, .widgettitle:before, .page-title:before, .entry-title:before
            {
                background-color: <?php echo esc_attr($business_click_section_heading_bottom_border);?> !important;
            }

            <?php } else
            { ?>
            .widget-title, .widgettitle, .page-title, .entry-title {
                padding-bottom: 0;
            }
            .widget-title:before, .widgettitle:before, .page-title:before, .entry-title:before
            {
                display: none;
                padding-bottom: 0;
            }
            <?php } ?>

        <?php 

        /*footer background*/
        if( !empty($business_click_footer_background) )
        {?>
            .site-footer
            {
                background-color: <?php echo esc_attr($business_click_footer_background);?>;
            }

        <?php }

        /*footer text color*/
        if( !empty($business_click_footer_text_color) )
        {?>
            .site-info
            {
                color: <?php echo esc_attr($business_click_footer_text_color);?>;
            }

        <?php }

        /*footer link hover color*/
        if( !empty($business_click_footer_link_color) )
        {?>
            .site-footer a,.site-info a
            {
                color: <?php echo esc_attr($business_click_footer_link_color);?>;
            }

        <?php }

        /*Slider overlay*/
        if( isset($business_click_slider_overlay))
        {?>
            #evt-banner .evt-banner-slider .evt-overlay:after
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_slider_overlay);?>);
            }

        <?php }

        /*Slider overlay hover */
        if( isset($business_click_slider_hover_overlay))
        {?>
            #evt-banner .evt-banner-slider:hover .evt-overlay:after
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_slider_hover_overlay);?>);
            }

        <?php }

        /*portfolio overlay hover */
        if( isset($business_click_portfolio_overlay))
        {
        ?>
            #evt-portfolio .evt-img-overlay
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_portfolio_overlay);?>);
            }

        <?php 
        }//endif

        /*portfolio overlay hover */
        if( isset($business_click_partner_overlay))
        {
        ?>
            #evt-partner .evt-img-overlay
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_partner_overlay);?>);
            }

        <?php 
        }//endif

        /*call to action overlay hover */
        if( isset($business_click_call_to_action_overlay))
        {?>
            #evt-call-to-action .evt-img-overlay
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_call_to_action_overlay);?>);
            }

        <?php }

        /*testimonial overlay hover */
        if( isset($business_click_testimonial_overlay))
        {?>
            #evt-testimonials .evt-img-overlay
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_testimonial_overlay);?>);
            }

        <?php }

         /*blog overlay hover */
        if( isset($business_click_blog_overlay_transparency))
        {
        ?>
            #evt-blog .evt-img-overlay
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_blog_overlay_transparency);?>);
            }

        <?php 
        }//endif

        /*feature overlay hover */
        if( isset($business_click_feature_overlay))
        {
        ?>
            #evt-featured .evt-img-overlay
            {
                background-color: rgba(0, 0, 0, <?php echo esc_attr($business_click_feature_overlay);?>);
            }

        <?php 
        }//endif

        /*header extra-button */
        if(empty($business_click_customizer_all_values['business-click-text-extra-button-text']) )
        {?>
            #site-navigation {
                padding-right: 0 !important;
            }

        <?php } 

        /*feature section box bg color*/
        if( !empty($business_click_feature_box_bg_color) ){ ?>
            #evt-featured .evt-featured-item-wrap .evt-featured-item
            {
               background-color :<?php echo esc_url($business_click_feature_box_bg_color);?>
            }
        <?php }


        /*feature section box text color*/
        if( !empty($business_click_feature_box_text_color) ){ ?>
            #evt-featured .evt-featured-item-wrap .evt-featured-item, #evt-featured .evt-featured-item-wrap .evt-featured-item a
            {
               color :<?php echo esc_url($business_click_feature_box_text_color);?>
            }
        <?php }

        /* remove bottom padding */
        if(1 == $business_click_customizer_all_values['business-click-feature-remove-bottom-padding'] )
        {
        ?>
            #evt-featured .evt-img-overlay {
                padding-bottom: 0;
            }
        <?php 
        }//endif 

        /*header extra-button */
        if(isset($business_click_customizer_all_values['business-click-text-extra-button-text']) )
        {
        ?>
            #site-navigation {
                /*padding-right: 0 !important;*/
            }

        <?php 
        }//endif

        /* loading */
        if(isset($business_click_customizer_all_values['business-click-loading-background-color']) )
        {
        ?>
            #evt-preloader {
                background-color: <?php echo esc_url($business_click_loading_background_color);?>;
            }

        <?php 
        }//endif 

        /* loading */
        if(isset($business_click_customizer_all_values['business-click-loading-color']) )
        {
        ?>
            #evt-preloader #status i, #evt-preloader #status .evt-preloader-close {
                color: <?php echo esc_url($business_click_loading_color);?>;
            }

        <?php 
        }//endif 

        /* loading */
        if(1 == $business_click_customizer_all_values['business-click-loading-always-show'] )
        {
        ?>
            #evt-preloader {
                display: block !important;
            }
            #evt-preloader.d-none {
                display: none !important;
            }

        <?php 
        }//endif 

        /* about */
        if('image-and-text' == $business_click_customizer_all_values['business-click-about-us-layout'] )
        {
        ?>
        @media (min-width: 768px) {
            .evt-why-us-text {
                order: 1;
            }
        }

        <?php 
        }//endif 


        /* MENU */
        
        //font-size
        if( isset($business_click_menu_font_size) ){
        ?>
            nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a
              {
                font-size: <?php echo esc_attr($business_click_menu_font_size )?>px;
              }

        <?php 
        }//endif 

        //line height
        if( isset($business_click_menu_font_Line_height) ){
        ?>
            nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a
              {
                line-height: <?php echo esc_attr($business_click_menu_font_Line_height )?>px;
              }

        <?php 
        }//endif 

        //latter spacing
        if( isset($business_click_menu_font_letter_spacing) ){
        ?>
            nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a
              {
                letter-spacing: <?php echo esc_attr($business_click_menu_font_letter_spacing )?>px;
              }

        <?php 
        }//endif 

        //font wieght
        if( isset($business_click_menu_font_wieght) ){
        ?>
            nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a
              {
                font-weight: <?php echo esc_attr($business_click_menu_font_wieght )?>;
              }

        <?php 
        }//endif 

        //font-style
        if( 1 == $business_click_menu_font_enable_italic ){
        ?>
            nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a
              {
                font-style: italic;
              }

        <?php 
        }//endif 


         //font-style
        if( 1 == $business_click_menu_font_enable_uppercase ){
        ?>
            nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a
              {
                text-transform: uppercase;
              }

        <?php 
        }//endif

        /* End MENU */


        /*  ===== HEADING start ===== */
        //font-size
        if( isset($business_click_header_font_size) ){
        ?>
            .widget-title, .widgettitle, .woocommerce div.product .product_title, .page-title, body .entry-title
              {
                font-size: <?php echo esc_attr($business_click_header_font_size )?>px;
              }

        <?php 
        }//endif 

        //line height
        if( isset($business_click_header_font_Line_height) ){
        ?>
            .widget-title, .widgettitle, .woocommerce div.product .product_title, .page-title, body .entry-title
              {
                line-height: <?php echo esc_attr($business_click_header_font_Line_height )?>px;
              }

        <?php 
        }//endif 

        //latter spacing
        if( isset($business_click_header_font_letter_spacing) ){
        ?>
            .widget-title, .widgettitle, .woocommerce div.product .product_title, .page-title, body .entry-title
              {
                letter-spacing: <?php echo esc_attr($business_click_header_font_letter_spacing )?>px;
              }

        <?php 
        }//endif 

        //font wieght
        if( isset($business_click_header_font_wieght) ){
        ?>
            .widget-title, .widgettitle, .woocommerce div.product .product_title, .page-title, body .entry-title
              {
                font-weight: <?php echo esc_attr($business_click_header_font_wieght )?>;
              }

        <?php 
        }//endif 

        //font-style-italic
        if( 1 == $business_click_header_font_enable_italic){
        ?>
            .widget-title, .widgettitle, .woocommerce div.product .product_title, .page-title, body .entry-title
              {
                font-style: italic;
              }

        <?php 
        }//endif 


        //text-transform
        if( 1 == $business_click_header_font_enable_uppercase ){
        ?>
            .widget-title, .widgettitle, .woocommerce div.product .product_title, .page-title, body .entry-title
              {
                text-transform: uppercase;
              }

        <?php 
        }//endif


        // H1 Font Size
        if( isset($business_click_h1_size) ){
        ?>
            h1,.h1,.h1 a
              {
                font-size: <?php echo esc_attr($business_click_h1_size )?>px;
              }

        <?php 
        }//endif 

        // H2 Font Size
        if( isset($business_click_h1_size) ){
        ?>
            h2,.h2,.h2 a
              {
                font-size: <?php echo esc_attr($business_click_h2_size )?>px;
              }

        <?php 
        }//endif 


        // H3 Font Size
        if( isset($business_click_h1_size) ){
        ?>
            h3,.h3,.h3 a
              {
                font-size: <?php echo esc_attr($business_click_h2_size )?>px;
              }

        <?php 
        }//endif 
        /* ====== End Header ======= */


         /*  ===== Body start ===== */
        //font-size
        if( isset($business_click_body_font_size) ){
        ?>
            body, html
              {
                font-size: <?php echo esc_attr($business_click_body_font_size )?>px;
              }

        <?php 
        }//endif 

        //line height
        if( isset($business_click_body_font_Line_height) ){
        ?>
            body, html
              {
                line-height: <?php echo esc_attr($business_click_body_font_Line_height )?>px;
              }

        <?php 
        }//endif 

        //latter spacing
        if( isset($business_click_body_font_letter_spacing) ){
        ?>
            body, html
              {
                letter-spacing: <?php echo esc_attr($business_click_body_font_letter_spacing )?>px;
              }

        <?php 
        }//endif 

        //font wieght
        if( isset($business_click_body_font_wieght) ){
        ?>
            body, html
              {
                font-weight: <?php echo esc_attr($business_click_body_font_wieght )?>;
              }

        <?php 
        }//endif 

        //font-style-italic
        if( 1 == $business_click_body_font_enable_italic){
        ?>
            body, html
              {
                font-style: italic;
              }

        <?php 
        }//endif 


        //text-transform
        if( 1 == $business_click_body_font_enable_uppercase ){
        ?>
            body, html
              {
                text-transform: uppercase;
              }

        <?php 
        }//endif

        //Logo Height
        if( !empty($business_click_customizer_all_values['business-click-logo-height'] ) ){
        ?>
            .site-branding img.custom-logo {
                height: <?php echo absint($business_click_customizer_all_values['business-click-logo-height'])?>px;
                width: auto;
            }

        <?php 
        }//endif

        //Logo width
        if( !empty($business_click_customizer_all_values['business-click-logo-width'] ) ){
        ?>
            body.logo-left .evt-logo-manage, body.logo-right .evt-logo-manage {
                width: <?php echo absint($business_click_customizer_all_values['business-click-logo-width'])?>px;
            }
            body.logo-left .evt-menu-toggler-manage, body.logo-right .evt-menu-toggler-manage {
                width: calc(100% - <?php echo absint($business_click_customizer_all_values['business-click-logo-width'])?>px);
            }

        <?php 
        }//endif

        //blog enable border
        if( 0 == ($business_click_customizer_all_values['business-click-blog-enable-border'] ) ){
        ?>
            #evt-blog .evt-blog-slider .evt-box-caption {
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 0;
            border: 0;
        }

        <?php 
        }//endif

        //Border
        if( 0 == ($business_click_customizer_all_values['business-click-blog-enable-border'] ) ){
        ?>
            #evt-blog .evt-blog-slider .evt-box-caption {
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 0;
            border: 0;
        }

        <?php 
        }//endif

        //White Logo
        if( 1 == ($business_click_customizer_all_values['business-click-enable-white-logo'] ) ){
        ?>
            
            header.site-header .site-branding img.custom-logo {
                filter: brightness(0%);
            }
            body.home.transparent-header:not(.small-header) header.site-header .site-branding img.custom-logo {
                filter: brightness(100%);   
            }

        <?php 
        }//endif

        //Caption Transparency
        if( $business_click_customizer_all_values['business-click-slider-content-transparency'] != 0  ){
        ?>
            #evt-banner .evt-banner-image .evt-banner-caption {
                background-color: rgba(0,0,0,<?php echo esc_html($business_click_customizer_all_values['business-click-slider-content-transparency'])?>);
                padding: 20px;
            }

        <?php 
        }//endif
        else {
            ?>
            #evt-banner .evt-banner-image .evt-banner-caption {
                padding: 0;
            }
            <?php
        }

        //slider mobile menu
        if( !empty($business_click_customizer_all_values['business-click-slider-menu-mbl-height'] ) ){
        ?>
            .evt-banner-image {
                min-height: <?php echo esc_html($business_click_customizer_all_values['business-click-slider-menu-mbl-height'])?>px;
            }

        <?php 
        }//endif

        // if fullpage is enabled and full page nav item 1 is not empty
        if( 1 == $business_click_customizer_all_values['full-page-enable'] ) {
        ?>
            #evt-contact a {
                color: #ffffff;
            }
            body.fp-viewing-<?php echo $fp_menu_section1;?> #evt-scroll-top {
                display: none !important;
            }
        <?php
        }
        // end if

        // if fp menu enabled and nav text presents
        if( (1 == $business_click_customizer_all_values['full-page-enable']) && (1 == $business_click_customizer_all_values['full-page-enable-nav-menu']) ){
        ?>
            .fp-viewing-<?php echo $fp_menu_section1;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section2;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section3;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section4;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section5;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section6;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section7;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section8;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section9;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section10;?> #fp-menu,
            .fp-viewing-<?php echo $fp_menu_section11;?> #fp-menu {
                display: block !important;
            }
        <?php
        }//end if

        if( 1 == $business_click_customizer_all_values['full-page-enable'] ) {
        ?>
            @media (min-width: 768px) {
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section1;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section2;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section3;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section4;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section5;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section6;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section7;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section8;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section9;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section10;?> header.site-header#masthead,
                body.home.fullpage-enabled.fp-viewing-<?php echo $fp_menu_section11;?> header.site-header#masthead {
                    background-color: transparent;   
                }
            }
        <?php
        }

        /* ====== End Body ======= */

        ?>
       </style>
    <?php

    
    }
endif;
add_action( 'wp_head', 'business_click_inline_style' );

