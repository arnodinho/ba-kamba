<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-enable-loading-screen'] = 1;
$business_click_customizer_defaults['business-click-loading-always-show'] = 0;
$business_click_customizer_defaults['business-click-loading-dismissable'] = 0;
$business_click_customizer_defaults['business-click-loading-background-color'] = '#ffffff';
$business_click_customizer_defaults['business-click-loading-color'] = '#3e3e3e';
$business_click_customizer_defaults['business-click-loading-icon'] = 'fa-spinner';
$business_click_customizer_defaults['business-click-loading-image'] = '';
$business_click_customizer_defaults['business-click-loading-image-logo'] = '';

$business_click_sections['business-click-loading-screen-options'] = array(
        'priority'       => 510,
        'title'          => esc_html__( 'Loading Screen', 'business-click' ),
        'panel'          => 'business-click-theme-options',
    );

$business_click_settings_controls['business-click-enable-loading-screen'] = array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-enable-loading-screen'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Loading Screen', 'business-click' ),
            'section'               => 'business-click-loading-screen-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );

$business_click_settings_controls['business-click-loading-always-show'] = array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-loading-always-show'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Always Show Loading Screen', 'business-click' ),
            'description'           =>  esc_html__( 'It helps you to view the changes you make in the loading screen. But do not forget to disable while you are done.', 'business-click' ),
            'section'               => 'business-click-loading-screen-options',
            'type'                  => 'checkbox',
            'priority'              => 20,
        )
    );

$business_click_settings_controls['business-click-loading-dismissable'] = array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-loading-dismissable'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Dismissiable', 'business-click' ),
            'description'           =>  esc_html__( 'Allows you to close the loading screen if the loading screen did not close automatically.', 'business-click' ),
            'section'               => 'business-click-loading-screen-options',
            'type'                  => 'checkbox',
            'priority'              => 25,
        )
    );

$business_click_settings_controls['business-click-loading-background-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-loading-background-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Background Color', 'business-click' ),
        'section'               => 'business-click-loading-screen-options',
        'type'                  => 'color',
        'priority'              => 30,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-loading-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-loading-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Icon Color', 'business-click' ),
        'section'               => 'business-click-loading-screen-options',
        'type'                  => 'color',
        'priority'              => 40,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-loading-icon'] = array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-loading-icon'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Loading Icon', 'business-click' ),
            'section'               => 'business-click-loading-screen-options',
            'type'                  => 'select',
            'choices' => array(
                'fa-spinner'    => esc_html__( 'Spinner', 'business-click' ),
                'fa-circle-o-notch' => esc_html__( 'Circle Notch', 'business-click' ),
                'fa-gear'  => esc_html__( 'Gear', 'business-click' ),
                'fa-refresh'    => esc_html__( 'Refresh', 'business-click' )
            ),
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

/* image */
$business_click_settings_controls['business-click-loading-image']  = array(
    'setting'  => array(
        'default'                       => $business_click_customizer_defaults['business-click-loading-image']
    ),
    'control' => array(
        'label'                         => esc_html__('Loading GIF','business-click'),
            'description'           =>  esc_html__( 'The uploaded GIF animation will override the Loading Icon', 'business-click' ),
        'section'                       => 'business-click-loading-screen-options',
        'type'                          => 'image',
        'priority'                      => 60,
        'acitive_callback'              => ''
    )   
);

/* logo image */
$business_click_settings_controls['business-click-loading-image-logo']  = array(
    'setting'  => array(
        'default'                       => $business_click_customizer_defaults['business-click-loading-image-logo']
    ),
    'control' => array(
        'label'                         => esc_html__('Logo','business-click'),
            'description'           =>  esc_html__( 'The uploaded logo will appear just below the loading icon / image.', 'business-click' ),
        'section'                       => 'business-click-loading-screen-options',
        'type'                          => 'image',
        'priority'                      => 60,
        'acitive_callback'              => ''
    )   
);