<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['short-code2-enable']				= 1;
$business_click_customizer_defaults['short-code2-title']				= '';
$business_click_customizer_defaults['short-code2-sub-title']			= '';
$business_click_customizer_defaults['short-code2-short-code-value']		= '';
$business_click_customizer_defaults['short-code2-btn-text']				= 'View All';
$business_click_customizer_defaults['short-code2-btn-link']				= '#';
$business_click_customizer_defaults['short-code2-background-image']     = '';

/*create a section for short code*/
$priotry_short_code2_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['short-code2-section'] = array(
	'title'			=> esc_html__('Short Code Second','business-click'),
	'panel'			=> 'business-click-main-page-options',
	'priority'		=> isset($priotry_short_code2_section_customizer['business-click-priority-short-code2-change']) ? $priotry_short_code2_section_customizer['business-click-priority-short-code2-change'] : 140,
); 

/*enbale disable short code*/
$business_click_settings_controls['short-code2-enable'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code2-enable']
	),
	'control' => array(
		'label'				=> esc_html__('Show ShortCode Second','business-click'),
		'section'			=> 'short-code2-section',
		'type'				=> 'checkbox',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

/*Title*/
$business_click_settings_controls['short-code2-title'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code2-title']
	),
	'control' => array(
		'label'				=> esc_html__('Title Text','business-click'),
		'section'			=> 'short-code2-section',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

/*Sub-Title*/
$business_click_settings_controls['short-code2-sub-title'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code2-sub-title']
	),
	'control' => array(
		'label'				=> esc_html__('Sub-Title Text','business-click'),
		'section'			=> 'short-code2-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);

/*Short code value*/
$business_click_settings_controls['short-code2-short-code-value'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code2-short-code-value']
	),
	'control' => array(
		'label'				=> esc_html__('Short Code Value','business-click'),
		'section'			=> 'short-code2-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);


/*Button Text*/
$business_click_settings_controls['short-code2-btn-text'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code2-btn-text']
	),
	'control' => array(
		'label'				=> esc_html__('Button Text','business-click'),
		'section'			=> 'short-code2-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);

/*Button Link*/
$business_click_settings_controls['short-code2-btn-link'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code2-btn-link']
	),
	'control' => array(
		'label'				=> esc_html__('Button Link','business-click'),
		'section'			=> 'short-code2-section',
		'type'				=> 'text',
		'priority'			=> 50,
		'active_callback'	=> ''
	)
);

/*Background image upload*/
$business_click_settings_controls['short-code1-background-image'] = array(
    'setting' => array(
        'default'                   => $business_click_customizer_defaults['short-code1-background-image']
    ),
    'control' => array(
        'label'                     => esc_html__('Upload Background Image','business-click'),
        'section'                   => 'short-code2-section',
        'type'                      => 'image',
        'priority'                  => 60,
        'active_callback'           => ''
    )
);