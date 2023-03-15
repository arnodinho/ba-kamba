<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*default value*/
$business_click_customizer_defaults['business-click-enable-header-section']             = 1;
$business_click_customizer_defaults['business-click-enable-extra-button'] 				= 1;
$business_click_customizer_defaults['business-click-mob-menu-layout']					= esc_html__('evt-mbl-shift-right','business-click');
$business_click_customizer_defaults['business-click-text-extra-button-text'] 			= esc_html__('Buy Now','business-click');
$business_click_customizer_defaults['business-click-logo']								= 'logo-left';
$business_click_customizer_defaults['business-click-link-extra-button']					= '#';
$business_click_customizer_defaults['business-click-enable-transparent-header'] 		= 1;
$business_click_customizer_defaults['business-click-enable-white-logo'] 				= 0;
$business_click_customizer_defaults['business-click-enable-hide-header-scroll-down'] 	= 1;

$business_click_customizer_defaults['business-click-header-phone-enable'] 				= 0;
$business_click_customizer_defaults['business-click-header-email-enable'] 				= 0;
$business_click_customizer_defaults['business-click-header-location-enable'] 			= 0;

$business_click_customizer_defaults['business-click-logo-height'] 						= '';
$business_click_customizer_defaults['business-click-logo-width'] 						= '270';

/*create a header section */
$business_click_sections['business-click-header-section'] = array(
	'title'		=> esc_html__('Header Section','business-click'),
	'panel'		=>'business-click-main-page-options',
	'priority'	=> 15
);

// Enable headre section
$business_click_settings_controls['business-click-enable-header-section']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-enable-header-section']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Header','business-click'),
		'section'			=> 'business-click-header-section',
		'type'				=> 'checkbox',
		'priority'			=> 3,
		'active_callback'	=>''

	)	

);

// logo height
$business_click_settings_controls['business-click-logo-height']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-logo-height']	
	),
	'control' => array(
		'label'				=> esc_html__('Logo Height','business-click'),
		'description'	  => esc_html__('Logo Image height in px.','business-click'),
		'section'			=> 'business-click-header-section',
		'type'				=> 'text',
		'priority'			=> 10,
		'active_callback'	=>''

	)	

);

// logo width
$business_click_settings_controls['business-click-logo-width']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-logo-width']	
	),
	'control' => array(
		'label'				=> esc_html__('Logo Width','business-click'),
		'description'	  => esc_html__('Logo Section width in px.','business-click'),
		'section'			=> 'business-click-header-section',
		'type'				=> 'text',
		'priority'			=> 10,
		'active_callback'	=>''

	)	

);

/*Mobile menu layout*/
$business_click_settings_controls['business-click-mob-menu-layout']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-mob-menu-layout']
	),
	'control' => array(
		'label'			  => esc_html__('Mobile Menu','business-click'),
		'section'		  => 'business-click-header-section',
		'description'	  => esc_html__('For small devices','business-click'),
		'type'			  => 'select',
		'choices' => array(
			'evt-mbl-shift-right'		=> esc_html__('Shift Right','business-click'),
			'evt-mbl-shift-left'	 	=> esc_html__('Shift Left','business-click'),	
			'evt-mbl-overlay-right'	 	=> esc_html__('Overlay Right','business-click'),
			'evt-mbl-overlay-left'		=> esc_html__('Overlay Left','business-click'),

		),
		'priority'		  => 5,
		'active_callback' => ''
	)		

);

/*enable option for extar button*/
$business_click_settings_controls['business-click-enable-extra-button']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-enable-extra-button']
	),
	'control' => array(
		'label'			  => esc_html__('Show Button','business-click'),
		'description'	  => esc_html__('Appears near navigation section','business-click'),
		'section'		  => 'business-click-header-section',	
		'type'			  => 'checkbox',
		'priority'		  => 10,
		'active_callback' => ''
	)		

);


/*button text*/
$business_click_settings_controls['business-click-text-extra-button-text']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-text-extra-button-text']
	),
	'control' => array(
		'label'			  => esc_html__('Button Text','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'text',
		'priority'		  => 10,
		'active_callback' => ''
	)		

);


/*button-link*/
$business_click_settings_controls['business-click-link-extra-button']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-link-extra-button']
	),
	'control' => array(
		'label'			  => esc_html__('Button Link','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'url',
		'priority'		  => 10,
		'active_callback' => ''
	)		

);

/*Header logo Alignment*/
$business_click_settings_controls['business-click-logo']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-logo']
	),
	'control' => array(
		'label'			  => esc_html__('Logo Alignment','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'select',
		'choices' => array(
			'logo-left'		 			=> esc_html__('Left','business-click'),
			'logo-center'	 			=> esc_html__('Center','business-click'),	
			'logo-right'	 			=> esc_html__('Right','business-click'),
			'logo-left-nav-left'	    => esc_html__('Logo Left Nav Left','business-click')

		),
		'priority'		  => 10,
		'active_callback' => ''
	)		

);

// Enable Phone
$business_click_settings_controls['business-click-header-phone-enable']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-header-phone-enable']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Phone Number','business-click'),
		'description'		=> esc_html__('Whatever kept in Top Header Bar','business-click'),
		'section'			=> 'business-click-header-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=>''

	)	

);

// Enable email
$business_click_settings_controls['business-click-header-email-enable']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-header-email-enable']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Email','business-click'),
		'description'		=> esc_html__('Whatever kept in Top Header Bar','business-click'),
		'section'			=> 'business-click-header-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=>''

	)	

);

// Enable location
$business_click_settings_controls['business-click-header-location-enable']  = array(
	'setting' => array(
		'default' 		=> $business_click_customizer_defaults['business-click-header-location-enable']	
	),
	'control' => array(
		'label'				=> esc_html__('Show Location','business-click'),
		'description'		=> esc_html__('Whatever kept in Top Header Bar','business-click'),
		'section'			=> 'business-click-header-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=>''

	)	

);

/*transparent-header*/
$business_click_settings_controls['business-click-enable-transparent-header']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-enable-transparent-header']
	),
	'control' => array(
		'label'			  => esc_html__('Enable Transparent Header','business-click'),
		'description'	  => esc_html__('Transparent Header works only when Feature Slider Section is enabled and its order is First in Section Priority.','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'checkbox',
		'priority'		  => 40,
		'active_callback' => ''
	)		
);

/* change while logo image to black for transparent header */
$business_click_settings_controls['business-click-enable-white-logo']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-enable-white-logo']
	),
	'control' => array(
		'label'			  => esc_html__('White Logo','business-click'),
		'description'	  => esc_html__('Fixes white logo issue by changing it to black.','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'checkbox',
		'priority'		  => 40,
		'active_callback' => ''
	)		
);


/*hide-header when scroll*/
$business_click_settings_controls['business-click-enable-hide-header-scroll-down']  =  array(
	'setting'  => array(
		'default'		=> $business_click_customizer_defaults['business-click-enable-hide-header-scroll-down']
	),
	'control' => array(
		'label'			  => esc_html__('Hide Header on Scroll Down','business-click'),
		'description'	  => esc_html__('If you enable this button, header section will hide when you scroll down. Otherwise it will remain fixed.','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'checkbox',
		'priority'		  => 50,
		'active_callback' => ''
	)		

);