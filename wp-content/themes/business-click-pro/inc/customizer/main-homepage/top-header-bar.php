<?php

global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

// defaults value
$business_click_customizer_defaults['business-click-enbale-top-bar-header']   	= 1;
$business_click_customizer_defaults['business-click-top-bar-phone'] 			= '';
$business_click_customizer_defaults['bussiness-click-top-bar-email'] 			= '';
$business_click_customizer_defaults['bussiness-click-top-bar-location'] 		= '';
$business_click_customizer_defaults['bussiness-click-top-bar-social-menu'] 		= '';
$business_click_customizer_defaults['business-click-enable-social-menu']    	= 1;
$business_click_customizer_defaults['business-click-enable-search-button']  	= 1;

$business_click_customizer_defaults['business-click-top-bar-phone-enable'] 		= 0;
$business_click_customizer_defaults['business-click-top-bar-email-enable'] 	    = 0;
$business_click_customizer_defaults['business-click-top-bar-location-enable'] 	= 0;
$business_click_customizer_defaults['business-click-contact-section-title-phone']				= 'Phone';
$business_click_customizer_defaults['business-click-contact-section-title-email']				= 'Email';
$business_click_customizer_defaults['business-click-contact-section-title-location']			= 'Address';


//create a section for top header bar
$business_click_sections['business-click-top-header-bar-sections'] = array(
	'title'				=> esc_html__('Top Header Bar','business-click'),
	'description'       => sprintf( '%1$s <a class="menu_locations" href="#"> %2$s </a> %3$s', esc_html__( 'Note: ', 'business-click' ), esc_html__( 'Click Here', 'business-click' ), esc_html__( 'to create Menu for Social icons.', 'business-click' ) ),
	'panel'				=>'business-click-main-page-options',
	'priority'			=> 10
); 


// cretae a enable top header
$business_click_settings_controls['business-click-enbale-top-bar-header']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-enbale-top-bar-header']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Top Header','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=>''

	)	

);

// create text field for phone  number
$business_click_settings_controls['business-click-top-bar-phone']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-top-bar-phone']	
	),
	'control' => array(
		'label'				=> esc_html__('Phone Number','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=>''

	)	

);

// create text field for email 
$business_click_settings_controls['bussiness-click-top-bar-email']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['bussiness-click-top-bar-email']	
	),
	'control' => array(
		'label'				=> esc_html__('Email','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback'	=>''

	)	

);

// create text field for location  
$business_click_settings_controls['bussiness-click-top-bar-location']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['bussiness-click-top-bar-location']	
	),
	'control' => array(
		'label'				=> esc_html__('Location','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=>''

	)	

);

/*phone title name */
$business_click_settings_controls['business-click-contact-section-title-phone'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-title-phone']
	),
	'control' => array(
		'label'						=> esc_html__('Phone Text','business-click'),
		'description'				=> esc_html__('Shows in Header and Contact Section','business-click'),
		'section'					=> 'business-click-top-header-bar-sections',
		'type'						=> 'text',
		'priority'					=> 45,
		'active_callback'			=> ''
	)

);

/*email title name */
$business_click_settings_controls['business-click-contact-section-title-email'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-title-email']
	),
	'control' => array(
		'label'						=> esc_html__('Email Text','business-click'),
		'description'				=> esc_html__('Shows in Header and Contact Section','business-click'),
		'section'					=> 'business-click-top-header-bar-sections',
		'type'						=> 'text',
		'priority'					=> 45,
		'active_callback'			=> ''
	)

);

/*location title name */
$business_click_settings_controls['business-click-contact-section-title-location'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-title-location']
	),
	'control' => array(
		'label'						=> esc_html__('Location Text','business-click'),
		'description'				=> esc_html__('Shows in Header and Contact Section','business-click'),
		'section'					=> 'business-click-top-header-bar-sections',
		'type'						=> 'text',
		'priority'					=> 45,
		'active_callback'			=> ''
	)

);


// Enable Phone
$business_click_settings_controls['business-click-top-bar-phone-enable']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-top-bar-phone-enable']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Phone Number','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 70,
		'active_callback'	=>''

	)	

);

// Enable email
$business_click_settings_controls['business-click-top-bar-email-enable']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-top-bar-email-enable']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Email','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 80,
		'active_callback'	=>''

	)	

);

// Enable location
$business_click_settings_controls['business-click-top-bar-location-enable']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-top-bar-location-enable']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Location','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 90,
		'active_callback'	=>''

	)	

);

// Enable social menu
$business_click_settings_controls['business-click-enable-social-menu']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-enable-social-menu']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Social Menu (Icons)','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 100,
		'active_callback'	=>''

	)	

);

// Enable  Search button
$business_click_settings_controls['business-click-enable-search-button']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-enable-search-button']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Search Icon','business-click'),
		'section'			=> 'business-click-top-header-bar-sections',
		'type'				=> 'checkbox',
		'priority'			=> 100,
		'active_callback'	=>''

	)	

);