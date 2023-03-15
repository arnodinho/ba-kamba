<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-enable-footer-section'] = 1;
$business_click_customizer_defaults['business-click-copyright-text']        = esc_html__( 'Copyright &copy; All Rights Reserved.', 'business-click' );
$business_click_customizer_defaults['business-click-enable-theme-name']     = 1;

$business_click_customizer_defaults['business-click-enable-scroll-to-top']  = 1;

$business_click_sections['business-click-footer-options'] =
    array(
        'priority'       => 1500,
        'title'          => esc_html__( 'Footer Options', 'business-click' ),
        'panel'          => 'business-click-main-page-options'
    );

// footer enable options
$business_click_settings_controls['business-click-enable-footer-section'] = array(
    'setting' =>     array(
        'default'              => $business_click_customizer_defaults['business-click-enable-footer-section'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Show Footer', 'business-click' ),
        'section'               => 'business-click-footer-options',
        'type'                  => 'checkbox',
        'priority'              => 10,
    )
);

// copyright text
$business_click_settings_controls['business-click-copyright-text'] = array(
    'setting' =>     array(
        'default'              => $business_click_customizer_defaults['business-click-copyright-text'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Copyright Text', 'business-click' ),
        'section'               => 'business-click-footer-options',
        'type'                  => 'text_html',
        'priority'              => 20,
    )
);

/*enable theme name*/
$business_click_settings_controls['business-click-enable-theme-name'] = array(
    'setting' =>     array(
        'default'              => $business_click_customizer_defaults['business-click-enable-theme-name'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Show Theme Name', 'business-click' ),
        'section'               => 'business-click-footer-options',
        'type'                  => 'checkbox',
        'priority'              => 50,
    )
);

/*scroll to top*/
$business_click_settings_controls['business-click-enable-scroll-to-top'] = array(
    'setting' =>     array(
        'default'              => $business_click_customizer_defaults['business-click-enable-scroll-to-top'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Show Scroll To Top Button', 'business-click' ),
        'section'               => 'business-click-footer-options',
        'type'                  => 'checkbox',
        'priority'              => 60,
    )
);