<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-priority-slider-change']           = 30;
$business_click_customizer_defaults['business-click-priority-feature-change']          = 40;
$business_click_customizer_defaults['business-click-priority-about-us-change']         = 50;
$business_click_customizer_defaults['business-click-priority-portfolio-change']        = 60;
$business_click_customizer_defaults['business-click-priority-call-action-change']      = 70;
$business_click_customizer_defaults['business-click-priority-testimonial-change']      = 80;
$business_click_customizer_defaults['business-click-priority-our-team-change']         = 90;
$business_click_customizer_defaults['business-click-priority-blog-change']             = 100;
$business_click_customizer_defaults['business-click-priority-partner-change']          = 110;
$business_click_customizer_defaults['business-click-priority-contact-us-change']       = 120;
$business_click_customizer_defaults['business-click-priority-short-code1-change']      = 130;
$business_click_customizer_defaults['business-click-priority-short-code2-change']      = 140;
$business_click_customizer_defaults['business-click-section-priority-reset']           = '';


$business_click_sections['business-click-priority-options'] = array(
        'priority'       => 109,
        'title'          => esc_html__( 'Section Order', 'business-click' ),
        'description'    => esc_html__('It helps to reorder the section. Click the Publish button and Reload the page to view the changes.','business-click'),
        'panel'          => 'business-click-theme-options',
    );


/**
 * Reset Priority settings to default
 *
 * @since business-click 1.0.0
 */
if(!function_exists('business_click_priority_Section_reset') ):

    function business_click_priority_Section_reset(){

        global $business_click_customizer_saved_values;
        $business_click_customizer_saved_values = business_click_get_all_options();

        if( 1 == intval($business_click_customizer_saved_values['business-click-section-priority-reset'])){
            global $business_click_customizer_defaults;

            $business_click_customizer_saved_values['business-click-priority-slider-change']        = $business_click_customizer_defaults['business-click-priority-slider-change'];
            $business_click_customizer_saved_values['business-click-priority-feature-change']       = $business_click_customizer_defaults['business-click-priority-feature-change'];
            $business_click_customizer_saved_values['business-click-priority-about-us-change']      = $business_click_customizer_defaults['business-click-priority-about-us-change'];
            $business_click_customizer_saved_values['business-click-priority-portfolio-change']     = $business_click_customizer_defaults['business-click-priority-portfolio-change'];
            $business_click_customizer_saved_values['business-click-priority-call-action-change']   = $business_click_customizer_defaults['business-click-priority-call-action-change'];
            $business_click_customizer_saved_values['business-click-priority-testimonial-change']   = $business_click_customizer_defaults['business-click-priority-testimonial-change'];
            $business_click_customizer_saved_values['business-click-priority-our-team-change']      = $business_click_customizer_defaults['business-click-priority-our-team-change'];
            $business_click_customizer_saved_values['business-click-priority-blog-change']          = $business_click_customizer_defaults['business-click-priority-blog-change'];
            $business_click_customizer_saved_values['business-click-priority-partner-change']       = $business_click_customizer_defaults['business-click-priority-partner-change'];
            $business_click_customizer_saved_values['business-click-priority-contact-us-change']    = $business_click_customizer_defaults['business-click-priority-contact-us-change'];
            $business_click_customizer_saved_values['business-click-priority-short-code1-change']   = $business_click_customizer_defaults['business-click-priority-short-code1-change'];
            $business_click_customizer_saved_values['business-click-priority-short-code2-change']   = $business_click_customizer_defaults['business-click-priority-short-code2-change'];

            $business_click_customizer_saved_values['business-click-section-priority-reset']        = '';

            /*reseting field*/
            business_click_reset_options($business_click_customizer_saved_values);

        }
        else{
            return '';
        }
    }
endif;
add_action( 'customize_save_after','business_click_priority_Section_reset' );


global $business_click_priority_change;
$business_click_priority_change = array(

    '30'            => esc_html__('Order First','business-click'),
    '40'            => esc_html__('Order Second','business-click'),
    '50'            => esc_html__('Order Third','business-click'),
    '60'            => esc_html__('Order Fourth','business-click'),
    '70'            => esc_html__('Order Fifth','business-click'),
    '80'            => esc_html__('Order Sixth','business-click'),
    '90'            => esc_html__('Order Seventh','business-click'),
    '100'            => esc_html__('Order Eighth','business-click'),
    '110'            => esc_html__('Order Ninth','business-click'),
    '120'           => esc_html__('Order Tenth','business-click'),
    '130'           => esc_html__('Order Eleventh','business-click'),
    '140'           => esc_html__('Order Twelfth','business-click'),

);

/*priotry for slider*/

$slider_priority_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-slider-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-slider-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Feature Slider', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($slider_priority_customizer['business-click-priority-slider-change']) ? $slider_priority_customizer['business-click-priority-slider-change'] : 30,
        'description'           =>   ''
    )
);


/*priotry for feature*/
$priority_fetature_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-feature-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-feature-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Feature Section', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priority_fetature_customizer['business-click-priority-feature-change']) ? $priority_fetature_customizer['business-click-priority-feature-change'] : 40,
        'description'           =>   ''
    )
);


/*priotry for about us*/

$priotry_about_us_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-about-us-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-about-us-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for About Us', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priority_fetature_customizer['business-click-priority-about-us-change']) ? $priority_fetature_customizer['business-click-priority-about-us-change'] : 50,
        'description'           =>   ''
    )
);


/*priotry for  portfolio*/

$priotry_portfolio_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-portfolio-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-portfolio-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Portfolio', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_portfolio_customizer['business-click-priority-portfolio-change']) ? $priotry_portfolio_customizer['business-click-priority-portfolio-change'] : 60,
        'description'           =>   ''
    )
);


/*priotry for call to action*/
$priotry_cta_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-call-action-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-call-action-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Call To Action', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_cta_customizer['business-click-priority-call-action-change']) ? $priotry_cta_customizer['business-click-priority-call-action-change'] : 70,
        'description'           =>   ''
    )
);

/*priotry for our team*/
$priotry_team_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-our-team-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-our-team-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Our Team', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_team_customizer['business-click-priority-our-team-change']) ? $priotry_team_customizer['business-click-priority-our-team-change'] : 80,
        'description'           =>   ''
    )
);

/*priotry for Testimonila*/
$priotry_testimonial_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-testimonial-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-testimonial-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Testimonial', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_testimonial_customizer['business-click-priority-testimonial-change']) ? $priotry_testimonial_customizer['business-click-priority-testimonial-change'] : 90,
        'description'           =>   ''
    )
);


/*priotry for blog*/
$priotry_blog_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-blog-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-blog-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Blog', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_blog_customizer['business-click-priority-blog-change']) ? $priotry_blog_customizer['business-click-priority-blog-change'] : 100,
        'description'           =>   ''
    )
);

/*priotry for partner*/
$priotry_partner_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-partner-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-partner-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Brands', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>  isset($priotry_partner_customizer['business-click-priority-partner-change']) ? $priotry_partner_customizer['business-click-priority-partner-change'] : 110,
        'description'           =>   ''
    )
);


/*priotry for Contact Us*/
$priotry_contact_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-contact-us-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-contact-us-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Contact Us', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_contact_customizer['business-click-priority-contact-us-change']) ? $priotry_contact_customizer['business-click-priority-contact-us-change'] : 120,
        'description'           =>   ''
    )
);

/*priotry for Short-Code1*/
$priotry_short_code1_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-short-code1-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-short-code1-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Short Code First', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>  isset($priotry_short_code1_customizer['business-click-priority-short-code1-change']) ? $priotry_short_code1_customizer['business-click-priority-short-code1-change'] : 130,
        'description'           =>   ''
    )
);

/*priotry for Short-Code2*/
$priotry_short_code2_customizer = get_theme_mod('business_click_options');

$business_click_settings_controls['business-click-priority-short-code2-change'] = array(
    'setting' =>       array(
        'default'              =>   $business_click_customizer_defaults['business-click-priority-short-code2-change'],
    ),
    'control' =>   array(
        'label'                 =>    esc_html__( 'Re-order for Short Code Second', 'business-click' ),
        'section'               =>   'business-click-priority-options',
        'type'                  =>   'select',
        'choices'               =>   $business_click_priority_change,
        'priority'              =>   isset($priotry_short_code2_customizer['business-click-priority-short-code2-change']) ? $priotry_short_code2_customizer['business-click-priority-short-code2-change'] : 140,
        'description'           =>   ''
    )
);

/*reset options*/
$business_click_settings_controls['business-click-section-priority-reset'] = array(
    'setting' => array(
        'default'   => $business_click_customizer_defaults['business-click-section-priority-reset'],
        'transport'            => 'postmessage',
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Reset', 'business-click' ),
        'description'           =>  esc_html__( 'Caution: Reset all section priority settings above to default. Refresh the page after saving to view the effects', 'business-click' ),
        'section'               => 'business-click-priority-options',
        'type'                  => 'checkbox',
        'priority'              => 220,
        'active_callback'       => ''
    )
);

