<?php
/**
 * Demo configuration
 *
 * @package eCommerce_Gem
 */

$config = array(
	'static_page'    => 'home',
	'posts_page'     => 'blog',
	'menu_locations' => array(
		'menu-1'  => 'menu',
		'menu-2'  => 'social',
	),
	'ocdi'           => array(
		array(
			
			'import_file_name'             => esc_html__( 'Default Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer.dat',
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/pro/'),

		),
		array(
			'import_file_name'             => esc_html__( 'Ecommerce Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content1.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget1.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer1.dat',
			'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-ecommerce.png",
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/ecommerce/'),

		),

		// array(
		// 	'import_file_name'             => esc_html__( 'Theme Demo OnePage', 'business-click' ),
		// 	'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content2.xml',
		// 	'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget2.wie',
		// 	'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer2.dat',
		// 	'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-onepage.png"
		// ),

		array(
			'import_file_name'             => esc_html__( 'Onepage Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content2.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget2.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer2.dat',
			'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-onepage.png",
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/onepage/'),

		),

		// basic demo - for creating more demo
		/*array(
			'import_file_name'             => esc_html__( 'Basic Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content-basic.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget-basic.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer-basic.dat',
			'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-onepage.png"
		),*/

		// construction demo - for creating more demo
		array(
			'import_file_name'             => esc_html__( 'Construction Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content-construction.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget-construction.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer-construction.dat',
			'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-construction.png",
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/construction/'),

		),

		// construction demo - for creating more demo
		array(
			'import_file_name'             => esc_html__( 'Full Page Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content-full-click.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget-full-click.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer-full-click.dat',
			'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-fullpage.png",
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/fullpage/'),

		),

		// Buisness-kid demo - for creating more demo
		array(
			'import_file_name'             => esc_html__( 'Business Kid Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content-business-kid.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget-business-kid.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer-business-kid.dat',
			'import_preview_image_url'   => get_template_directory_uri()."/assets/img/screenshot-business-kid.png",
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/business-kid-pro/'),

		),

		// Charity demo - for creating more demo
		array(
			'import_file_name'             => esc_html__( 'Charity Demo', 'business-click' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/content-charity.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/widget-charity.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-content/customizer-charity.dat',
			'import_preview_image_url'   	=> get_template_directory_uri()."/assets/img/screenshot-charity.png",
			'import_notice'				    => sprintf( '%1$s <a  href="https://goo.gl/RZWLpt" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: Please Install ', 'business-click' ), esc_html__( 'Recommended Plugin', 'business-click' ), esc_html__( '', 'business-click' ) ),
			'preview_url'                   => esc_url('https://demo.evisionthemes.com/business-click/charity/'),
		),

		
	),
);

st_blog_Demo::init( apply_filters( 'st_blog_Demo_filter', $config ) );


