<?php
/**
 * business-click functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business-click
 */

require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'business_click_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_click_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on business-click, use a find and replace
		 * to change 'business-click' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'business-click', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'business-click' ),
			'menu-2' => esc_html__('Social',   'business-click'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'business_click_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/*image size*/
		add_image_size( 'slider-banner-image', 1600, 660, true );
		add_image_size( 'latebusiness-click-image', 500, 360, true );

		/*woocommerce support*/
		add_theme_support( 'woocommerce' );

		/* guternberg support */
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );

		/*automatic theme update*/
		if( is_admin() )
		{
			require( get_template_directory() . '/updater/theme-updater.php' );
		}
	}
endif;
add_action( 'after_setup_theme', 'business_click_setup' );


if ( is_admin() ) {
	// Load about.
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/class-about.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/about.php';

	// Load demo.
	require_once trailingslashit( get_template_directory() ) . 'inc/demo/class-demo.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/demo/demo.php';
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_click_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'business_click_content_width', 640 );
}
add_action( 'after_setup_theme', 'business_click_content_width', 0 );


// google fonts function
function business_click_google_fonts()
{
	global $business_click_customizer_all_values;
	$fonts_url  = '';
	$fonts 		= array();

	$business_click_font_family_site_identity           = $business_click_customizer_all_values['business-click-font-family-site-identity'];
    $business_click_font_family_menu_text               = $business_click_customizer_all_values['business-click-font-family-menu'];
    $business_click_font_family_heading                   = $business_click_customizer_all_values['business-click-font-family-heading'];
    $business_click_font_family_body_paragraph          = $business_click_customizer_all_values['business-click-font-family-body-p'];
    $business_click_font_family_button_text             = $business_click_customizer_all_values['business-click-font-family-button-text'];
    $business_click_font_family_footer_copyright_text   = $business_click_customizer_all_values['business-click-footer-copy-right-text'];
	$business_click_fonts 	= array();
	$business_click_fonts[] = $business_click_font_family_site_identity;
	$business_click_fonts[] = $business_click_font_family_heading;
	$business_click_fonts[] = $business_click_font_family_button_text;
	$business_click_fonts[] = $business_click_font_family_menu_text;

	$business_click_fonts_stylesheet = '//fonts.googleapis.com/css?family=';

	$i  = 0;
	  for ($i=0; $i < count( $business_click_fonts ); $i++) { 

	    if ( 'off' !== sprintf( _x( 'on', '%s font: on or off', 'business-click' ), $business_click_fonts[$i] ) ) {
			$fonts[] = $business_click_fonts[$i];
		}

	  }

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urldecode( implode( '|', $fonts ) ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function business_click_scripts() {
	global $business_click_customizer_all_values;
	$suffix = '';

	/*google font*/
	wp_enqueue_style( 'business-click-google-fonts',business_click_google_fonts() );
	// thirdparty style file
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap'.$suffix.'.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/all.min'.$suffix.'.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/vendor/slick/slick'.$suffix.'.css' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/frameworks/wow/css/animate'.$suffix.'.css' );

	//theme-style
	wp_enqueue_style( 'business-click-style', get_stylesheet_uri() );


	wp_enqueue_script( 'business-click-navigation', get_template_directory_uri() . '/assets/js/navigation'.$suffix.'.js', array(), '20151215', true );

	wp_enqueue_script( 'business-click-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix'.$suffix.'.js', array(), '20151215', true );
	

	// thirdparty assets
	wp_enqueue_script('easing-js', get_template_directory_uri() . '/assets/frameworks/jquery.easing/jquery.easing.js', array('jquery'), true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/vendor/slick/slick'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'jquery-holder', get_template_directory_uri() . '/assets/frameworks/holder/holder.js', array('jquery'), true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/frameworks/wow/js/wow'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/frameworks/isotope/isotope.pkgd'.$suffix.'.js', array('jquery'), true );

	if(is_front_page()) {
		// fullpage for homepage only - only if enabled
		if(1 == $business_click_customizer_all_values['full-page-enable']){
			wp_enqueue_style( 'fullpage-css', get_template_directory_uri() . '/assets/frameworks/fullpage/fullpage'.$suffix.'.css' );

			wp_enqueue_script( 'scrolloverflow', get_template_directory_uri() . '/assets/frameworks/fullpage/scrolloverflow'.$suffix.'.js', array('jquery'), true );
			wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/assets/frameworks/fullpage/fullpage'.$suffix.'.js', array('jquery'), true );
		}
	}

	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/custom/mobile-menu'.$suffix.'.js', array('jquery'), true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/custom/main'.$suffix.'.js', array('jquery'), true );

	wp_localize_script( 'main', 'customzier_values', $business_click_customizer_all_values);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'business_click_scripts', 99 );

/**
 * Customizer control styles and scripts.
 */
function evt_customizer_control_scripts()
{
    wp_enqueue_style('evt-customize-controls-style', get_template_directory_uri() . '/assets/css/customizer.css');

    wp_enqueue_script('evt-customize-controls-scripts', get_template_directory_uri() . '/assets/custom/admin-script.js');

}

add_action('customize_controls_enqueue_scripts', 'evt_customizer_control_scripts', 0);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if( !function_exists('busienss_click_primary_menu_mobile_callback') ) :
	/**
	 * Fallback menu to primary menu 
	 * 
	 * @since business-click 1.0.0
	 */

function busienss_click_primary_menu_mobile_callback() {
	?>
		<ul id="mobile-menu">
			<li><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php esc_html_e('Home','business-click');?></a></li>
			<li><a href="<?php echo esc_url( admin_url( '/nav-menus.php' ) );?>"><?php esc_html_e('Set Primary Menu','business-click');?></a></li>
		</ul>
	<?php
}
endif;



if ( !function_exists('business_click_social_menu') ) :
/**
	 * Fallback menu to primary menu 
	 * 
	 * @since business-click 1.0.1
	 */
	function business_click_social_menu()
	{ ?>
		<ul id="menu" class="d-none">
			<li><a href="wordpress.org" target="_tab"><?php echo esc_html_e('WordPress', 'business-click' );?></a></li>
		</ul>
		<?php
	}
endif;


/*breadcrum function*/

if ( ! function_exists( 'business_click_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function business_click_simple_breadcrumb() {

		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		breadcrumb_trail( $breadcrumb_args );

	}

endif;


/* woocommerce */

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}

function business_click_register_required_plugins() {
	
	$plugins = array(
				
		
		array(
			'name'     => esc_html__( 'One Click Demo Import', 'business-click' ),
			'slug'     => 'one-click-demo-import',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'MailChimp for WordPress', 'business-click' ),
			'slug'     => 'mailchimp-for-wp',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'Contact Form 7', 'business-click' ),
			'slug'     => 'contact-form-7',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'Team-Members', 'business-click' ),
			'slug'     => 'team-members',
			'required' => false,
		),
		array(
			'name'      => esc_html__( 'WooCommerce', 'business-click' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'     => esc_html__( 'Rise Blocks - A Complete Gutenberg Page builder', 'business-click' ),
			'slug'     => 'rise-blocks',
			'required' => false,
		),
	);

	tgmpa( $plugins );
}

add_action( 'tgmpa_register', 'business_click_register_required_plugins' );

// customize the catgory title author
function business_click_customizer_remove_defualt_cat_author($title)
{
    if( is_category() ) {

        $title = single_cat_title( '', false );

    }
    else if (is_author())
    {
    	$title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    else if (is_month()) {
    	$title = single_month_title('', false);
    }

    return $title;

}
add_filter( 'get_the_archive_title', 'business_click_customizer_remove_defualt_cat_author' );

/* slugify */
function business_click_slugify($text) {
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

/* fp menu */
function business_click_fp_menu_item($title) {
	// convert to slug
	$title_slug = business_click_slugify($title);
	?>
	<li data-menuanchor="<?php echo $title_slug;?>">
        <a href="#<?php echo $title_slug;?>">
            <span class="fp-menu-text"><?php echo esc_html($title);?></span>
            <span class="fp-menu-indicator"><span></span></span>
        </a>
    </li>
	<?php
}

/* holder svg */
function business_click_holder_img($aspect_ratio_width, $aspect_ratio_height) {
	?>
	<svg class="holder" width="<?php echo $aspect_ratio_width;?>" height="<?php echo $aspect_ratio_height;?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 <?php echo $aspect_ratio_width;?> <?php echo $aspect_ratio_height;?>" preserveAspectRatio="none"><defs><style type="text/css">#holder_166529af20f text { fill:#AAAAAA;font-weight:bold;font-family:Arial, Helvetica, Open Sans, sans-serif, monospace;font-size:67pt } </style></defs><g id="holder_166529af20f"><rect width="<?php echo $aspect_ratio_width;?>" height="<?php echo $aspect_ratio_height;?>" fill="#000000"></rect><g><text x="472.78125" y="313.5"></text></g></g></svg>
	<?php
}