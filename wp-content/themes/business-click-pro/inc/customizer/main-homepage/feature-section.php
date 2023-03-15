<?php
global $business_click_panels;
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*default values*/
$business_click_customizer_defaults['business-click-feature-enable']                    = 1;
$business_click_customizer_defaults['business-click-feature-section-title']             = esc_html__('Feature Section','business-click');
$business_click_customizer_defaults['business-click-feature-section-sub-title']         = '';
$business_click_customizer_defaults['business-click-feature-number-post']               = 6;
$business_click_customizer_defaults['business-click-feature-show-per-page']             = 3;
$business_click_customizer_defaults['business-click-feature-icon-alignment']            = esc_html__('text-center','business-click');
$business_click_customizer_defaults['business-click-feature-excerpt-length']            = 30;
$business_click_customizer_defaults['business-click-feature-select-form']               = 'form-post';
$business_click_customizer_defaults['business-click-feature-from-category']             = 1;
$business_click_customizer_defaults['business-click-feature-from-page']                 = 0;
$business_click_customizer_defaults['business-click-feature-page-icon']                 = '';
$business_click_customizer_defaults['business-click-feature-button-text']               = '';
$business_click_customizer_defaults['business-click-feature-background-image']          = '';
$business_click_customizer_defaults['business-click-feature-box-bg-color']              = "";//#fff
$business_click_customizer_defaults['business-click-feature-box-text-color']            = "";//#000000
$business_click_customizer_defaults['business-click-feature-carousel']                  = 1;
$business_click_customizer_defaults['business-click-feature-enable-title']              = 1;
$business_click_customizer_defaults['business-click-feature-enable-content']            = 1;
$business_click_customizer_defaults['business-click-feature-enable-image']              = 1;
$business_click_customizer_defaults['business-click-feature-enable-button']             = 1;
$business_click_customizer_defaults['business-click-feature-enable-autoplay']           = 1;
$business_click_customizer_defaults['business-click-feature-enable-pager']              = 1;
$business_click_customizer_defaults['business-click-feature-time-autoplay-slide']       = 4;
$business_click_customizer_defaults['business-click-feature-overlay-transparent']       = 0;
$business_click_customizer_defaults['business-click-feature-layout-options']            = 'layout-1';
$business_click_customizer_defaults['business-click-feature-remove-bottom-padding']     = 0;

/*create section for feature*/
$priority_feture_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-feature-section'] = array(
    'title'     => esc_html__('Feature Section','business-click'),
    'panel'     => 'business-click-main-page-options',  
    'priority'  => isset($priority_feture_section_customizer['business-click-priority-feature-change']) ? $priority_feture_section_customizer['business-click-priority-feature-change'] : 30,

);

/*enable feature section*/
$business_click_settings_controls['business-click-feature-enable'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-enable']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Show Feature Section', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'checkbox',
            'priority'              =>   10,
            'active_callback'       =>   ''
        )
    );

/*Section Title*/
$business_click_settings_controls['business-click-feature-section-title'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-section-title']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Section Title', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   15,
            'active_callback'       =>   ''
        )
    );


/*Section Title*/
$business_click_settings_controls['business-click-feature-section-sub-title'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-section-sub-title']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Section Sub Title', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   18,
            'active_callback'       =>   ''
        )
    );



/*enable feature section*/
$business_click_settings_controls['business-click-feature-number-post'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-number-post']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Number of Post', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'select',
            'choices'  => array(
                1                   => esc_html__('1','business-click'),
                2                   => esc_html__('2','business-click'),
                3                   => esc_html__('3','business-click'),
                4                   => esc_html__('4','business-click'),
                5                   => esc_html__('5','business-click'),
                6                   => esc_html__('6','business-click'),
                
            ),              
            'priority'              =>   20,
            'active_callback'       =>   ''
        )
    );

/*iteam show in per page */
$business_click_settings_controls['business-click-feature-show-per-page'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-show-per-page']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Number of Items Per Row', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'select',
            'choices'  => array(
                1                   => esc_html__('1','business-click'),
                2                   => esc_html__('2','business-click'),
                3                   => esc_html__('3','business-click'),
                4                   => esc_html__('4','business-click'),
                5                   => esc_html__('5','business-click'),
                6                   => esc_html__('6','business-click'),
                
            ),              
            'priority'              =>   20,
            'active_callback'       =>   ''
        )
    );

/*Excerpt length */
$business_click_settings_controls['business-click-feature-excerpt-length'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-excerpt-length']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Excerpt Length', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'number',
            'priority'              =>   30,
            'active_callback'       =>   ''
        )
    );

/* Select slider post */
$business_click_settings_controls['business-click-feature-select-form'] = array(
    'setting' => array(
    'default'                   => $business_click_customizer_defaults['business-click-feature-select-form'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Select Slider Post Type ','business-click'),
        'section'               => 'business-click-feature-section',
        'type'                  => 'select',
        'choices' => array(
            'form-category'     => esc_html__('Choose From Category','business-click'),    
            'form-post'         => esc_html__('Choose From page','business-click'),    
        ),            
        'priority'              => 40,
        'acticve_callback'      => ''

    ),     
);

/*post type slider from post */
$business_click_settings_controls['business-click-feature-from-category'] = array(
    'setting' => array(
    'default'                   => $business_click_customizer_defaults['business-click-feature-from-category'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Select Category','business-click'),
        'section'               => 'business-click-feature-section',
        'type'                  => 'category_dropdown',            
        'priority'              => 45,
        'acticve_callback'      => ''

    ),     
);


/*page Selection */
$business_click_repeated_settings_controls['business-click-feature-from-page'] = array(
    'repeated'      => 6,
    'feature-icons-ids' => array(
        'setting' => array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-page-icon']
        ),
        'control' =>   array(
            /* translators: %s: search page icon */
            'label'                 =>    esc_html__( 'Page for feature page icon %s', 'business-click' ),
             /* translators: %s: search page icon */
            'description'           =>   sprintf( esc_html__( 'Eg: %1$s. %2$s  View Font Awesome Cheatsheet. %3$s Removing icons will display the featured image.', 'business-click' ), "<b>".'fa-wrench'."</b>",'<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   50,
            'active_callback'       =>   ''
        )
    ),
    'feature-page-ids' => array(
        'setting' => array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-from-page']
        ),
        'control' =>   array(
            /* translators: %s: search feature page */
            'label'                 =>    esc_html__( 'Page for feature page %s', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'dropdown-pages',
            'priority'              =>   60,
            'active_callback'       =>   ''
        )
    ),      
    
);

/* button text*/
$business_click_settings_controls['business-click-feature-button-text'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-button-text']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Button Text', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   70,
            'active_callback'       =>   ''
        )
    );

/*Background image upload*/
$business_click_settings_controls['business-click-feature-background-image'] = array(
    'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-feature-background-image']
    ),
    'control' => array(
        'label'                     => esc_html__('Upload Background Image','business-click'),
        'section'                   => 'business-click-feature-section',
        'type'                      => 'image',
        'priority'                  => 80,
        'active_callback'           => ''
    )
);


/* section feature carousel*/
$business_click_settings_controls['business-click-feature-carousel'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-carousel']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Enable Carousel', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'checkbox',
        'priority'              =>   95,
        'active_callback'       =>   ''
    )
);

/* Enable Title*/
$business_click_settings_controls['business-click-feature-enable-title'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-enable-title']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Show Title', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'checkbox',
        'priority'              =>   100,
        'active_callback'       =>   ''
    )
);

/* Enable content*/
$business_click_settings_controls['business-click-feature-enable-content'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-enable-content']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Show Content', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'checkbox',
        'priority'              =>   110,
        'active_callback'       =>   ''
    )
);

/* Enable button*/
$business_click_settings_controls['business-click-feature-enable-button'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-enable-button']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Show Button', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'checkbox',
        'priority'              =>   120,
        'active_callback'       =>   ''
    )
);

/* Enable autoplay*/
$business_click_settings_controls['business-click-feature-enable-autoplay'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-enable-autoplay']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Enable Autoplay', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'checkbox',
        'priority'              =>   130,
        'active_callback'       =>   ''
    )
);

/* Enable pager*/
$business_click_settings_controls['business-click-feature-enable-pager'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-enable-pager']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Show Pager', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'checkbox',
        'priority'              =>   140,
        'active_callback'       =>   ''
    )
);

/* Enable time autoplay slide*/
$business_click_settings_controls['business-click-feature-time-autoplay-slide'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-time-autoplay-slide']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Autoplay Duration', 'business-click' ),
        'description'       => esc_html__('Time in Sec','business-click'),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'number',
        'priority'              =>   150,
        'active_callback'       =>   ''
    )
);

/*Layout options*/
$business_click_settings_controls['business-click-feature-layout-options'] = array(
    'setting' => array(
        'default'              => $business_click_customizer_defaults['business-click-feature-layout-options'] 
    ),
    'control' => array(
        'label'                 => esc_html__('Layout Options','business-click'),
        'section'               => 'business-click-feature-section',
        'type'                  => 'select',
        'choices' => array(
            'layout-1'         => esc_html__('Layout 1','business-click'),
            'layout-2'         => esc_html__('Layout 2','business-click')
        ),          
        'priority'              => 170,
        'acticve_callback'      => ''

    )       
);



/*Icon alignment */
$business_click_settings_controls['business-click-feature-icon-alignment'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-icon-alignment']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Icon Aligment', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'select',
            'choices'  => array(
                'text-center'                   => esc_html__('Center','business-click'),
                'featured-icon-left'            => esc_html__('Left','business-click'),
                'featured-icon-right'           => esc_html__('Right','business-click'),

            ), 
            'priority'              =>   180,
            'active_callback'       =>   ''
        )
    );

/* section background color*/
$business_click_settings_controls['business-click-feature-box-bg-color'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-box-bg-color']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Feature Box Background Color', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'color',
        'priority'              =>   180,
        'active_callback'       =>   ''
    )
);

/* section background color*/
$business_click_settings_controls['business-click-feature-box-text-color'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-feature-box-text-color']
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Feature Box Text Color', 'business-click' ),
        'section'               =>   'business-click-feature-section',
        'type'                  =>   'color',
        'priority'              =>   180,
        'active_callback'       =>   ''
    )
);


/*overlay transparency*/
$business_click_settings_controls['business-click-feature-overlay-transparent']  = array(
    'setting'  => array(
        'default'                       => $business_click_customizer_defaults['business-click-feature-overlay-transparent']
    ),
    'control' => array(
        'label'                         => esc_html__('Background Overlay Transparency','business-click'),
        'description'                   => esc_html__('From 0 to 1','business-click'),
        'section'                       => 'business-click-feature-section',
        'type'                          => 'number',
        'input_attrs' => array('step'=>'0.01', 'min'=>'0','max'=>'1'),
        'priority'                      => 190,
        'acitive_callback'              => ''
    )   
);

/*remove bottom padding*/
$business_click_settings_controls['business-click-feature-remove-bottom-padding'] = array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-remove-bottom-padding']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Remove Bottom Padding', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'checkbox',
            'priority'              =>   200,
            'active_callback'       =>   ''
        )
    );