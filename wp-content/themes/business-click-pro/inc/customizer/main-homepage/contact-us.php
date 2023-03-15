<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-contact-section-enable']					= 1;
$business_click_customizer_defaults['business-click-contact-section-title']						= '';
$business_click_customizer_defaults['business-click-contact-background-image']     				= '';
$business_click_customizer_defaults['business-click-contact-section-sub-title']					= '';
$business_click_customizer_defaults['business-click-contact-section-align-title-with-text']		= 0;
$business_click_customizer_defaults['business-click-contact-section-enable-phone']				= 0;
$business_click_customizer_defaults['business-click-contact-section-enable-email']				= 0;
$business_click_customizer_defaults['business-click-contact-section-enable-location']			= 0;
$business_click_customizer_defaults['business-click-contact-section-enable-social-menu']		= 0;
$business_click_customizer_defaults['business-click-contact-section-contact-form-short-code']	= '';

/*create a section for contct*/
$priotry_contact_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['business-click-contact-section'] = array(
	'title'							=> esc_html__('Contact Us Section','business-click'),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> isset($priotry_contact_section_customizer['business-click-priority-contact-us-change']) ? $priotry_contact_section_customizer['business-click-priority-contact-us-change'] : 120,
);

/*Enable contact section*/
$business_click_settings_controls['business-click-contact-section-enable'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-enable']
	),
	'control' => array(
		'label'						=> esc_html__('Show Contact Us Section','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'active_callback'			=> ''
	)

);

/*section Title */
$business_click_settings_controls['business-click-contact-section-title'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-title']
	),
	'control' => array(
		'label'						=> esc_html__('Section Title','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'text',
		'priority'					=> 20,
		'active_callback'			=> ''
	)

);


/*section sub Title */
$business_click_settings_controls['business-click-contact-section-sub-title'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-sub-title']
	),
	'control' => array(
		'label'						=> esc_html__('Section Sub Title','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'text',
		'priority'					=> 22,
		'active_callback'			=> ''
	)

);

/*Background image upload*/
$business_click_settings_controls['business-click-contact-background-image'] = array(
    'setting' => array(
        'default'                   => $business_click_customizer_defaults['business-click-contact-background-image']
    ),
    'control' => array(
        'label'                     => esc_html__('Upload Background Image','business-click'),
        'section'                   => 'business-click-contact-section',
        'type'                      => 'image',
        'priority'                  => 24,
        'active_callback'           => ''
    )
);

/*Align title with text*/
$business_click_settings_controls['business-click-contact-section-align-title-with-text'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-align-title-with-text']
	),
	'control' => array(
		'label'						=> esc_html__('Align Title with Text','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 25,
		'active_callback'			=> ''
	)

);

/*enable phone  */
$business_click_settings_controls['business-click-contact-section-enable-phone'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-enable-phone']
	),
	'control' => array(
		'label'						=> esc_html__('Show Phone Number','business-click'),
		'description'				=> esc_html__('Whatever kept in Top Header Bar','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 30,
		'active_callback'			=> ''
	)

);

/*Enable Email */
$business_click_settings_controls['business-click-contact-section-enable-email'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-enable-email']
	),
	'control' => array(
		'label'						=> esc_html__('Show Email','business-click'),
		'description'				=> esc_html__('Whatever kept in Top Header Bar','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 40,
		'active_callback'			=> ''
	)

);

/* Enable Location */
$business_click_settings_controls['business-click-contact-section-enable-location'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-enable-location']
	),
	'control' => array(
		'label'						=> esc_html__('Show Location','business-click'),
		'description'				=> esc_html__('Whatever kept in Top Header Bar','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 50,
		'active_callback'			=> ''
	)

);

/*Location */
$business_click_settings_controls['business-click-contact-section-enable-social-menu'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-enable-social-menu']
	),
	'control' => array(
		'label'						=> esc_html__('Show Social Icons','business-click'),
		'description'				=> esc_html__('Whatever you have kept in Top Header Bar','business-click'),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'checkbox',
		'priority'					=> 50,
		'active_callback'			=> ''
	)

);

/*contact form short code */
$business_click_settings_controls['business-click-contact-section-contact-form-short-code'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-contact-section-contact-form-short-code']
	),
	'control' => array(
		'label'						=> esc_html__('Shortcode for Contact Form','business-click'),
		'description'       => sprintf( '%1$s <a href="https://wordpress.org/plugins/contact-form-7" target="_blank"> %2$s </a> %3$s',  esc_html__( 'Note: Install ', 'business-click' ), esc_html__( 'Contact Form 7', 'business-click' ), esc_html__( 'Plugin to get a Shortcode.', 'business-click' ) ),
		'section'					=> 'business-click-contact-section',
		'type'						=> 'text',
		'priority'					=> 60,
		'active_callback'			=> ''
	)

);