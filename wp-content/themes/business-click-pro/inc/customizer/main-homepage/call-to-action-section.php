<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-enable-call-to-action'] 					= 1;
$business_click_customizer_defaults['business-click-call-excerpt-length']						= 30;
$business_click_customizer_defaults['business-click-call-to-action-select-from-page']			= 0;
$business_click_customizer_defaults['business-click-button-text-primary']						= esc_html__('Learn more','business-click');

$business_click_customizer_defaults['business-click-button-primary-url']						= '';

$business_click_customizer_defaults['business-click-button-text-secondary']						= esc_html__('Buy Now','business-click');

$business_click_customizer_defaults['business-click-button-secondary-url']						= '';

$business_click_customizer_defaults['business-click-call-to-action-enable-title']				= 1;
$business_click_customizer_defaults['business-click-call-to-action-enable-image']				= 1;
$business_click_customizer_defaults['business-click-call-to-action-enable-primary-button']		= 1;
$business_click_customizer_defaults['business-click-call-to-action-enable-secondary-button']	= 1;
$business_click_customizer_defaults['business-click-call-to-action-overlay-transparent']		= 0;
$business_click_customizer_defaults['business-click-call-action-background-theme']				= esc_html__('light','business-click');
$business_click_customizer_defaults['business-click-call-to-action-layout-option']				= 'layout-1';

/*create section for call to action*/
$priotry_cta_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-call-to-action-portfolio'] = array(
	'title'							=> esc_html__('Call To Action','business-click'),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> isset($priotry_cta_section_customizer['business-click-priority-call-action-change']) ? $priotry_cta_section_customizer['business-click-priority-call-action-change'] : 70,
);

/*create enable section*/
$business_click_settings_controls['business-click-enable-call-to-action'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-enable-call-to-action'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Show Call To Action (CTA)','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'acitive_callback'			=> ''
	)		

);

/*Excerpt Length*/
$business_click_settings_controls['business-click-call-excerpt-length'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-excerpt-length'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Excerpt Length','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'number',
		'priority'					=> 20,
		'acitive_callback'			=> ''
	)		

);

/*page selection*/
$business_click_settings_controls['business-click-call-to-action-select-from-page'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-select-from-page'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select page for CTA','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'dropdown-pages',
		'priority'					=> 30,
		'acitive_callback'			=> ''
	)		

);

/*Button Text Primary*/
$business_click_settings_controls['business-click-button-text-primary'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-button-text-primary'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Primary Button Text','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'text',
		'priority'					=> 40,
		'acitive_callback'			=> ''
	)		

);

/*Button Text Primary url*/
$business_click_settings_controls['business-click-button-primary-url'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-button-primary-url'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Primary Button Url','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'text',
		'priority'					=> 50,
		'acitive_callback'			=> ''
	)		

);


/*Button Text Secondary*/
$business_click_settings_controls['business-click-button-text-secondary'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-button-text-secondary'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Secondary Button Text','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'text',
		'priority'					=> 60,
		'acitive_callback'			=> ''
	)		

);

/*Button Text secondary url*/
$business_click_settings_controls['business-click-button-secondary-url'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-button-secondary-url'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Secondary Button Url','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'text',
		'priority'					=> 70,
		'acitive_callback'			=> ''
	)		

);

/*Enable Title*/
$business_click_settings_controls['business-click-call-to-action-enable-title'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-enable-title'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Show Title','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'checkbox',
		'priority'					=> 80,
		'acitive_callback'			=> ''
	)		

);

/*Enable Image*/
$business_click_settings_controls['business-click-call-to-action-enable-image'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-enable-image'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Show Image','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'checkbox',
		'priority'					=> 90,
		'acitive_callback'			=> ''
	)		

);

/*Enable Button Primary*/
$business_click_settings_controls['business-click-call-to-action-enable-primary-button'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-enable-primary-button'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Show Primary Button','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'checkbox',
		'priority'					=> 100,
		'acitive_callback'			=> ''
	)		

);

/*Enable Button Secondary*/
$business_click_settings_controls['business-click-call-to-action-enable-secondary-button'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-enable-secondary-button'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Show Secondary Button','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'checkbox',
		'priority'					=> 110,
		'acitive_callback'			=> ''
	)		

);

/*Layout options*/
$business_click_settings_controls['business-click-call-to-action-layout-option'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-layout-option'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select Layout Options','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'select',
		'choices' => array(
			'layout-1'		=> esc_html__('Layout 1','business-click'),
			'layout-2'		=> esc_html__('Layout 2','business-click'),				
		),
		'priority'					=> 120,
		'acitive_callback'			=> ''
	)		

);


/*overlay transparent*/
$business_click_settings_controls['business-click-call-to-action-overlay-transparent'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-overlay-transparent'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select Overlay Transparency','business-click'),
		'description'					=> esc_html__('From 0 to 1','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'number',
		'input_attrs' => array('step'=> "0.01", 'min' => 0, 'max' => 1),
		'priority'					=> 130,
		'acitive_callback'			=> ''
	)		

);


/*background theme*/
$business_click_settings_controls['business-click-call-action-background-theme'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-action-background-theme'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select background theme','business-click'),
		'description'					=> esc_html__('Text color will be changed to white if Dark theme is choosed.','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'select',
		'choices' => array(
			'light'		=> esc_html__('Light','business-click'),
			'dark'		=> esc_html__('Dark','business-click'),				
		),
		'priority'					=> 140,
		'acitive_callback'			=> ''
	)		

);

