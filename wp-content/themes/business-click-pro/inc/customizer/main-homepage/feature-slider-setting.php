<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['business-click-enbale-slider']                         = 1;
$business_click_customizer_defaults['business-click-number-of-slider']                      = 5;
$business_click_customizer_defaults['business-click-slider-excerpt-length']                 = 30;
$business_click_customizer_defaults['business-click-post-type-slider']                      =  'From-Page';
$business_click_customizer_defaults['business-click-select-from-category']                  =  1;
$business_click_customizer_defaults['business-click-select-from-page']                      =  0;
$business_click_customizer_defaults['business-click-slider-button-text']                    = esc_html__('Learn more','business-click');
$business_click_customizer_defaults['business-click-enable-title']                          = 1;
$business_click_customizer_defaults['business-click-enable-content']                        = 1;
$business_click_customizer_defaults['business-click-enable-image']                          = 1;
$business_click_customizer_defaults['business-click-enable-button']                         = 1;
$business_click_customizer_defaults['business-click-enable-arrow']                          = 1;
$business_click_customizer_defaults['business-click-enable-autoplay']                       = 1;
$business_click_customizer_defaults['business-click-enable-pager']                          = 1;
$business_click_customizer_defaults['business-click-time-auto-slider']                      = 4;
$business_click_customizer_defaults['business-click-slider-overlay-transparency']           = 0.2;
$business_click_customizer_defaults['business-click-slider-hover-overlay-transparency']     = 0.4;
$business_click_customizer_defaults['business-click-slider-content-transparency']           = 0.0;
$business_click_customizer_defaults['business-click-slider-content-alignment']              = 'caption-center';

$business_click_customizer_defaults['business-click-slider-menu-mbl-height']                = '400';
$business_click_customizer_defaults['business-click-slider-menu-aspect-ration-height']      = 567;
$business_click_customizer_defaults['business-click-slider-menu-aspect-ration-width']       = 1343;
$business_click_customizer_defaults['business-click-slider-pager-layout-options']           = 'pager-right-bottom';
$business_click_customizer_defaults['business-click-title-slider-show-hide']                = '';
$business_click_customizer_defaults['business-click-title-slider-options']                = '';
$business_click_customizer_defaults['business-click-title-slider-overlay']                = '';
$business_click_customizer_defaults['business-click-title-slider-custom']                = '';


$business_click_customizer_defaults['business-click-meta-slider-meta-shortcode']            = '';

/*create section for feature slider*/
$sli_priority_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-slider-section']  = array(
    'title'                 => esc_html__('Feature Slider Section','business-click'),
    'panel'                 => 'business-click-main-page-options',
    'priority'              => isset($sli_priority_customizer['business-click-priority-slider-change']) ? $sli_priority_customizer['business-click-priority-slider-change'] : 20
);

/*slider enable */
$business_click_settings_controls['business-click-enbale-slider'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enbale-slider'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Slider','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 10,
        'acticve_callback'  => ''

    )       
);

/*total number slider */
$business_click_settings_controls['business-click-number-of-slider'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-number-of-slider'] 
    ),
    'control' => array(
        'label'             => esc_html__('Number of Slider','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'select',
        'choices' => array(
            1               => esc_html__('1','business-click'),
            2               => esc_html__('2','business-click'),
            3               => esc_html__('3','business-click'),
            4               => esc_html__('4','business-click'),
            5               => esc_html__('5','business-click'),
            6               => esc_html__('6','business-click'),
            7               => esc_html__('7','business-click'),

        ),
        'priority'          => 20,
        'acticve_callback'  => ''

    )       
);

/*except length */
$business_click_settings_controls['business-click-slider-excerpt-length'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-excerpt-length'] 
    ),
    'control' => array(
        'label'             => esc_html__('Excerpt Length','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 30,
        'acticve_callback'  => ''

    )       
);

/*post type slider */
$business_click_settings_controls['business-click-post-type-slider'] = array(
    'setting' => array(
        'default'              => $business_click_customizer_defaults['business-click-post-type-slider'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Select Slider from','business-click'),
        'section'               => 'business-click-slider-section',
        'type'                  => 'select',
        'choices' => array(
            'From-Page'         => esc_html__('Choose from Page','business-click'),
            'From-category'     => esc_html__('Choose from Category','business-click')
        ),          
        'priority'              => 40,
        'acticve_callback'      => ''

    )       
);


/*post type slider from category */
$business_click_settings_controls['business-click-select-from-category'] = array(
    'setting' => array(
        'default'              => $business_click_customizer_defaults['business-click-select-from-category'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Select Category for slider','business-click'),
        'section'               => 'business-click-slider-section',
        'type'                  => 'category_dropdown',         
        'priority'              => 50,
        'acticve_callback'      => ''

    )       
);

/*post type slider from page */
$business_click_repeated_settings_controls['business-click-select-from-page'] = array(
    'repeated'      => 7,
    'business-click-page-id' => array(
        'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-select-from-page'] 
        ),
        'control' => array(
            /* translators: %s: search slider page */
            'label'                 => esc_html__('Select page  for slider %s','business-click'),
            'section'               => 'business-click-slider-section',
            'type'                  => 'dropdown-pages',            
            'priority'              => 60,
            'acticve_callback'      => ''

        ),  
    )   
);

/*Button text */
$business_click_settings_controls['business-click-slider-button-text'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-button-text'] 
    ),
    'control' => array(
        'label'             => esc_html__('Slider Button text','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'text',
        'priority'          => 70,
        'acticve_callback'  => ''

    )       
);



// title - Enable/Disable
$business_click_settings_controls['business-click-title-slider-show-hide'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-slider-show-hide'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Enable/Disable', 'business-click' ) ),
            'section'               => 'business-click-slider-section',
            'type'                  => 'text',
            'input_attrs'           => array('class'=> "hidden"),
            'priority'              => 80,
            'active_callback'       => ''
        )
    );

/*Enable title */
$business_click_settings_controls['business-click-enable-title'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-title'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Title','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 80,
        'acticve_callback'  => ''

    )       
);

/*Enable content */
$business_click_settings_controls['business-click-enable-content'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-content'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Content','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 90,
        'acticve_callback'  => ''

    )       
);

/*Enable image */
$business_click_settings_controls['business-click-enable-image'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-image'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Image','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 100,
        'acticve_callback'  => ''

    )       
);

/*Enable button */
$business_click_settings_controls['business-click-enable-button'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-button'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Button','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 100,
        'acticve_callback'  => ''

    )       
);


// title - Slider Options
$business_click_settings_controls['business-click-title-slider-options'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-slider-options'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Slider Options', 'business-click' ) ),
            'section'               => 'business-click-slider-section',
            'type'                  => 'text',
            'input_attrs'           => array('class'=> "hidden"),
            'priority'              => 110,
            'active_callback'       => ''
        )
    );


/*Enable arrow */
$business_click_settings_controls['business-click-enable-arrow'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-arrow'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Arrow','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 110,
        'acticve_callback'  => ''

    )       
);

/*Enable autoplay */
$business_click_settings_controls['business-click-enable-autoplay'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-autoplay'] 
    ),
    'control' => array(
        'label'             => esc_html__('Enable Autoplay','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 120,
        'acticve_callback'  => ''

    )       
);

/*auto slider time */
$business_click_settings_controls['business-click-time-auto-slider'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-time-auto-slider'] 
    ),
    'control' => array(
        'label'             => esc_html__('Autoplay Duration','business-click'),
        'description'       => esc_html__('Time in sec','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 120,
        'acticve_callback'  => ''

    )       
);

/*Enable pager */
$business_click_settings_controls['business-click-enable-pager'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-enable-pager'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Pager','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 130,
        'acticve_callback'  => ''

    )       
);



/*pager alignment */
$business_click_settings_controls['business-click-slider-pager-layout-options'] = array(
    'setting' => array(
        'default'              => $business_click_customizer_defaults['business-click-slider-pager-layout-options'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Pager Alignment','business-click'),
        'section'               => 'business-click-slider-section',
        'type'                  => 'select',
        'choices' => array(
            'pager-left-bottom'         => esc_html__('Left Bottom','business-click'),
            'pager-right-bottom'         => esc_html__('Right Bottom','business-click'),
            'pager-right-center'        => esc_html__('Right Center','business-click')
        ),          
        'priority'              => 140,
        'acticve_callback'      => ''

    )       
);

/*Caption aligment*/
$business_click_settings_controls['business-click-slider-content-alignment'] = array(
    'setting' => array(
        'default'              => $business_click_customizer_defaults['business-click-slider-content-alignment'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Caption Alignment','business-click'),
        'section'               => 'business-click-slider-section',
        'type'                  => 'select',
        'choices' => array(
            'caption-left'         => esc_html__('Left','business-click'),
            'caption-center'       => esc_html__('Center','business-click'),
            'caption-right'        => esc_html__('Right','business-click')
        ),          
        'priority'              => 140,
        'acticve_callback'      => ''

    )       
);


/*Mobile menu height*/
$business_click_settings_controls['business-click-slider-menu-mbl-height'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-menu-mbl-height'] 
    ),
    'control' => array(
        'label'             => esc_html__('Minimum Height','business-click'),
        'description'       => esc_html__('Especially for mobile devices','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 190,
        'acticve_callback'  => ''

    )       
);

/*Mobile menu width*/
$business_click_settings_controls['business-click-slider-menu-aspect-ration-width'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-menu-aspect-ration-width'] 
    ),
    'control' => array(
        'label'             => esc_html__('Width (Aspect Ratio)','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 200,
        'acticve_callback'  => ''

    )       
);

/*Mobile menu height*/
$business_click_settings_controls['business-click-slider-menu-aspect-ration-height'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-menu-aspect-ration-height'] 
    ),
    'control' => array(
        'label'             => esc_html__('Height (Aspect Ratio)','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 210,
        'acticve_callback'  => ''

    )       
);

// title - Background Overlay
$business_click_settings_controls['business-click-title-slider-overlay'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-slider-overlay'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Background Overlay', 'business-click' ) ),
            'section'               => 'business-click-slider-section',
            'type'                  => 'text',
            'input_attrs'           => array('class'=> "hidden"),
            'priority'              => 220,
            'active_callback'       => ''
        )
    );
/*Slider overlay transparency*/
$business_click_settings_controls['business-click-slider-overlay-transparency'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-overlay-transparency'] 
    ),
    'control' => array(
        'label'             => esc_html__('Image Overlay Transparency (0 to 1)','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'input_attrs'       => array('step'=> "0.01", 'min' => 0, 'max' => 1),
        'priority'          => 220,
        'acticve_callback'  => ''

    )       
);

/*Slider overlay transparency*/
$business_click_settings_controls['business-click-slider-hover-overlay-transparency'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-hover-overlay-transparency'] 
    ),
    'control' => array(
        'label'             => esc_html__('Image Overlay Transparency on Hover (0 to 1)','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'input_attrs' => array('step'=> "0.01", 'min' => 0, 'max' => 1),
        'priority'          => 220,
        'acticve_callback'  => ''

    )       
);


/*Caption  transparency*/
$business_click_settings_controls['business-click-slider-content-transparency'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-slider-content-transparency'] 
    ),
    'control' => array(
        'label'             => esc_html__('Caption Transparency (0 to 1)','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'input_attrs' => array('step'=> "0.01", 'min' => 0, 'max' => 1),
        'priority'          => 220,
        'acticve_callback'  => ''

    )       
);



// title - Custom Slider
$business_click_settings_controls['business-click-title-slider-custom'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-slider-custom'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Custom Slider', 'business-click' ) ),
            'section'               => 'business-click-slider-section',
            'type'                  => 'text',
            'input_attrs'           => array('class'=> "hidden"),
            'priority'              => 230,
            'active_callback'       => ''
        )
    );
/*Meata Slider shortcode */
$business_click_settings_controls['business-click-meta-slider-meta-shortcode'] = array(
    'setting' => array(
        'default'          => $business_click_customizer_defaults['business-click-meta-slider-meta-shortcode'] 
    ),
    'control' => array(
        'label'             => esc_html__('Shortcode For MetaSlider','business-click'),
        'description'       => sprintf( '%1$s <a class="metaslider_plugin" href="https://wordpress.org/plugins/ml-slider/" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: Download ', 'business-click' ), esc_html__( 'MetaSlider', 'business-click' ), esc_html__( 'Plugin to get a Shortcode. The default banner will not appear if you choose MetaSlider.', 'business-click' ) ),
        'section'           => 'business-click-slider-section',
        'type'              => 'text',
        'priority'          => 230,
        'acticve_callback'  => ''

    )       
);