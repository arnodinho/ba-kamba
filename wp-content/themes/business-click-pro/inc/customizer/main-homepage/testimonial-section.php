<?php

global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['business-click-testimonila-enable']				= 1;
$business_click_customizer_defaults['business-click-testimonial-section-title']			= esc_html__('Testimonial','business-click');
$business_click_customizer_defaults['business-click-testimonial-section-sub-title']		= '';
$business_click_customizer_defaults['business-click-number-of-testimonial']				= 2;
$business_click_customizer_defaults['business-click-testimonial-excerpt-length']		= 30;
$business_click_customizer_defaults['business-click-testimonial-select-form']			= 'form-post';
$business_click_customizer_defaults['business-click-testimonial-from-category']			= 1;
$business_click_customizer_defaults['business-click-testimonial-select-for-page']		= 0;
$business_click_customizer_defaults['business-click-testimonial-designation']			= esc_html__('C.E.O','business-click');
$business_click_customizer_defaults['business-click-testimonial-background-image']		= '';
$business_click_customizer_defaults['business-click-testimonila-box-aligment']			= esc_html__('justify-content-lg-start','business-click');
$business_click_customizer_defaults['business-click-testimonial-enable-title']			= 1;
$business_click_customizer_defaults['business-click-testimonial-enable-image']			= 1;
$business_click_customizer_defaults['business-click-testimonial-enable-arrow']			= 1;
$business_click_customizer_defaults['business-click-testimonial-enable-autoplay']		= 1;
$business_click_customizer_defaults['business-click-testimonial-time-auto-slide']		= 4;
$business_click_customizer_defaults['business-click-testimonial-overlay-transparency']	= 0.3;
$business_click_customizer_defaults['business-click-testimonial-background-theme']		= esc_html__('dark','business-click');

$business_click_customizer_defaults['business-click-testimonial-layout']				= 'layout-1';
$business_click_customizer_defaults['business-click-testimonial-enable-pager']			= 1;


/*create a section */
$priotry_testimonial_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-testimonial-section'] = array(
	'title'							=> esc_html__('Testimonial Section','business-click'),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> isset($priotry_testimonial_section_customizer['business-click-priority-testimonial-change']) ? $priotry_testimonial_section_customizer['business-click-priority-testimonial-change'] : 90,
);

/*Enable Testimonial*/
$business_click_settings_controls['business-click-testimonila-enable'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonila-enable']
	),
	'control' => array(
		'label'						=> esc_html__('Show Testimonial Section','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'active_callback'			=> ''
	)
);

/*Section Title*/
$business_click_settings_controls['business-click-testimonial-section-title'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-section-title']
	),
	'control' => array(
		'label'						=> esc_html__('Section Title','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'text',
		'priority'					=> 20,
		'active_callback'			=> ''
	)
);

/*Section Sub Title*/
$business_click_settings_controls['business-click-testimonial-section-sub-title'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-section-sub-title']
	),
	'control' => array(
		'label'						=> esc_html__('Section Sub Title','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'text',
		'priority'					=> 25,
		'active_callback'			=> ''
	)
);


/*number of post*/
$business_click_settings_controls['business-click-number-of-testimonial'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-number-of-testimonial']
	),
	'control' => array(
		'label'						=> esc_html__('Number of Testimonials','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'select',
		'choices' => array(
			1						=> esc_html__('1','business-click'),
			2						=> esc_html__('2','business-click'),
			3						=> esc_html__('3','business-click'),
			4						=> esc_html__('4','business-click'),
			5						=> esc_html__('5','business-click'),

		),	
		'priority'					=> 30,
		'active_callback'			=> ''
	)
);

/*Excerpt Length*/
$business_click_settings_controls['business-click-testimonial-excerpt-length'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-excerpt-length']
	),
	'control' => array(
		'label'						=> esc_html__('Excerpt Length','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'number',
		'priority'					=> 40,
		'active_callback'			=> ''
	)
);

/* Select slider post */
$business_click_settings_controls['business-click-testimonial-select-form'] = array(
        'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-testimonial-select-form'] 
        ),
        'control' => array(
            'label'                 => esc_html__('Select Slider Post Type ','business-click'),
            'section'               => 'business-click-testimonial-section',
            'type'                  => 'select',
            'choices' => array(
                'form-category'     => esc_html__('Choose From Category','business-click'),    
                'form-post'         => esc_html__('Choose From page','business-click'),    
            ),            
            'priority'              => 45,
            'acticve_callback'      => ''

        ),     
);

/*post type slider from post */
$business_click_settings_controls['business-click-testimonial-from-category'] = array(
        'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-testimonial-from-category'] 
        ),
        'control' => array(
            'label'                 => esc_html__('Select Category','business-click'),
            'section'               => 'business-click-testimonial-section',
            'type'                  => 'category_dropdown',            
            'priority'              => 48,
            'acticve_callback'      => ''

        ),     
);


/*Select number of page*/
$business_click_repeated_settings_controls['business-click-testimonial-designation'] = array(
	'repeated'					   => 5,
	'testimonial-designation-ids' => array(
		'setting' => array(
			'default'					=> $business_click_customizer_defaults['business-click-testimonial-designation']
		),
		'control' => array(
			/* translators: %s: search testimonila designation */
			'label'						=> esc_html__('Designation %s','business-click'),
			'section'					=> 'business-click-testimonial-section',
			'type'						=> 'text',
			'priority'					=> 50,
			'active_callback'			=> ''
		)
	),
	'testimonial-page-ids' => array(
		'setting' => array(
			'default'					=> $business_click_customizer_defaults['business-click-testimonial-select-for-page']
		),
		'control' => array(
			/* translators: %s: search testimonial page */
			'label'						=> esc_html__('Testimonial Page %s','business-click'),
			'section'					=> 'business-click-testimonial-section',
			'type'						=> 'dropdown-pages',
			'priority'					=> 50,
			'active_callback'			=> ''
		)
	),	
);

/*Background image upload*/
$business_click_settings_controls['business-click-testimonial-background-image'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-background-image']
	),
	'control' => array(
		'label'						=> esc_html__('Upload Background Image','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'image',
		'priority'					=> 60,
		'active_callback'			=> ''
	)
);


/*Layout options*/
$business_click_settings_controls['business-click-testimonial-layout'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-layout'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Layout Options','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'select',
		'choices' => array(
			'layout-1'				=> esc_html__('Layout 1','business-click'),
			'layout-2'	    		=> esc_html__('Layout 2','business-click')								
		),
		'priority'					=> 63,
		'acitive_callback'			=> ''
	)		

);


/*box aligment*/
$business_click_settings_controls['business-click-testimonila-box-aligment'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonila-box-aligment'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Box Alignment','business-click'),
		'description'					=> esc_html__('This will change box alignment for Layout 1.','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'select',
		'choices' => array(
			'justify-content-lg-start'		=> esc_html__('Left','business-click'),
			'justify-content-lg-center'	=> esc_html__('Center','business-click'),
			'justify-content-lg-end'		=> esc_html__('Right','business-click'),								
		),
		'priority'					=> 65,
		'acitive_callback'			=> ''
	)		

);

/* Enable Title*/
$business_click_settings_controls['business-click-testimonial-enable-title'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-enable-title']
	),
	'control' => array(
		'label'						=> esc_html__('Show Author Name','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 70,
		'active_callback'			=> ''
	)
);

/* Enable Image*/
$business_click_settings_controls['business-click-testimonial-enable-image'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-enable-image']
	),
	'control' => array(
		'label'						=> esc_html__('Show Author Image','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 80,
		'active_callback'			=> ''
	)
);

/* Enable Arrow*/
$business_click_settings_controls['business-click-testimonial-enable-arrow'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-enable-arrow']
	),
	'control' => array(
		'label'						=> esc_html__('Show Arrow','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 90,
		'active_callback'			=> ''
	)
);

/* Enable pager*/
$business_click_settings_controls['business-click-testimonial-enable-pager'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-enable-pager']
	),
	'control' => array(
		'label'						=> esc_html__('Show Pager','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 92,
		'active_callback'			=> ''
	)
);


/* Enable Autoplay*/
$business_click_settings_controls['business-click-testimonial-enable-autoplay'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-enable-autoplay']
	),
	'control' => array(
		'label'						=> esc_html__('Enable Autoplay','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 100,
		'active_callback'			=> ''
	)
);

/* Autoplay slider time */
$business_click_settings_controls['business-click-testimonial-time-auto-slide'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-time-auto-slide']
	),
	'control' => array(
		'label'						=> esc_html__('Autoplay Duration','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'description'		=> esc_html__('Time in Sec','business-click'),
		'type'						=> 'number',
		'priority'					=> 110,
		'active_callback'			=> ''
	)
);

/* overlay Transparency*/
$business_click_settings_controls['business-click-testimonial-overlay-transparency'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-overlay-transparency']
	),
	'control' => array(
		'label'						=> esc_html__('Background Overlay Transparency','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'description'					=> esc_html__('From 0 to 1','business-click'),
		'type'						=> 'number',
		'input_attrs' => array('step'=> "0.01", 'min' => 0, 'max' => 1),
		'priority'					=> 120,
		'active_callback'			=> ''
	)
);

/*background theme*/
$business_click_settings_controls['business-click-testimonial-background-theme'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-background-theme'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select background theme','business-click'),
		'description'					=> esc_html__('Text color will be changed to white if Dark theme is choosed.','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'select',
		'choices' => array(
			'light'		=> esc_html__('Light','business-click'),
			'dark'		=> esc_html__('Dark','business-click'),				
		),
		'priority'					=> 130,
		'acitive_callback'			=> ''
	)		

);
