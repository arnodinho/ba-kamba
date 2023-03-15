<?php
function imporatnt_links_customizer_register( $wp_customize ) {
    $wp_customize->add_section( 'section_important_links', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__( 'Important Links', 'business-click' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'url_field_id', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );

    $wp_customize->add_control( 'button_support', array(
	    'type' => 'button',
	    'description'           => sprintf( '<a href="https://evisionthemes.com/support/" target="_blank" class="button-important"> %1$s </a>', esc_html__( 'Support', 'business-click' ) ),
	    'settings' => array(),
        'input_attrs' => array('class'=> "hidden"),
	    'priority' => 10,
	    'section' => 'section_important_links',
    
	) );

    $wp_customize->add_control( 'button_documentation', array(
	    'type' => 'button',
	    'description'           => sprintf( '<a href="https://evisionthemes.com/documentation/" target="_blank" class="button-important"> %1$s </a>', esc_html__( 'Documentation', 'business-click' ) ),
	    'settings' => array(),
        'input_attrs' => array('class'=> "hidden"),
	    'priority' => 20,
	    'section' => 'section_important_links',
    
	) );

	
	$wp_customize->add_control( 'button_more_themes', array(
	    'type' => 'button',
	    'description'           => sprintf( '<a  href="https://evisionthemes.com/product/tag/premium/" target="_blank" class="button-important"> %1$s </a>', esc_html__( 'More Themes', 'business-click' ) ),
	    'settings' => array(),
        'input_attrs' => array('class'=> "hidden"),
	    'priority' => 30,
	    'section' => 'section_important_links',
    
	) );

	$wp_customize->add_control( 'button_offer', array(
	    'type' => 'button',
	    'description'           => sprintf( '<a  href="https://evisionthemes.com/product/theme-bundle/" target="_blank" class="button-important"> %1$s </a>', esc_html__( 'Bundle Offer', 'business-click' ) ),
	    'settings' => array(),
        'input_attrs' => array('class'=> "hidden"),
	    'priority' => 40,
	    'section' => 'section_important_links',
    
	) );

}
add_action( 'customize_register', 'imporatnt_links_customizer_register' );