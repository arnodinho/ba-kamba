<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-enable-static-page']            = 0;
$business_click_customizer_defaults['business-click-animation-option']              = 1;
$business_click_customizer_defaults['business-click-default-layout']                = 'right-sidebar';
$business_click_customizer_defaults['business-click-single-post-image-align']       = 'full';
$business_click_customizer_defaults['business-click-archive-image-align']           = 'full';
$business_click_customizer_defaults['business-click-archive-layout']                = 'thumbnail-and-excerpt';
$business_click_customizer_defaults['business-click-number-of-words']               = 35;
$business_click_customizer_defaults['business-click-conatiner-width-layout']        = 1140;
$business_click_customizer_defaults['business-click-enable-section-header-bottom']  = 1;

// test page color
$business_click_customizer_defaults['business-color-page']                          = '' ;
 

$business_click_sections['business-click-layout-options'] = array(
        'priority'       => 200,
        'title'          => esc_html__( 'Layout Options', 'business-click' ),
        'panel'          => 'business-click-theme-options',
    );


/*home page static page display*/
$business_click_settings_controls['business-click-enable-static-page'] = array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-enable-static-page'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Static Front Page', 'business-click' ),
            'description'           =>  esc_html__( 'If you disable this, the static page will be disappeared form the front page and other section will remain as it is', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );

/*Section header bomtton boder*/
$business_click_settings_controls['business-click-enable-section-header-bottom'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-enable-section-header-bottom'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Show Title Bottom Border', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 15,
        )
    );

/*Animation options*/
$business_click_settings_controls['business-click-animation-option'] =
    array(
        'setting' => array(
            'default'              => $business_click_customizer_defaults['business-click-animation-option'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Animate options', 'business-click' ),
            'description'           => '',
            'section'               => 'business-click-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 20,
        )
    );



/*layout-options option responsive lodader start*/
$business_click_settings_controls['business-click-default-layout'] = array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-default-layout'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Default Layout', 'business-click' ),
            'description'           =>  esc_html__( 'Please note that this section can be overridden by individual page/posts settings', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'select',
            'choices' => array(
                'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'business-click' ),
                'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'business-click' ),
                'no-sidebar'    => esc_html__( 'No Sidebar', 'business-click' )
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );


$business_click_settings_controls['business-click-single-post-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-single-post-image-align'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Alignment of Image in Single Post/Page', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'select',
            'choices' => array(
                'full'      => esc_html__( 'Full', 'business-click' ),
                'right'     => esc_html__( 'Right', 'business-click' ),
                'left'      => esc_html__( 'Left', 'business-click' ),
                'no-image'  => esc_html__( 'No image', 'business-click' )
            ),
            'priority'              => 40,
            'description'           =>  esc_html__( 'Please note that this setting can be overridden by individual post/page settings', 'business-click' ),
        )
    );



$business_click_settings_controls['business-click-archive-layout'] =
array(
    'setting' => array(
        'default'              => $business_click_customizer_defaults['business-click-archive-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Archive Layout', 'business-click' ),
        'section'               => 'business-click-layout-options',
        'type'                  => 'select',
        'choices'               => array(
            'excerpt-only' => esc_html__( 'Excerpt Only', 'business-click' ),
            'thumbnail-and-excerpt' => esc_html__( 'Thumbnail and Excerpt', 'business-click' ),
            'full-post' => esc_html__( 'Full Post', 'business-click' ),
            'thumbnail-and-full-post' => esc_html__( 'Thumbnail and Full Post', 'business-click' ),
        ),
        'priority'              => 55,
    )
);


/*container size*/
$business_click_settings_controls['business-click-conatiner-width-layout'] =
    array(
        'setting' => array(
            'default'              => $business_click_customizer_defaults['business-click-conatiner-width-layout'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Container Width', 'business-click' ),
            'description'           => esc_html__('Value in px. This width is for the larger screen size greater than 1200px.','business-click'),
            'section'               => 'business-click-layout-options',
            'type'                  => 'number',
            'priority'              => 60,
        )
    );