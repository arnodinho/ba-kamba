<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defults*/
$business_click_customizer_defaults['full-page-enable'] 		 = 0;
$business_click_customizer_defaults['full-page-enable-nav-menu'] = 1;
$business_click_customizer_defaults['full-page-nav-item-1'] 	 = esc_html__('Section 1','business-click');
$business_click_customizer_defaults['full-page-nav-item-2'] 	 = esc_html__('Section 2','business-click');
$business_click_customizer_defaults['full-page-nav-item-3'] 	 = esc_html__('Section 3','business-click');
$business_click_customizer_defaults['full-page-nav-item-4'] 	 = esc_html__('Section 4','business-click');
$business_click_customizer_defaults['full-page-nav-item-5'] 	 = esc_html__('Section 5','business-click');
$business_click_customizer_defaults['full-page-nav-item-6'] 	 = esc_html__('Section 6','business-click');
$business_click_customizer_defaults['full-page-nav-item-7'] 	 = esc_html__('Section 7','business-click');
$business_click_customizer_defaults['full-page-nav-item-8'] 	 = esc_html__('Section 8','business-click');
$business_click_customizer_defaults['full-page-nav-item-9'] 	 = esc_html__('Section 9','business-click');
$business_click_customizer_defaults['full-page-nav-item-10'] 	 = esc_html__('Section 10','business-click');
$business_click_customizer_defaults['full-page-nav-item-11'] 	 = esc_html__('Section 11','business-click');

/*create a new section */
$business_click_sections['full-page-section'] = array(
	'title'		=> esc_html__('Full Page Options','business-click'),
	'priority'	=> 510,
	'panel'		=> 'business-click-theme-options'
);

// create enable full page
$business_click_settings_controls['full-page-enable'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-enable'],
	),
	'control' => array(
		'label' 			=> esc_html__('Enable Fullpage','business-click'),
		'description' 		=> esc_html__('Please choose static home page in Customizer - Homepage Settings','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

// create enable full page
$business_click_settings_controls['full-page-enable-nav-menu'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-enable-nav-menu'],
	),
	'control' => array(
		'label' 			=> esc_html__('Show Fullpage Nav Menu','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'checkbox',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

// create  nav menu section 2
$business_click_settings_controls['full-page-nav-item-1'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-1'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 1','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 25,
		'active_callback'	=> ''
	)
);


// create  nav menu section 2
$business_click_settings_controls['full-page-nav-item-2'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-2'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 2','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);

// create  nav menu section 3
$business_click_settings_controls['full-page-nav-item-3'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-3'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 3','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);

// create  nav menu section 4
$business_click_settings_controls['full-page-nav-item-4'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-4'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 4','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 50,
		'active_callback'	=> ''
	)
);

// create  nav menu section 5
$business_click_settings_controls['full-page-nav-item-5'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-5'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 5','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 60,
		'active_callback'	=> ''
	)
);

// create  nav menu section 6
$business_click_settings_controls['full-page-nav-item-6'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-6'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 6','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 70,
		'active_callback'	=> ''
	)
);

// create  nav menu section 7
$business_click_settings_controls['full-page-nav-item-7'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-7'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 7','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 80,
		'active_callback'	=> ''
	)
);

// create  nav menu section 8
$business_click_settings_controls['full-page-nav-item-8'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-8'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 1','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 90,
		'active_callback'	=> ''
	)
);

// create  nav menu section 9
$business_click_settings_controls['full-page-nav-item-9'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-9'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 1','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 100,
		'active_callback'	=> ''
	)
);

// create  nav menu section 10
$business_click_settings_controls['full-page-nav-item-10'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-10'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 10','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 110,
		'active_callback'	=> ''
	)
);

// create  nav menu section 11
$business_click_settings_controls['full-page-nav-item-11'] = array(
	'setting' => array(
		'default'      => $business_click_customizer_defaults['full-page-nav-item-11'],
	),
	'control' => array(
		'label' 			=> esc_html__('Nav Text 11','business-click'),
		'section'			=> 'full-page-section',
		'type'				=> 'text',
		'priority'			=> 120,
		'active_callback'	=> ''
	)
);

