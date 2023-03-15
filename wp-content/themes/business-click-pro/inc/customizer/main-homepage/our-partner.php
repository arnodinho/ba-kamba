<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_clcik_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-our-partner-enable'] 					= 1;
$business_click_customizer_defaults['business-click-our-partner-section-title']				= '';
$business_click_customizer_defaults['business-click-our-partner-section-sub-title']			= '';
$business_click_customizer_defaults['business-click-our-partner-select-page']				= 0;
$business_click_customizer_defaults['business-click-our-partner-background-image']			= '';
$business_click_customizer_defaults['business-click-our-partner-overlay-transparent']		= 0.8;

/*create section*/
$priotry_partner_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-our-partner-section']	= array(
	'title'								=> esc_html__('Brands Section','business-click'),
	'description'						=> esc_html__('Showcase your clients/brands logo','business-click'),
	'panel'								=> 'business-click-main-page-options',
	'priority'							=> isset($priotry_partner_section_customizer['business-click-priority-partner-change']) ? $priotry_partner_section_customizer['business-click-priority-partner-change'] : 110,
);

/*create enable section*/
$business_click_settings_controls['business-click-our-partner-enable'] = array(
	'setting' => array(
		'default'						=> $business_click_customizer_defaults['business-click-our-partner-enable'] 
	),
	'control' => array(
		'label'							=> esc_html__('Show Brands Section','business-click'),
		'section'						=> 'business-click-our-partner-section',
		'type'							=> 'checkbox',
		'priority'						=> 10,
		'acitive_callback'				=> ''
	)
);

/*create section title*/
$business_click_settings_controls['business-click-our-partner-section-title'] = array(
	'setting' => array(
		'default'						=> $business_click_customizer_defaults['business-click-our-partner-section-title'] 
	),
	'control' => array(
		'label'							=> esc_html__('Section Title','business-click'),
		'section'						=> 'business-click-our-partner-section',
		'type'							=> 'text',
		'priority'						=> 20,
		'acitive_callback'				=> ''
	)
);

/*create section sub-title*/
$business_click_settings_controls['business-click-our-partner-section-sub-title'] = array(
	'setting' => array(
		'default'						=> $business_click_customizer_defaults['business-click-our-partner-section-sub-title'] 
	),
	'control' => array(
		'label'							=> esc_html__('Section Sub Title','business-click'),
		'section'						=> 'business-click-our-partner-section',
		'type'							=> 'text',
		'priority'						=> 25,
		'acitive_callback'				=> ''
	)
);

/*select page*/
$business_click_settings_controls['business-click-our-partner-select-page'] = array(
	'setting' => array(
		'default'						=> $business_click_customizer_defaults['business-click-our-partner-select-page'] 
	),
	'control' => array(
		'label'							=> esc_html__('Select page for Brands','business-click'),
		'description'					=> esc_html__('Page should have a WordPress Image Gallery. Only Image will be retrived from that page.','business-click'),
		'section'						=> 'business-click-our-partner-section',
		'type'							=> 'dropdown-pages',
		'priority'						=> 30,
		'acitive_callback'				=> ''
	)
);

/*Background Image*/
$business_click_settings_controls['business-click-our-partner-background-image'] = array(
	'setting' => array(
		'default'						=> $business_click_customizer_defaults['business-click-our-partner-background-image'] 
	),
	'control' => array(
		'label'							=> esc_html__('Upload Background Image','business-click'),
		'section'						=> 'business-click-our-partner-section',
		'type'							=> 'image',
		'priority'						=> 40,
		'acitive_callback'				=> ''
	)
);


/*overlay transparency*/
$business_click_settings_controls['business-click-our-partner-overlay-transparent']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-our-partner-overlay-transparent']
	),
	'control' => array(
		'label'							=> esc_html__('Background Overlay Transparency','business-click'),
		'description'					=> esc_html__('From 0 to 1','business-click'),
		'section'						=> 'business-click-our-partner-section',
		'type'							=> 'number',
		'input_attrs' 					=> array('step'=>'0.01', 'min'=>'0','max'=>'1'),
		'priority'						=> 100,
		'acitive_callback'				=> ''
	)	
);