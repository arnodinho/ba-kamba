<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['business-click-portfolio-enable']						= 1;
$business_click_customizer_defaults['business-click-portfolio-section-title']				= 'Portfolio';
$business_click_customizer_defaults['business-click-portfolio-section-sub-title']			= '';
$business_click_customizer_defaults['business-click-portfolio-select-from-category']		= 1;
$business_click_customizer_defaults['business-click-portfolio-background-image']			= '';
$business_click_customizer_defaults['business-click-portfolio-enable-category-title']		= 1;
$business_click_customizer_defaults['business-click-portfolio-overlay-transparent']		    = 0;
$business_click_customizer_defaults['business-click-portfolio-background-theme']			= esc_html__('light','business-click');
$business_click_customizer_defaults['business-click-portfolio-layout-options']		        = 'layout-1';
$business_click_customizer_defaults['business-click-portfolio-button-text']		        	= '';
$business_click_customizer_defaults['business-click-portfolio-button-url']		        	= '';

$business_click_customizer_defaults['business-click-portfolio-number-of-post']				= 1;


/*create a section for portfolio*/
$priotry_portfolio_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-portfolio-section'] = array(
	'title'				=> esc_html__('Portfolio Section','business-click'),
	'panel'				=> 'business-click-main-page-options',
	'priority'			=> isset($priotry_portfolio_section_customizer['business-click-priority-portfolio-change']) ? $priotry_portfolio_section_customizer['business-click-priority-portfolio-change'] : 60,
);

/*enable portfolio section*/
$business_click_settings_controls['business-click-portfolio-enable']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-enable']
	),
	'control' => array(
		'label'							=> esc_html__('Show Portfolio','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'checkbox',
		'priority'						=> 10,
		'acitive_callback'				=> ''
	)	
);

/*portfolio section Title*/
$business_click_settings_controls['business-click-portfolio-section-title']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-section-title']
	),
	'control' => array(
		'label'							=> esc_html__('Section Title','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'text',
		'priority'						=> 20,
		'acitive_callback'				=> ''
	)	
);

/*portfolio section sub-Title*/
$business_click_settings_controls['business-click-portfolio-section-sub-title']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-section-sub-title']
	),
	'control' => array(
		'label'							=> esc_html__('Section Sub Title','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'text',
		'priority'						=> 25,
		'acitive_callback'				=> ''
	)	
);

/*total number portfoliuo */
$business_click_settings_controls['business-click-portfolio-number-of-post'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-portfolio-number-of-post'] 
    ),
    'control' => array(
        'label'             => esc_html__('Number of Category','business-click'),
        'section'           => 'business-click-portfolio-section',
        'type'              => 'select',
        'choices' => array(
            1               => esc_html__('1','business-click'),
            2               => esc_html__('2','business-click'),
            3               => esc_html__('3','business-click'),
            4               => esc_html__('4','business-click'),
            5               => esc_html__('5','business-click'),
            6               => esc_html__('6','business-click'),
            7               => esc_html__('7','business-click'),
            8               => esc_html__('8','business-click'),
            9               => esc_html__('9','business-click'),
            10              => esc_html__('10','business-click'),

        ),
        'priority'          => 28,
        'acticve_callback'  => ''

    )       
);


/*select category one*/
$business_click_repeated_settings_controls['business-click-portfolio-select-from-category']  = array(
	'repeated'		=> 10,
	'portfolio-category-post-ids' => array(
		'setting'  => array(
			'default'						=> $business_click_customizer_defaults['business-click-portfolio-select-from-category']
		),
		'control' => array(
			'label'							=> esc_html__('Select Category ','business-click'),
			'section'						=> 'business-click-portfolio-section',
			'type'							=> 'category_dropdown',
			'priority'						=> 30,
			'acitive_callback'				=> ''
		)	
	)
);

/* Button text*/
$business_click_settings_controls['business-click-portfolio-button-text']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-button-text']
	),
	'control' => array(
		'label'							=> esc_html__('Button Text','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'text',
		'priority'						=> 40,
		'acitive_callback'				=> ''
	)	
);

/* Button url*/
$business_click_settings_controls['business-click-portfolio-button-url']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-button-url']
	),
	'control' => array(
		'label'							=> esc_html__('Button Url','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'url',
		'priority'						=> 50,
		'acitive_callback'				=> ''
	)	
);


/* background image upload*/
$business_click_settings_controls['business-click-portfolio-background-image']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-background-image']
	),
	'control' => array(
		'label'							=> esc_html__('Upload Background Image','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'image',
		'priority'						=> 70,
		'acitive_callback'				=> ''
	)	
);

/*Enable title*/
$business_click_settings_controls['business-click-portfolio-enable-category-title']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-enable-category-title']
	),
	'control' => array(
		'label'							=> esc_html__('Show Post Title','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'checkbox',
		'priority'						=> 80,
		'acitive_callback'				=> ''
	)	
);

/*overlay transparency*/
$business_click_settings_controls['business-click-portfolio-overlay-transparent']  = array(
	'setting'  => array(
		'default'						=> $business_click_customizer_defaults['business-click-portfolio-overlay-transparent']
	),
	'control' => array(
		'label'							=> esc_html__('Background Overlay Transparency','business-click'),
		'description'					=> esc_html__('From 0 to 1','business-click'),
		'section'						=> 'business-click-portfolio-section',
		'type'							=> 'number',
		'input_attrs' => array('step'=>'0.01', 'min'=>'0','max'=>'1'),
		'priority'						=> 100,
		'acitive_callback'				=> ''
	)	
);

/*background theme*/
$business_click_settings_controls['business-click-portfolio-background-theme'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-portfolio-background-theme'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select Background Theme','business-click'),
		'description'					=> esc_html__('Text color will be changed to white if Dark theme is choosed.','business-click'),
		'section'					=> 'business-click-portfolio-section',
		'type'						=> 'select',
		'choices' => array(
			'light'		=> esc_html__('Light','business-click'),
			'dark'		=> esc_html__('Dark','business-click'),				
		),
		'priority'					=> 110,
		'acitive_callback'			=> ''
	)		

);

/* Layout options */
$business_click_settings_controls['business-click-portfolio-layout-options'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-portfolio-layout-options'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Layout Options','business-click'),
		'section'					=> 'business-click-portfolio-section',
		'type'						=> 'select',
		'choices' => array(
			'layout-1'		=> esc_html__('Layout 1','business-click'),
			'layout-2'		=> esc_html__('Layout 2','business-click'),				
		),
		'priority'					=> 120,
		'acitive_callback'			=> ''
	)		

);

