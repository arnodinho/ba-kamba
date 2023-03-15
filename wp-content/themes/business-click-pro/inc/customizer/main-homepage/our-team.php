<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-our-team-enable'] 					= 1;
$business_click_customizer_defaults['business-click-our-team-title']					= '';
$business_click_customizer_defaults['business-click-our-team-sub-title']				= '';
$business_click_customizer_defaults['business-click-our-team-short-code']				= '';
$business_click_customizer_defaults['business-click-our-team-background-image']     	= '';

/*create section for our -team*/
$priotry_team_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-our-team-section']	= array(
	'title'							=> esc_html__('Our Team','business-click'),
	'description'       => sprintf( '%1$s <a class="team_plugin" href="https://wordpress.org/plugins/team-members/" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: Download ', 'business-click' ), esc_html__( 'Team Members', 'business-click' ), esc_html__( 'Plugin to get a Shortcode.', 'business-click' ) ),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> isset($priotry_team_section_customizer['business-click-priority-our-team-change']) ? $priotry_team_section_customizer['business-click-priority-our-team-change'] : 80,
); 

/*enable our team  section*/
$business_click_settings_controls['business-click-our-team-enable']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-our-team-enable']
	),
	'control' => array(
		'label'						=> esc_html__('Show Team Section','business-click'),
		'section'					=> 'business-click-our-team-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'active_callback'			=> ''
	)						
);

/*our team title*/
$business_click_settings_controls['business-click-our-team-title']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-our-team-title']
	),
	'control' => array(
		'label'						=> esc_html__('Section Title','business-click'),
		'section'					=> 'business-click-our-team-section',
		'type'						=> 'text',
		'priority'					=> 20,
		'active_callback'			=> ''
	)						
);

/*our team  sub-title*/
$business_click_settings_controls['business-click-our-team-sub-title']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-our-team-sub-title']
	),
	'control' => array(
		'label'						=> esc_html__('Section Sub Title','business-click'),
		'section'					=> 'business-click-our-team-section',
		'type'						=> 'text',
		'priority'					=> 20,
		'active_callback'			=> ''
	)						
);

/* shortcode*/
$business_click_settings_controls['business-click-our-team-short-code']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-our-team-short-code']
	),
	'control' => array(
		'label'						=> esc_html__('Shortcode','business-click'),
		'description'				=> esc_html__('Please add a plugin shortcode here','business-click'),
		'section'					=> 'business-click-our-team-section',
		'type'						=> 'text',
		'priority'					=> 30,
		'active_callback'			=> ''
	)						
);

/*Background image upload*/
$business_click_settings_controls['business-click-our-team-background-image'] = array(
    'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-our-team-background-image']
    ),
    'control' => array(
        'label'                     => esc_html__('Upload Background Image','business-click'),
        'section'                   => 'business-click-our-team-section',
        'type'                      => 'image',
        'priority'                  => 40,
        'active_callback'           => ''
    )
);
