<?php

global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*default value*/
$business_click_customizer_defaults['business-click-enable-about-us']   			= 1;
$business_click_customizer_defaults['business-click-excerpt-length']				= 30;
$business_click_customizer_defaults['business-click-about-us-select-page']			= 0;
$business_click_customizer_defaults['business-click-about-us-sub-title']			= '';
$business_click_customizer_defaults['business-click-align-title-with-text']   		= 0;
$business_click_customizer_defaults['business-click-about-us-button-text']			= esc_html__('Details','business-click');
$business_click_customizer_defaults['business-click-about-us-background-image']     = '';
$business_click_customizer_defaults['business-click-about-us-layout']				= 'text-and-image';
$business_click_customizer_defaults['business-click-about-us-vertical-alignment']	= 'align-items-center';
$business_click_customizer_defaults['business-click-about-us-enable-title']			= 1;
$business_click_customizer_defaults['business-click-about-us-enable-content']		= 1;
$business_click_customizer_defaults['business-click-about-us-enable-image']			= 1;
$business_click_customizer_defaults['business-click-about-us-enable-button']		= 1;

/*create section about us*/
$priotry_about_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-about-us-section'] = array(
	'title'				=> esc_html__(' About Us Section','business-click'),
	'panel'				=> 'business-click-main-page-options',
	'priority'			=> isset($priotry_about_section_customizer['business-click-priority-about-us-change']) ? $priotry_about_section_customizer['business-click-priority-about-us-change'] : 50,
);

/*enable about us*/
$business_click_settings_controls['business-click-enable-about-us']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-enable-about-us']
	),
	'control' => array(
		'label'				=> esc_html__('Show About Us Section','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)

);

/*Sub title*/
$business_click_settings_controls['business-click-about-us-sub-title']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-sub-title']
	),
	'control' => array(
		'label'				=> esc_html__('Sub Title','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'text',
		'priority'			=> 15,
		'active_callback'	=> ''
	)

);

/*align title with text*/
$business_click_settings_controls['business-click-align-title-with-text']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-align-title-with-text']
	),
	'control' => array(
		'label'				=> esc_html__('Align Title with Text','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 16,
		'active_callback'	=> ''
	)

);

/*excerpt length*/
$business_click_settings_controls['business-click-excerpt-length']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-excerpt-length']
	),
	'control' => array(
		'label'				=> esc_html__('Excerpt Length','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'number',
		'priority'			=> 20,
		'active_callback'	=> ''
	)

);


/*Select Page*/
$business_click_settings_controls['business-click-about-us-select-page']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-select-page']
	),
	'control' => array(
		'label'				=> esc_html__('Select page for about us','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'dropdown-pages',
		'priority'			=> 30,
		'active_callback'	=> ''
	)

);

/*button text*/
$business_click_settings_controls['business-click-about-us-button-text']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-button-text']
	),
	'control' => array(
		'label'				=> esc_html__('Button Text','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)

);

/*Background image upload*/
$business_click_settings_controls['business-click-about-us-background-image'] = array(
    'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-about-us-background-image']
    ),
    'control' => array(
        'label'                     => esc_html__('Upload Background Image','business-click'),
        'section'                   => 'business-click-about-us-section',
        'type'                      => 'image',
        'priority'                  => 42,
        'active_callback'           => ''
    )
);

/*Layout*/
$business_click_settings_controls['business-click-about-us-layout'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-about-us-layout'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Layout','business-click'),
		'section'					=> 'business-click-about-us-section',
		'type'						=> 'select',
		'choices' => array(
			'text-and-image'		=> esc_html__('Text and Image','business-click'),
			'image-and-text'	=> esc_html__('Image and Text','business-click'),				
		),
		'priority'					=> 45,
		'acitive_callback'			=> ''
	)		

);

/*Vertical Alignment*/
$business_click_settings_controls['business-click-about-us-vertical-alignment'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-about-us-vertical-alignment'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Vertical Alignment','business-click'),
		'section'					=> 'business-click-about-us-section',
		'type'						=> 'select',
		'choices' => array(
			'align-items-start'		=> esc_html__('Top','business-click'),
			'align-items-center'	=> esc_html__('Middle','business-click'),				
			'align-items-end'	=> esc_html__('Bottom','business-click'),
		),
		'priority'					=> 46,
		'acitive_callback'			=> ''
	)		

);

/*enable title*/
$business_click_settings_controls['business-click-about-us-enable-title']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-enable-title']
	),
	'control' => array(
		'label'				=> esc_html__('Show Title','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 50,
		'active_callback'	=> ''
	)

);

/*enable content*/
$business_click_settings_controls['business-click-about-us-enable-content']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-enable-content']
	),
	'control' => array(
		'label'				=> esc_html__('Show Content','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 60,
		'active_callback'	=> ''
	)

);

/*enable image*/
$business_click_settings_controls['business-click-about-us-enable-image']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-enable-image']
	),
	'control' => array(
		'label'				=> esc_html__('Show Image','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 70,
		'active_callback'	=> ''
	)

);

/*enable button*/
$business_click_settings_controls['business-click-about-us-enable-button']  =  array(
	'setting' => array(
		'default'			=> $business_click_customizer_defaults['business-click-about-us-enable-button']
	),
	'control' => array(
		'label'				=> esc_html__('Show Button','business-click'),
		'section'			=> 'business-click-about-us-section',
		'type'				=> 'checkbox',
		'priority'			=> 80,
		'active_callback'	=> ''
	)

);