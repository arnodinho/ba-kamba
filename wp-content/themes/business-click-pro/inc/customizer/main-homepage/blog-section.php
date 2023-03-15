<?php

global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['business-click-blog-section-enable'] 					= 1;
$business_click_customizer_defaults['business-click-blog-section-title-text']				= esc_html__('Latest Blog','business-click');
$business_click_customizer_defaults['business-click-blog-sub-title-text']					= '';
$business_click_customizer_defaults['business-click-blog-select-number-post']				= 4;
$business_click_customizer_defaults['business-click-blog-excerpt-length']					= 30;
$business_click_customizer_defaults['business-click-blog-select-category']					= 1;
$business_click_customizer_defaults['business-click-blog-button-text']						= esc_html__('Read More','business-click');
$business_click_customizer_defaults['business-click-blog-background-image']     			= '';
$business_click_customizer_defaults['business-click-blog-overlay-transparency']				= 0;
$business_click_customizer_defaults['business-click-carousel']								= 1;
$business_click_customizer_defaults['business-click-blog-enable-title']						= 1;
$business_click_customizer_defaults['business-click-blog-enable-date']						= 1;
$business_click_customizer_defaults['business-click-blog-enable-author']					= 1;
$business_click_customizer_defaults['business-click-blog-enable-content']					= 1;
$business_click_customizer_defaults['business-click-blog-enable-image']						= 1;
$business_click_customizer_defaults['business-click-blog-enable-button']					= 1;
$business_click_customizer_defaults['business-click-blog-enable-arrow']						= 1;
$business_click_customizer_defaults['business-click-blog-enable-autoplay']					= 1;
$business_click_customizer_defaults['business-click-blog-enable-border']					= 0;
$business_click_customizer_defaults['business-click-blog-autoslide-time']					= 4;

/*create section blog*/
$priotry_blog_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-blog-section'] = array(
	'title'							=> esc_html__('Blog Section','business-click'),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> isset($priotry_blog_section_customizer['business-click-priority-blog-change']) ? $priotry_blog_section_customizer['business-click-priority-blog-change'] : 100,
);

/*enable blog section*/
$business_click_settings_controls['business-click-blog-section-enable']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-section-enable']
	),
	'control' => array(
		'label'						=> esc_html__('Show Blog Section','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'active_callback'			=> ''
	)
);

/*Blog section Title*/
$business_click_settings_controls['business-click-blog-section-title-text']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-section-title-text']
	),
	'control' => array(
		'label'						=> esc_html__('Section Title','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'text',
		'priority'					=> 20,
		'active_callback'			=> ''
	)
);

/*Blog section Title*/
$business_click_settings_controls['business-click-blog-sub-title-text']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-sub-title-text']
	),
	'control' => array(
		'label'						=> esc_html__('Section Sub Title','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'text',
		'priority'					=> 25,
		'active_callback'			=> ''
	)
);

/*Number  of post*/
$business_click_settings_controls['business-click-blog-select-number-post']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-select-number-post']
	),
	'control' => array(
		'label'						=> esc_html__('Number of Blog Post','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'select',
		'choices' => array(
			1						=> esc_html__('1','business-click'),
			2						=> esc_html__('2','business-click'),
			3						=> esc_html__('3','business-click'),
			4						=> esc_html__('4','business-click'),
			5						=> esc_html__('5','business-click'),
			6						=> esc_html__('6','business-click'),

		),
		'priority'					=> 30,
		'active_callback'			=> ''
	)
);

/*Excerpt Length*/
$business_click_settings_controls['business-click-blog-excerpt-length']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-excerpt-length']
	),
	'control' => array(
		'label'						=> esc_html__('Excerpt Length','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'number',
		'priority'					=> 40,
		'active_callback'			=> ''
	)
);

/*Select Category*/
$business_click_settings_controls['business-click-blog-select-category']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-select-category']
	),
	'control' => array(
		'label'						=> esc_html__('Select Category for Blog','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'category_dropdown',
		'priority'					=> 50,
		'active_callback'			=> ''
	)
);

/*Button Text*/
$business_click_settings_controls['business-click-blog-button-text']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-button-text']
	),
	'control' => array(
		'label'						=> esc_html__('Button Text','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'text',
		'priority'					=> 60,
		'active_callback'			=> ''
	)
);

/*Background image upload*/
$business_click_settings_controls['business-click-blog-background-image'] = array(
    'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-blog-background-image']
    ),
    'control' => array(
        'label'                     => esc_html__('Upload Background Image','business-click'),
        'section'                   => 'business-click-blog-section',
        'type'                      => 'image',
        'priority'                  => 63,
        'active_callback'           => ''
    )
);


/* overlay Transparency*/
$business_click_settings_controls['business-click-blog-overlay-transparency'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-overlay-transparency']
	),
	'control' => array(
		'label'						=> esc_html__('Background Overlay Transparency','business-click'),
		'section'					=> 'business-click-blog-section',
		'description'					=> esc_html__('From 0 to 1','business-click'),
		'type'						=> 'number',
		'input_attrs' => array('step'=> "0.01", 'min' => 0, 'max' => 1),
		'priority'					=> 65,
		'active_callback'			=> ''
	)
);

/*Blog carousel*/
$business_click_settings_controls['business-click-carousel']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-carousel']
	),
	'control' => array(
		'label'						=> esc_html__('Enable Blog Carousel','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 70,
		'active_callback'			=> ''
	)
);

/*Enable Title*/
$business_click_settings_controls['business-click-blog-enable-title']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-title']
	),
	'control' => array(
		'label'						=> esc_html__('Show Title','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 70,
		'active_callback'			=> ''
	)
);

/*Enable Date*/
$business_click_settings_controls['business-click-blog-enable-date']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-date']
	),
	'control' => array(
		'label'						=> esc_html__('Show Date','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 75,
		'active_callback'			=> ''
	)
);

/*Enable Author*/
$business_click_settings_controls['business-click-blog-enable-author']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-author']
	),
	'control' => array(
		'label'						=> esc_html__('Show Author','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 76,
		'active_callback'			=> ''
	)
);

/*Enable Content*/
$business_click_settings_controls['business-click-blog-enable-content']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-content']
	),
	'control' => array(
		'label'						=> esc_html__('Show Content','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 80,
		'active_callback'			=> ''
	)
);

/*Enable Image*/
$business_click_settings_controls['business-click-blog-enable-image']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-image']
	),
	'control' => array(
		'label'						=> esc_html__('Show Image','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 90,
		'active_callback'			=> ''
	)
);

/*Enable Arrow*/
$business_click_settings_controls['business-click-blog-enable-arrow']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-arrow']
	),
	'control' => array(
		'label'						=> esc_html__('Show Arrow','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 100,
		'active_callback'			=> ''
	)
);

/*Enable Autoplay*/
$business_click_settings_controls['business-click-blog-enable-autoplay']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-autoplay']
	),
	'control' => array(
		'label'						=> esc_html__('Show Autoplay','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 110,
		'active_callback'			=> ''
	)
);

/*Enable border*/
$business_click_settings_controls['business-click-blog-enable-border']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-enable-border']
	),
	'control' => array(
		'label'						=> esc_html__('Enable Border and Padding','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'checkbox',
		'priority'					=> 110,
		'active_callback'			=> ''
	)
);

/*Autoplay Slider Time*/
$business_click_settings_controls['business-click-blog-autoslide-time']  = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-blog-autoslide-time']
	),
	'control' => array(
		'label'						=> esc_html__('Autoplay Duration','business-click'),
		'description'		=> esc_html__('Time in sec','business-click'),
		'section'					=> 'business-click-blog-section',
		'type'						=> 'number',
		'priority'					=> 130,
		'active_callback'			=> ''
	)
);