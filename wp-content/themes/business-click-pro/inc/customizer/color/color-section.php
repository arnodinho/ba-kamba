<?php
global$business_click_sections;
global$business_click_settings_controls;
global$business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-site-identity-color']                       = '#313131';
$business_click_customizer_defaults['business-click-primary-color']                             = '#578ECF';
$business_click_customizer_defaults['business-click-top-header-background-bar-color']           = '#000000';
$business_click_customizer_defaults['business-click-top-header-bar-text-color']                 = '#FFFFFF';
$business_click_customizer_defaults['business-click-menu-header-background-color']              = '#FFFFFF';
$business_click_customizer_defaults['business-click-menu-header-text-color']                    = '#000000';
$business_click_customizer_defaults['business-click-menu-text-color-transparent']               = '#FFFFFF';
$business_click_customizer_defaults['business-click-button-background-hover-color']             = '#000000';
$business_click_customizer_defaults['business-click-button-text-color']                         = '#FFFFFF';
$business_click_customizer_defaults['business-click-link-text-color']                           = '#578ECF';
$business_click_customizer_defaults['business-click-business-click-h1-h6']                      = '#000000';
$business_click_customizer_defaults['business-click-section-heading-bottom-border-color']       = '#578ECF';
$business_click_customizer_defaults['business-click-footer-background-color']                   = '#1F1F1F';
$business_click_customizer_defaults['business-click-footer-text-color']                         = '#FFFFFF';
$business_click_customizer_defaults['business-click-footer-link-color']                         = '#FFFFFF';
$business_click_customizer_defaults['business-click-color-reset']                               = '';


/*Default color*/
$business_click_sections['colors'] = array(
        'priority'       => 110,
        'title'          => esc_html__( 'Colors Options', 'business-click' ),
        'panel'          => 'business-click-theme-options'
    );



/**
 * Reset color settings to default
 *
 * @since business-click 1.0.0
 */
if ( ! function_exists( 'business_click_color_reset' ) ) :
    function business_click_color_reset( ) {
        
        global$business_click_customizer_saved_values;
        $business_click_customizer_saved_values = business_click_get_all_options();
      
        if ( 1 == intval($business_click_customizer_saved_values['business-click-color-reset'] ) ) {
            global$business_click_customizer_defaults;
            /*getting fields*/

            /*setting fields */
           $business_click_customizer_saved_values['business-click-site-identity-color']             = $business_click_customizer_defaults['business-click-site-identity-color'] ;
           $business_click_customizer_saved_values['business-click-primary-color']                   = $business_click_customizer_defaults['business-click-primary-color'] ;
           $business_click_customizer_saved_values['business-click-top-header-background-bar-color'] = $business_click_customizer_defaults['business-click-top-header-background-bar-color'];
           $business_click_customizer_saved_values['business-click-top-header-bar-text-color']       = $business_click_customizer_defaults['business-click-top-header-bar-text-color'];
           $business_click_customizer_saved_values['business-click-menu-header-background-color']                = $business_click_customizer_defaults['business-click-menu-header-background-color'];
           $business_click_customizer_saved_values['business-click-menu-header-text-color']          = $business_click_customizer_defaults['business-click-menu-header-text-color'];
           $business_click_customizer_saved_values['business-click-menu-text-color-transparent']                = $business_click_customizer_defaults['business-click-menu-text-color-transparent'];
           $business_click_customizer_saved_values['business-click-button-background-hover-color']                = $business_click_customizer_defaults['business-click-button-background-hover-color'];
           $business_click_customizer_saved_values['business-click-button-text-color']                = $business_click_customizer_defaults['business-click-button-text-color'];
           $business_click_customizer_saved_values['business-click-link-text-color']                = $business_click_customizer_defaults['business-click-link-text-color'];
           $business_click_customizer_saved_values['business-click-business-click-h1-h6']             = $business_click_customizer_defaults['business-click-business-click-h1-h6'];
           $business_click_customizer_saved_values['business-click-section-heading-bottom-border-color']                = $business_click_customizer_defaults['business-click-section-heading-bottom-border-color'];
           $business_click_customizer_saved_values['business-click-footer-background-color']          = $business_click_customizer_defaults['business-click-footer-background-color'];
           $business_click_customizer_saved_values['business-click-footer-text-color']                = $business_click_customizer_defaults['business-click-footer-text-color'];
           $business_click_customizer_saved_values['business-click-footer-link-color']                = $business_click_customizer_defaults['business-click-footer-link-color'];
          
            remove_theme_mod( 'background_color' );
           $business_click_customizer_saved_values['business-click-color-reset']                      = '';

            /*resetting fields*/
            business_click_reset_options($business_click_customizer_saved_values );
        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','business_click_color_reset' );




$business_click_settings_controls['business-click-site-identity-color'] = array(
    'setting' =>  array(
        'default'  => $business_click_customizer_defaults['business-click-site-identity-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Site Identity Color', 'business-click' ),
        'description'           =>  esc_html__( 'Site title and tagline color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 20,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-primary-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-primary-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Primary Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 30,
        'active_callback'       => ''
    )
);


$business_click_settings_controls['business-click-top-header-background-bar-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-top-header-background-bar-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Top Header Bar Background Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 40,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-top-header-bar-text-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-top-header-bar-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Top Header Bar Text Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 50,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-menu-header-background-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-menu-header-background-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Header Menu Background Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 60,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-menu-header-text-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-menu-header-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Header Menu Text Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 70,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-menu-text-color-transparent'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-menu-text-color-transparent'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Menu Text Color For Transparent Header', 'business-click' ),
        'description'           => esc_html__('If Transparent Header is enabled','business-click'),   
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 80,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-button-background-hover-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-button-background-hover-color'],
    ),
    'control' => array(
        'label'                 => esc_html__( 'Button Hover Background Color', 'business-click' ),
        'description'           => esc_html__('It works when you hover in button','business-click'),    
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 120,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-button-text-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-button-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Button Text Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 130,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-link-text-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-link-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Link Text Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 140,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-business-click-h1-h6'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-business-click-h1-h6'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'H1-H6 Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 150,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-section-heading-bottom-border-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-section-heading-bottom-border-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Section Header Bottom Border Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 155,
        'active_callback'       => ''
    )
);


$business_click_settings_controls['business-click-footer-background-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-footer-background-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Footer Background Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 160,
        'active_callback'       => ''
    )
);


$business_click_settings_controls['business-click-footer-text-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-footer-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Footer Text Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 170,
        'active_callback'       => ''
    )
);

$business_click_settings_controls['business-click-footer-link-color'] = array(
    'setting' => array(
        'default' => $business_click_customizer_defaults['business-click-footer-link-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Footer Link Color', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 180,
        'active_callback'       => ''
    )
);


$business_click_settings_controls['business-click-color-reset'] = array(
    'setting' => array(
        'default'   => $business_click_customizer_defaults['business-click-color-reset'],
        'transport'            => 'postmessage',
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Reset', 'business-click' ),
        'description'           =>  esc_html__( 'Caution: Reset all color settings above to default. Refresh the page after saving to view the effects', 'business-click' ),
        'section'               => 'colors',
        'type'                  => 'checkbox',
        'priority'              => 220,
        'active_callback'       => ''
    )
);