<?php

if ( ! function_exists( 'business_click_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_set_global() {
    /*Getting saved values start*/
    $GLOBALS['business_click_customizer_all_values'] = business_click_get_all_options(1);
}
endif;
add_action( 'business_click_action_before_head', 'business_click_set_global', 0 );

if ( ! function_exists( 'business_click_doctype' ) ) :
/**
 * Doctype Declaration
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_doctype() {
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
<?php
}
endif;
add_action( 'business_click_action_before_head', 'business_click_doctype', 10 );

if ( ! function_exists( 'business_click_before_wp_head' ) ) :
/**
 * Before wp head codes
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_before_wp_head() {
    ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
}
endif;
add_action( 'business_click_action_before_wp_head', 'business_click_before_wp_head', 10 );

if( ! function_exists( 'business_click_default_layout' ) ) :
    /**
     * business-click default layout function
     *
     * @since  business-click 1.0.0
     *
     * @param int
     * @return string
     */
    function business_click_default_layout( $post_id = null ){

        global $business_click_customizer_all_values,$post;
        $business_click_default_layout = $business_click_customizer_all_values['business-click-default-layout'];
        if( is_home()){
            $post_id = get_option( 'page_for_posts' );
        }
        if( null == $post_id && isset ( $post->ID ) ){
            $post_id = $post->ID;
        }
        $business_click_default_layout_meta = get_post_meta( $post_id, 'business-click-default-layout', true );

        if( false != $business_click_default_layout_meta ) {
            $business_click_default_layout = $business_click_default_layout_meta;
        }
        return $business_click_default_layout;
    }
endif;

if ( ! function_exists( 'business_click_body_class' ) ) :
/**
 * add body class
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_body_class( $business_click_body_classes ) {
  global $business_click_customizer_all_values;

    $business_click_transparent_header = '';
    $business_click_has_feature_slider = '';
    $transparant_header = $business_click_customizer_all_values['business-click-enable-transparent-header'];
    if ( is_home() &&  is_front_page() ) {
    }
    else
    {
        if($transparant_header == 1 &&  ($business_click_customizer_all_values['business-click-enbale-slider'] == 1) && ($business_click_customizer_all_values['business-click-priority-slider-change'] == 30) ){
            $business_click_transparent_header = "transparent-header";
        }
        else{
            $business_click_transparent_header = "non-tarnsparent";
        }
    }
    if( 1 == $business_click_customizer_all_values['business-click-enbale-slider'] ){
        $business_click_has_feature_slider = 'has-featured-slider';
    }
    else{
        $business_click_has_feature_slider = 'no-featured-slider';
    }

    $business_click_animation_option       = $business_click_customizer_all_values['business-click-animation-option'];
    if( $business_click_animation_option   == 1 ){
        $business_click_animation_option   = "enable-scroll-animations";
    }
    else{
        $business_click_animation_option  = " ";
    }
    $business_click_fixed_header_menu      = $business_click_customizer_all_values['business-click-enable-hide-header-scroll-down'];
    if( $business_click_fixed_header_menu   == 1 ){
        $business_click_fixed_header_menu   = "hide-header-on-scroll-down";
    }
    else{
        $business_click_fixed_header_menu  = " ";
    }
    $business_click_logo_postition         = $business_click_customizer_all_values['business-click-logo'];
    $business_click_mbl_menu_layout        = $business_click_customizer_all_values['business-click-mob-menu-layout'];

    /*header  enable/disable check*/
    $business_click_header_enable          = $business_click_customizer_all_values['business-click-enable-header-section'];
    if($business_click_header_enable == 1){
        $business_click_header_enable = '';
    }
    else{
        $business_click_header_enable = 'no-header';
    }

    // for full page
    $full_page_enable = '';
    // for only static page
    if( !is_home() && is_front_page() ) {
        $full_page_enable = $business_click_customizer_all_values['full-page-enable'];
        if( $full_page_enable == 1  ){
            $full_page_enable = 'fullpage-enabled';
        }
        else
        {
            $full_page_enable = '';
        }
    }

    if(!is_front_page() || ( is_front_page())){
        $business_click_default_layout = business_click_default_layout();
        if( !empty( $business_click_default_layout ) ){
            if( 'left-sidebar' == $business_click_default_layout ){
                $business_click_body_classes[] = 'evt-left-sidebar'.' '. $business_click_transparent_header.' '. $business_click_logo_postition .' '.$business_click_mbl_menu_layout .' '.$business_click_animation_option . ' ' . $business_click_fixed_header_menu . ' ' . $business_click_has_feature_slider . ' ' . $full_page_enable . ' ' . $business_click_header_enable;
            }
            elseif( 'right-sidebar' == $business_click_default_layout ){
                $business_click_body_classes[] = 'evt-right-sidebar'.' '. $business_click_transparent_header.' '. $business_click_logo_postition .' '.$business_click_mbl_menu_layout .' '.$business_click_animation_option . ' ' . $business_click_fixed_header_menu. ' ' . $business_click_has_feature_slider . ' ' . $full_page_enable . ' ' . $business_click_header_enable;
            }
            elseif( 'both-sidebar' == $business_click_default_layout ){
                $business_click_body_classes[] = 'evt-both-sidebar' .' '. $business_click_transparent_header.' '. $business_click_logo_postition .' '.$business_click_mbl_menu_layout .' '.$business_click_animation_option  . ' ' . $business_click_fixed_header_menu. ' ' . $business_click_has_feature_slider . ' ' . $full_page_enable . ' ' . $business_click_header_enable;
            }
            elseif( 'no-sidebar' == $business_click_default_layout ){
                $business_click_body_classes[] = 'evt-no-sidebar'.' '. $business_click_transparent_header.' '. $business_click_logo_postition .' '.$business_click_mbl_menu_layout .' '.$business_click_animation_option  . ' ' . $business_click_fixed_header_menu. ' ' . $business_click_has_feature_slider . ' ' . $full_page_enable . ' ' . $business_click_header_enable;
            }
            else{
                $business_click_body_classes[] = 'evt-right-sidebar'.' '. $business_click_transparent_header.' '. $business_click_logo_postition .' '.$business_click_mbl_menu_layout .' '.$business_click_animation_option . ' ' . $business_click_fixed_header_menu. ' ' . $business_click_has_feature_slider . ' ' . $full_page_enable . ' ' . $business_click_header_enable;
            }
        }
        else{
            $business_click_body_classes[] = 'evt-right-sidebar'.' '. $business_click_transparent_header.' '. $business_click_logo_postition .' '.$business_click_mbl_menu_layout  .' '.$business_click_animation_option . ' ' . $business_click_fixed_header_menu. ' ' . $business_click_has_feature_slider . ' ' . $full_page_enable . ' ' . $business_click_header_enable;
        }
    }
    return $business_click_body_classes;

}
endif;
add_filter( 'body_class', 'business_click_body_class', 10, 1);

if ( ! function_exists( 'business_click_before_page_start' ) ) :
/**
 * intro loader
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_before_page_start() {
    global $business_click_customizer_all_values;
    /*intro loader*/
}
endif;
add_action( 'business_click_action_before', 'business_click_before_page_start', 10 );

if ( ! function_exists( 'business_click_page_start' ) ) :
/**
 * page start
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_page_start() {
?>
    <div id="page" class="site clearfix">
<?php
}
endif;
add_action( 'business_click_action_before', 'business_click_page_start', 15 );

if ( ! function_exists( 'business_click_skip_to_content' ) ) :
/**
 * Skip to content
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_click_skip_to_content() {
    ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-click' ); ?></a>
<?php
}
endif;
add_action( 'business_click_action_before_header', 'business_click_skip_to_content', 10 );

   if ( ! function_exists( 'business_click_navigation_page_start' ) ) :
   /**
    * Skip to content
    *
    * @since business-click 1.0.0
    *
    * @param null
    * @return null
    *
    */
   function business_click_navigation_page_start() {
       global $business_click_customizer_all_values;
       ?>
        <?php if (1 == $business_click_customizer_all_values['business-click-enable-loading-screen']): ?>
        <!-- preloader -->
        <div id="evt-preloader" style="">
            <div id="status" style="">
                <?php if (1 == $business_click_customizer_all_values['business-click-loading-dismissable']): ?>
                    <i class="fa fa-times evt-preloader-close"></i>
                <?php endif;?>

                <div class="text-center">
                <?php
                $loading_icon = $business_click_customizer_all_values['business-click-loading-icon'];

                // loading image gif
                if(isset($business_click_customizer_all_values['business-click-loading-image']))
                    $loading_image = $business_click_customizer_all_values['business-click-loading-image'];
                else
                    $loading_image = '';

                // loading image logo
                if(isset($business_click_customizer_all_values['business-click-loading-image-logo']))
                    $loading_image_logo = $business_click_customizer_all_values['business-click-loading-image-logo'];
                else
                    $loading_image_logo = '';

                /*get image url*/
                $loading_image_url = $business_click_customizer_all_values['business-click-loading-image'];

                /*convert url to id*/
                $loading_image_id  = attachment_url_to_postid($loading_image_url);

                /*get image alt*/
                $loading_image_alt = get_post_meta( $loading_image_id, '_wp_attachment_image_alt', true );

                if($loading_image == ''):
                    ?>
                    <i class="fa <?php echo $loading_icon;?> fa-spin"></i>
                    <?php
                else:
                    ?>
                    <img src="<?php echo $loading_image;?>" alt = "<?php echo esc_attr( $loading_image_alt ); ?>">
                    <?php
                endif;

                /*get_image_url*/
                $logo_image_url      = $business_click_customizer_all_values['business-click-loading-image-logo'];

                /*convert url to id*/
                $logo_image_id = attachment_url_to_postid($logo_image_url);

                /*get image alt*/
                $logo_img_alt   = get_post_meta( $logo_image_id, '_wp_attachment_image_alt', true);

                if($loading_image_logo != ''):
                    ?>
                    <br>
                    <img src="<?php echo $loading_image_logo;?>" class="mt-3" alt="<?php echo esc_attr($logo_img_alt ); ?>">
                    <?php
                endif;//end loading image logo
                ?>
                </div>
            </div>
        </div>
        <?php endif;?>

        <?php  if ( 1 == $business_click_customizer_all_values['business-click-enable-header-section'] ) { ?>
            <header id="masthead" class="site-header">
                <div class="evt-header-wrap">

                    <?php if (1 == $business_click_customizer_all_values['business-click-enbale-top-bar-header']) { ?>
                    <div id="evt-top-header" class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 evt-head-list-item-wrap">
                                    <!-- head list item -->
                                    <div id="evt-head-list-item">
                                        <?php
                                            global $business_click_customizer_all_values;
                                            $business_click_phone_number = esc_html($business_click_customizer_all_values['business-click-top-bar-phone']);
                                            $business_click_email_address = esc_html($business_click_customizer_all_values['bussiness-click-top-bar-email']);
                                            $business_click_location= esc_html($business_click_customizer_all_values['bussiness-click-top-bar-location']);
                                            $business_click_enable_phone = esc_html($business_click_customizer_all_values['business-click-top-bar-phone-enable']);
                                            $business_click_enable_email = esc_html($business_click_customizer_all_values['business-click-top-bar-email-enable']);
                                            $business_click_enable_location = esc_html($business_click_customizer_all_values['business-click-top-bar-location-enable']);
                                        ?>
                                        <ul>
                                            <?php if (!empty($business_click_phone_number) && (1 == $business_click_enable_phone)) { ?>
                                            <li><span><i class="fa fa-phone"></i><?php echo esc_html($business_click_phone_number);?></span></li>
                                            <?php } ?>
                                            <?php if (!empty($business_click_email_address) && (1 == $business_click_enable_email) ) { ?>
                                            <li><a href="mailto:<?php echo esc_html($business_click_email_address);?>"><i class="fa fa-envelope"></i><?php echo esc_html($business_click_email_address);?></a></li>
                                            <?php } ?>
                                            <?php if (!empty($business_click_location)  && (1 == $business_click_enable_location) ) { ?>
                                            <li><span><i class="fa fa-map-marker-alt"></i><?php echo esc_html($business_click_location);?></span></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <?php
                                    if( (!empty($business_click_phone_number) && (1 == $business_click_enable_phone)) || (!empty($business_click_email_address) && (1 == $business_click_enable_email) ) || (!empty($business_click_location)  && (1 == $business_click_enable_location) ) ){ ?>
                                    <!-- contact icon -->
                                    <a href="#!" class="head-list-toggle float-left d-lg-none"></a>
                                    <?php
                                    }
                                    ?>

                                    <div class="evt-social-icons-wrap">
                                        <div class="evt-head-search">
                                            <?php get_search_form();?>
                                        </div>
                                        <!-- search toggle icon -->
                                        <?php if (1 == $business_click_customizer_all_values['business-click-enable-search-button']) {?>
                                        <button class="evt-head-search-toggler float-right"><i class="fa fa-search"></i></button>
                                        <?php } ?>

                                        <!-- social icons -->
                                        <div id="evt-social-icons" class="float-right">
                                            <?php
                                                if (1 == $business_click_customizer_all_values['business-click-enable-social-menu']) {

                                                    wp_nav_menu( array(
                                                    'theme_location' => 'menu-2',
                                                    'menu_id'        => 'social-menu',
                                                    'fallback_cb'    => 'business_click_social_menu'
                                                    ) );
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php } ?>

                    <div class="evt-header-wrap-nav">
                        <div class="container">
                            <div class="evt-header-row row align-items-center justify-content-between">
                                <div class="evt-logo-manage">
                                    <div class="site-branding">
                                        <?php
                                        the_custom_logo();
                                        if ( is_front_page() && is_home() ) :
                                            ?>
                                            <h1 class="site-title">
                                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                    <?php bloginfo( 'name' ); ?>
                                                </a>
                                            </h1>
                                            <?php
                                        else :
                                            ?>
                                            <h1 class="site-title">
                                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                    <?php bloginfo( 'name' ); ?>
                                                </a>
                                            </h1>
                                            <?php
                                        endif;
                                        $evt_description = get_bloginfo( 'description', 'display' );
                                        if ( $evt_description || is_customize_preview() ) :
                                            ?>
                                            <p class="site-description"><?php echo $evt_description; /* WPCS: xss ok. */ ?></p>
                                        <?php endif; ?>
                                    </div><!-- .site-branding -->
                                </div><!-- site brand-->

                                <!-- left and right nav -->
                                 <!-- display this only if logo-center is not choosed  -->
                                <div class="text-right evt-logo-left-right-nav evt-menu-toggler-manage" style="display: none;">
                                    <!-- search toggle icon -->

                                    <?php if(1 == $business_click_customizer_all_values['business-click-enable-extra-button'] && !empty($business_click_customizer_all_values['business-click-text-extra-button-text']) ) { ?>
                                    <?php $extra_button_name = esc_html($business_click_customizer_all_values['business-click-text-extra-button-text']);
                                          $extra_button_url = esc_url($business_click_customizer_all_values['business-click-link-extra-button']);
                                     ?>
                                        <a href="<?php echo esc_url($extra_button_url) ?>" id="evt-buy-btn" class="btn btn-reverse- d-none d-sm-block float-right" target="_blank"><?php echo esc_html($extra_button_name) ?></a>
                                    <?php }?>

                                    <button class="menu-toggler" id="menu-icon">
                                        <span>ee</span>
                                        <span>rr</span>
                                        <span>tt</span>
                                        <span>yy</span>
                                    </button>

                                    <nav id="site-navigation" class="main-navigation">
                                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'business-click' ); ?></button>
                                        <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'primary-menu',
                                        ) );
                                        ?>

                                    </nav><!-- #site-navigation -->
                                </div><!-- site nav -->

                                <!-- contact -->
                                <?php
                                $business_click_phone_number        = esc_html($business_click_customizer_all_values['business-click-top-bar-phone']);
                                $business_click_email_address       = esc_html($business_click_customizer_all_values['bussiness-click-top-bar-email']);
                                $business_click_location            = esc_html($business_click_customizer_all_values['bussiness-click-top-bar-location']);

                                $business_click_phone_show          = esc_html($business_click_customizer_all_values['business-click-header-phone-enable']);
                                $business_click_email_show          = esc_html($business_click_customizer_all_values['business-click-header-email-enable']);
                                $business_click_location_show       = esc_html($business_click_customizer_all_values['business-click-header-location-enable']);

                                // text
                                $business_click_phone_name          = esc_html($business_click_customizer_all_values['business-click-contact-section-title-phone']);
                                $business_click_email_name          = esc_html($business_click_customizer_all_values['business-click-contact-section-title-email']);
                                $business_click_location_name       = esc_html($business_click_customizer_all_values['business-click-contact-section-title-location']);

                                if( !empty($business_click_phone_number) || !empty($business_click_email_address) || !empty($business_click_location) || ($business_click_phone_show ==1 ) || ($business_click_email_show ==1 ) || ($business_click_location_show ==1 ) ) {
                                ?>
                                <div class="contact-info">
                                    <ul>
                                        <?php if(!empty($business_click_phone_number) && ($business_click_phone_show ==1 ) ) { ?>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <strong><?php echo esc_html($business_click_phone_name);?></strong>
                                                <?php echo esc_html($business_click_phone_number);?>
                                            </li>
                                        <?php } ?>
                                        <?php if(!empty($business_click_email_address) && ($business_click_email_show ==1 ) ) { ?>
                                            <li>
                                                <i class="fa fa-envelope"></i>
                                                <strong><?php echo esc_html($business_click_email_name);?></strong>
                                                <a href="mailto:<?php echo esc_html($business_click_email_address);?>">
                                                    <?php echo esc_html($business_click_email_address);?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if(!empty($business_click_location) && ($business_click_location_show ==1 ) ) { ?>
                                            <li>
                                                <i class="fa fa-map-marker-alt"></i>
                                                <strong><?php echo esc_html($business_click_location_name);?></strong>
                                                <?php echo esc_html($business_click_location);?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>

                            </div>
                        </div>

                    </div>


                    <!-- nav -->
                    <!-- display this only if logo-center is choosed  -->
                    <div class="evt-logo-center-nav evt-menu-toggler-manage" style="display: none;">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <!-- search toggle icon -->
                                <button class="menu-toggler" id="menu-icon">
                                    <span>aa</span>
                                    <span>bb</span>
                                    <span>cc</span>
                                    <span>dd</span>
                                </button>

                                <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'business-click' ); ?></button>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                        'fallback_cb'    => 'busienss_click_primary_menu_mobile_callback'
                                    ) );
                                    ?>
                                </nav><!-- #site-navigation -->

                                <?php if(1 == $business_click_customizer_all_values['business-click-enable-extra-button'] && !empty($business_click_customizer_all_values['business-click-text-extra-button-text']) ) { ?>
                                <?php $extra_button_name = esc_html($business_click_customizer_all_values['business-click-text-extra-button-text']); ?>
                                    <a href="#!" id="evt-buy-btn" class="btn btn-reverse"><?php echo esc_html($extra_button_name) ?></a>
                                <?php }?>

                            </div>
                        </div>
                    </div><!-- site nav -->

                </div>
            </header><!-- #masthead -->
        <?php } ?>

    <?php
        $fp_menu_section1 = $business_click_customizer_all_values['full-page-nav-item-1'];
        $fp_menu_section2 = $business_click_customizer_all_values['full-page-nav-item-2'];
        $fp_menu_section3 = $business_click_customizer_all_values['full-page-nav-item-3'];
        $fp_menu_section4 = $business_click_customizer_all_values['full-page-nav-item-4'];
        $fp_menu_section5 = $business_click_customizer_all_values['full-page-nav-item-5'];
        $fp_menu_section6 = $business_click_customizer_all_values['full-page-nav-item-6'];
        $fp_menu_section7 = $business_click_customizer_all_values['full-page-nav-item-7'];
        $fp_menu_section8 = $business_click_customizer_all_values['full-page-nav-item-8'];
        $fp_menu_section9 = $business_click_customizer_all_values['full-page-nav-item-9'];
        $fp_menu_section10 = $business_click_customizer_all_values['full-page-nav-item-10'];
        $fp_menu_section11 = $business_click_customizer_all_values['full-page-nav-item-11'];
    ?>

    <?php
    if(is_front_page()) {
        // check if full page and full page nav menu both are enabled
        if( 1 == $business_click_customizer_all_values['full-page-enable'] && 1 == $business_click_customizer_all_values['full-page-enable-nav-menu'] ){

            echo '<ul id="fp-menu" style="display: none;">';
                if(!empty($fp_menu_section1 )){
                    business_click_fp_menu_item($fp_menu_section1);
                }
                if(!empty($fp_menu_section2 )){
                    business_click_fp_menu_item($fp_menu_section2);
                }
                if(!empty($fp_menu_section3 )){
                    business_click_fp_menu_item($fp_menu_section3);
                }
                if(!empty($fp_menu_section4 )){
                    business_click_fp_menu_item($fp_menu_section4);
                }
                if(!empty($fp_menu_section5 )){
                    business_click_fp_menu_item($fp_menu_section5);
                }
                if(!empty($fp_menu_section6 )){
                    business_click_fp_menu_item($fp_menu_section6);
                }
                if(!empty($fp_menu_section7 )){
                    business_click_fp_menu_item($fp_menu_section7);
                }
                if(!empty($fp_menu_section8 )){
                    business_click_fp_menu_item($fp_menu_section8);
                }
                if(!empty($fp_menu_section9 )){
                    business_click_fp_menu_item($fp_menu_section9);
                }
                if(!empty($fp_menu_section10 )){
                    business_click_fp_menu_item($fp_menu_section10);
                }
                if(!empty($fp_menu_section11)){
                    business_click_fp_menu_item($fp_menu_section11);
                }
            echo '</ul>';
            // end if
        }
    }
    ?>

<div id="content" class="site-content">

<?php
}
endif;
add_action( 'business_click_action_nav_page_start', 'business_click_navigation_page_start', 10 );


if( ! function_exists( 'business_click_main_slider_setion' ) ) :
/**
 * Main slider
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function business_click_main_slider_setion(){
        if (  is_front_page() && !is_home() ) {
            do_action('business_click_action_main_slider');
        } else {
            /**
             * business_click_action_after_title hook
             * @since business-click 1.0.0
             *
             * @hooked null
             */
            do_action( 'business_click_action_after_title' );
        }
    }
endif;
add_action( 'business_click_action_on_header', 'business_click_main_slider_setion', 10 );


if( ! function_exists( 'business_click_add_breadcrumb' ) ) :

/**
 * Breadcrumb
 *
 * @since business-click 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function business_click_add_breadcrumb(){
        global $business_click_customizer_all_values;
        // Bail if Breadcrumb disabled
        $breadcrumb_enable_breadcrumb = $business_click_customizer_all_values['business-click-enable-breadcrumb' ];
        if ( 1 != $breadcrumb_enable_breadcrumb ) {
            return;
        }
        // Bail if Home Page
        if ( is_front_page() || is_home() ) {
            return;
        }
        echo '<div id="breadcrumb" class="wrapper wrap-breadcrumb"><div class="container">';
         business_click_simple_breadcrumb();
        echo '</div><!-- .container --></div><!-- #breadcrumb -->';
        return;
    }
endif;
add_action( 'business_click_action_after_title', 'business_click_add_breadcrumb', 10 );






