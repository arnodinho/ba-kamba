<?php

global $business_click_panels;
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*font array*/
global $business_click_google_fonts;
$business_click_google_fonts = array(
    'Open+Sans:400,400italic,600,700'               => 'Open Sans',
    'Roboto:400,500,300,700,400italic'              => 'Roboto',
    'Lato:400,300,400italic,900,700'                => 'Lato',
    'Slabo+27px'                                    => 'Slabo 27px',
    'Oswald:400,300,700'                            => 'Oswald',
    'Roboto+Condensed:400,300,400italic,700'        => 'Roboto Condensed',
    'Source+Sans+Pro:400,400italic,600,900,300'     => 'Source Sans Pro',
    'Lora:400,400italic,700,700italic'              => 'Lora',
    'Montserrat:400,700'                            => 'Montserrat',
    'PT+Sans:400,400italic,700'                     => 'PT Sans',
    'Open+Sans+Condensed:300,300italic,700'         => 'Open Sans Condensed',
    'Raleway:400,300,500,600,700,900'               => 'Raleway',
    'Droid+Sans:400,700'                            => 'Droid Sans',
    'Ubuntu:400,400italic,500,700'                  => 'Ubuntu',
    'Droid+Serif:400,400italic,700'                 => 'Droid Serif',
    'Roboto+Slab:400,300,700'                       => 'Roboto Slab',
    'Arimo:400,400italic,700'                       => 'Arimo',
    'Merriweather:400,400italic,300,900,700'        => 'Merriweather',
    'PT+Sans+Narrow:400,700'                        => 'PT Sans Narrow',
    'Poiret+One'                                    => 'Poiret One',
    'Noto +Sans:400,400italic,700'                  => 'Noto Sans',
    'Titillium+Web:400,300,400italic,700,900'       => 'Titillium Web',
    'PT+Serif:400,400italic,700'                    => 'PT Serif',
    'Bitter:400,400italic,700'                      => 'Bitter',
    'Indie+Flower'                                  => 'Indie Flower',
    'Yanone+Kaffeesatz:400,300,700'                 => 'Yanone Kaffeesatz',
    'Dosis:400,300,600,800'                         => 'Dosis',
    'Arvo:400,400italic,700'                        => 'Arvo',
    'Lobster'                                       => 'Lobster',
    'Cabin:400,400italic,500,600,700'               => 'Cabin',
    'Fjalla+One'                                    => 'Fjalla One',
    'Oxygen:400,300,700'                            => 'Oxygen',
    'Playfair+Display:400,400italic,700,900'        => 'Playfair Display',
    'Noto +Serif:400,400italic,700'                 => 'Noto Serif',
    'Hind:400,300,600,700'                          => 'Hind',
    'Muli:400,300italic,300'                        => 'Muli',
    'Nunito:400,300,700'                            => 'Nunito',
    'Bree+Serif'                                    => 'Bree Serif',
    'Abel'                                          => 'Abel',
    'Vollkorn:400,400italic,700'                    => 'Vollkorn',
    'Inconsolata:400,700'                           => 'Inconsolata',
    'Francois+One'                                  => 'Francois One',
    'Archivo+Narrow:400,400italic,700'              => 'Archivo Narrow',
    'Ubuntu+Condensed'                              => 'Ubuntu Condensed',
    'Josefin+Sans:400,600,700,400italic'            => 'Josefin Sans',
    'Fira+Sans:400,500'                             => 'Fira Sans',
    'Signika:400,300,700'                           => 'Signika',
    'Libre+Baskerville:400,400italic,700'           => 'Libre Baskerville',
    'Cuprum:400,400italic'                          => 'Cuprum',
    'Play:400,700'                                  => 'Play',
    'Pacifico'                                      => 'Pacifico',
    'Shadows+Into+Light'                            => 'Shadows Into Light',
    'Asap:400,400italic,700'                        => 'Asap',
    'Alegreya:400,400italic,700,900'                => 'Alegreya',
    'Maven+Pro:400,500,700,900'                     => 'Maven Pro',
    'Exo +2:400,300,400italic,600,700,900'          => 'Exo 2',
    'Sigmar+One'                                    => 'Sigmar One',
    'Merriweather+Sans:400,400italic,700,800'       => 'Merriweather Sans',
    'Crimson+Text:400,400italic,600,700'            => 'Crimson Text',
    'Anton'                                         => 'Anton',
    'Rokkitt:400,700'                               => 'Rokkitt',
    'Karla:400,400italic,700'                       => 'Karla',
    'Quicksand:400,700'                             => 'Quicksand',
    'Andada'                                        => 'Andada',
    'Varela+Round'                                  => 'Varela Round',
    'Bangers'                                       => 'Bangers',
    'Righteous'                                     => 'Righteous',
    'PT+Sans+Caption:400,700'                       => 'PT Sans Caption',
    'Dancing+Script:400,700'                        => 'Dancing Script',
    'Monda:400,700'                                 => 'Monda',
    'Exo:400,300,400italic,600,800'                 => 'Exo',
    'Abril+Fatface'                                 => 'Abril Fatface',
    'Pathway+Gothic+One'                            => 'Pathway Gothic One',
    'Questrial'                                     => 'Questrial',
    'Josefin+Slab:400,400italic,700,600'            => 'Josefin Slab',
    'Istok+Web:400,400italic,700'                   => 'Istok Web',
    'Patua+One'                                     => 'Patua One',
    'News+Cycle:400,700'                            => 'News Cycle',
    'BenchNine:400,700'                             => 'BenchNine',
    'Ropa+Sans:400,400italic'                       => 'Ropa Sans',
    'Crete+Round:400,400italic'                     => 'Crete Round',
    'Covered+By+Your+Grace'                         => 'Covered By Your Grace',
    'Hammersmith+One'                               => 'Hammersmith One',
    'Quattrocento+Sans:400,700,400italic'           => 'Quattrocento Sans',
    'Pontano+Sans'                                  => 'Pontano Sans',
    'Fredoka+One'                                   => 'Fredoka One',
    'EB+Garamond'                                   => 'EB Garamond',
    'Old+Standard +TT:400,400italic,700'            => 'Old Standard TT',
    'Noticia+Text:400,400italic,700'                => 'Noticia Text',
    'Kaushan+Script'                                => 'Kaushan Script',
    'Voltaire'                                      => 'Voltaire',
    'ABeeZee:400,400italic'                         => 'ABeeZee',
    'Comfortaa:400,300,700'                         => 'Comfortaa',
    'Russo+One'                                     => 'Russo One',
    'Cinzel:400,700,900'                            => 'Cinzel',
    'Sanchez:400,400italic'                         => 'Sanchez',
    'Lobster+Two:400,700,700italic'                 => 'Lobster Two',
    'Alfa+Slab+One'                                 => 'Alfa Slab One',
    'Passion+One:400,700,900'                       => 'Passion One',
    'Cantarell:400,400italic,700'                   => 'Cantarell',
    'Tinos:400,400italic,700'                       => 'Tinos',
    'Lateef'                                        => 'Lateef',
    'Archivo+Black'                                 => 'Archivo Black',
    'Cabin+Condensed:400,500,600,700'               => 'Cabin Condensed',
    'Satisfy'                                       => 'Satisfy',
    'Bevan'                                         => 'Bevan',
    'Economica:400,700,400italic'                   => 'Economica',
    'Playball'                                      => 'Playball',
    'Kreon:400,300,700'                             => 'Kreon',
    'Didact+Gothic'                                 => 'Didact Gothic',
    'Handlee'                                       => 'Handlee',
    'Cookie'                                        => 'Cookie',
    'Jura:400,300,500,600'                          => 'Jura',
    'Amaranth:400,400italic,700'                    => 'Amaranth',
    'Fugaz+One'                                     => 'Fugaz One',
    'Tangerine:400,700'                             => 'Tangerine',
    'Squada+One'                                    => 'Squada One',
    'Great+Vibes'                                   => 'Great Vibes',
    'Six+Caps'                                      => 'Six Caps',
    'Limelight'                                     => 'Limelight',
    'Carme'                                         => 'Carme',
    'Cherry+Cream+Soda'                             => 'Cherry Cream Soda',
    'Aldrich'                                       => 'Aldrich',
    'Alex+Brush'                                    => 'Alex Brush',
    'Fredericka+the+Great'                          => 'Fredericka the Great',
    'Catamaran:400,600,700'                         => 'Catamaran'
);

/*defaults values*/
$business_click_customizer_defaults['business-click-font-family-site-identity']     = 'Catamaran:400,600,700';
$business_click_customizer_defaults['business-click-title-menu']                    = '';

$business_click_customizer_defaults['business-click-font-family-menu']              = 'Catamaran:400,600,700';
$business_click_customizer_defaults['business-click-font-family-menu-size']         = '20';
$business_click_customizer_defaults['business-click-font-family-menu-line-height']  = '30';
$business_click_customizer_defaults['business-click-font-family-menu-letter']       = '0';
$business_click_customizer_defaults['business-click-font-family-menu-weight']       = '600';
$business_click_customizer_defaults['business-click-font-family-menu-italic']       = 0;
$business_click_customizer_defaults['business-click-font-family-menu-uppercase']    = 0;

$business_click_customizer_defaults['business-click-title-heading']                   = '';
$business_click_customizer_defaults['business-click-font-family-heading']               = 'Catamaran:400,600,700';
$business_click_customizer_defaults['business-click-font-family-heading-size']        = '30';
$business_click_customizer_defaults['business-click-font-family-heading-line-height'] = '30';
$business_click_customizer_defaults['business-click-font-family-heading-letter']      = '0';
$business_click_customizer_defaults['business-click-font-family-heading-weight']      = '700';
$business_click_customizer_defaults['business-click-font-family-heading-italic']      = 0;
$business_click_customizer_defaults['business-click-font-family-heading-uppercase']   = 0;
$business_click_customizer_defaults['business-click-font-family-heading-h1-size']     = '30';
$business_click_customizer_defaults['business-click-font-family-heading-h2-size']     = '26';
$business_click_customizer_defaults['business-click-font-family-heading-h3-size']     = '20';

$business_click_customizer_defaults['business-click-title-body']                    = '';
$business_click_customizer_defaults['business-click-font-family-body-p']            = 'Raleway:400,300,500,600,700,900';
$business_click_customizer_defaults['business-click-font-family-body-size']         = '16';
$business_click_customizer_defaults['business-click-font-family-body-line-height']  = '24';
$business_click_customizer_defaults['business-click-font-family-body-letter']       = '0';
$business_click_customizer_defaults['business-click-font-family-body-weight']       = '400';
$business_click_customizer_defaults['business-click-font-family-body-italic']       = 0;
$business_click_customizer_defaults['business-click-font-family-body-uppercase']    = 0;

$business_click_customizer_defaults['business-click-title-other']                   = '';
$business_click_customizer_defaults['business-click-font-family-title-size']        = 30;
$business_click_customizer_defaults['business-click-font-family-content-size']      = 16;
$business_click_customizer_defaults['business-click-font-family-button-text']       = 'Raleway:400,300,500,600,700,900';
$business_click_customizer_defaults['business-click-footer-copy-right-text']        = 'Raleway:400,300,500,600,700,900';
$business_click_customizer_defaults['business-click-font-family-reset']           = '';



/*creating panel for fonts-setting*/
$business_click_panels['business-click-fonts'] =
    array(
        'title'          => esc_html__( 'Font Setting', 'business-click' ),
        'panel'          => 'business-click-theme-options',
        'priority'       => 120
    );


/**
 * Reset Priority settings to default
 *
 * @since business-click 1.0.0
 */
if(!function_exists('business_click_font_family_reset') ):

    function business_click_font_family_reset(){

        global $business_click_customizer_saved_values;
        $business_click_customizer_saved_values = business_click_get_all_options();

        if( 1 == intval($business_click_customizer_saved_values['business-click-font-family-reset'])){
            global $business_click_customizer_defaults;

            $business_click_customizer_saved_values['business-click-priority-slider-change']        = $business_click_customizer_defaults['business-click-priority-slider-change'];


            $business_click_customizer_saved_values['business-click-font-family-site-identity'] = $business_click_customizer_defaults['business-click-font-family-site-identity'];
            $business_click_customizer_saved_values['business-click-title-menu'] = $business_click_customizer_defaults['business-click-title-menu'];

            $business_click_customizer_saved_values['business-click-font-family-menu'] = $business_click_customizer_defaults['business-click-font-family-menu'];
            $business_click_customizer_saved_values['business-click-font-family-menu-size'] = $business_click_customizer_defaults['business-click-font-family-menu-size'];
            $business_click_customizer_saved_values['business-click-font-family-menu-line-height'] = $business_click_customizer_defaults['business-click-font-family-menu-line-height'];
            $business_click_customizer_saved_values['business-click-font-family-menu-letter'] = $business_click_customizer_defaults['business-click-font-family-menu-letter'];
            $business_click_customizer_saved_values['business-click-font-family-menu-weight'] = $business_click_customizer_defaults['business-click-font-family-menu-weight'];
            $business_click_customizer_saved_values['business-click-font-family-menu-italic'] = $business_click_customizer_defaults['business-click-font-family-menu-italic'];
            $business_click_customizer_saved_values['business-click-font-family-menu-uppercase'] = $business_click_customizer_defaults['business-click-font-family-menu-uppercase'];

            $business_click_customizer_saved_values['business-click-title-heading'] = $business_click_customizer_defaults['business-click-title-heading'];
            $business_click_customizer_saved_values['business-click-font-family-heading'] = $business_click_customizer_defaults['business-click-font-family-heading'];
            $business_click_customizer_saved_values['business-click-font-family-heading-size'] = $business_click_customizer_defaults['business-click-font-family-heading-size'];
            $business_click_customizer_saved_values['business-click-font-family-heading-line-height'] = $business_click_customizer_defaults['business-click-font-family-heading-line-height'];
            $business_click_customizer_saved_values['business-click-font-family-heading-letter'] = $business_click_customizer_defaults['business-click-font-family-heading-letter'];
            $business_click_customizer_saved_values['business-click-font-family-heading-weight'] = $business_click_customizer_defaults['business-click-font-family-heading-weight'];
            $business_click_customizer_saved_values['business-click-font-family-heading-italic'] = $business_click_customizer_defaults['business-click-font-family-heading-italic'];
            $business_click_customizer_saved_values['business-click-font-family-heading-uppercase'] = $business_click_customizer_defaults['business-click-font-family-heading-uppercase'];
            $business_click_customizer_saved_values['business-click-font-family-heading-h1-size'] = $business_click_customizer_defaults['business-click-font-family-heading-h1-size'];
            $business_click_customizer_saved_values['business-click-font-family-heading-h2-size'] = $business_click_customizer_defaults['business-click-font-family-heading-h2-size'];
            $business_click_customizer_saved_values['business-click-font-family-heading-h3-size'] = $business_click_customizer_defaults['business-click-font-family-heading-h3-size'];

            $business_click_customizer_saved_values['business-click-title-body'] = $business_click_customizer_defaults['business-click-title-body'];
            $business_click_customizer_saved_values['business-click-font-family-body-p'] = $business_click_customizer_defaults['business-click-font-family-body-p'];
            $business_click_customizer_saved_values['business-click-font-family-body-size'] = $business_click_customizer_defaults['business-click-font-family-body-size'];
            $business_click_customizer_saved_values['business-click-font-family-body-line-height'] = $business_click_customizer_defaults['business-click-font-family-body-line-height'];
            $business_click_customizer_saved_values['business-click-font-family-body-letter'] = $business_click_customizer_defaults['business-click-font-family-body-letter'];
            $business_click_customizer_saved_values['business-click-font-family-body-weight'] = $business_click_customizer_defaults['business-click-font-family-body-weight'];
            $business_click_customizer_saved_values['business-click-font-family-body-italic'] = $business_click_customizer_defaults['business-click-font-family-body-italic'];
            $business_click_customizer_saved_values['business-click-font-family-body-uppercase'] = $business_click_customizer_defaults['business-click-font-family-body-uppercase'];

            $business_click_customizer_saved_values['business-click-title-other'] = $business_click_customizer_defaults['business-click-title-other'];
            $business_click_customizer_saved_values['business-click-font-family-title-size'] = $business_click_customizer_defaults['business-click-font-family-title-size'];
            $business_click_customizer_saved_values['business-click-font-family-content-size'] = $business_click_customizer_defaults['business-click-font-family-content-size'];
            $business_click_customizer_saved_values['business-click-font-family-button-text'] = $business_click_customizer_defaults['business-click-font-family-button-text'];
            $business_click_customizer_saved_values['business-click-footer-copy-right-text'] = $business_click_customizer_defaults['business-click-footer-copy-right-text'];

            $business_click_customizer_saved_values['business-click-font-family-reset']        = '';

            /*reseting field*/
            business_click_reset_options($business_click_customizer_saved_values);

        }
        else{
            return '';
        }
    }
endif;
add_action( 'customize_save_after','business_click_font_family_reset' );

/*section*/
$business_click_sections['business-click-family'] =
    array(
        'priority'       => 120,
        'title'          => esc_html__( 'Fonts', 'business-click' ),
        'panel'          => 'business-click-theme-options',
    );

// MENU
$business_click_settings_controls['business-click-title-menu'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-menu'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Menu', 'business-click' ) ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'input_attrs' => array('class'=> "hidden"),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-menu'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Menu Font Family', 'business-click' ),
            'description'           => esc_html__( 'Primary menu font family', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'select',
            'choices'               => $business_click_google_fonts,
            'priority'              => 11,
            'active_callback'       => ''
        )
    );
// added - make dynamic
$business_click_settings_controls['business-click-font-family-menu-size'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu-size'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Size', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 12,
            'active_callback'       => ''
        )
    );
// added - make dynamic - line-height
$business_click_settings_controls['business-click-font-family-menu-line-height'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu-line-height'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Line Height', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 13,
            'active_callback'       => ''
        )
    );
// added - make dynamic - letter
$business_click_settings_controls['business-click-font-family-menu-letter'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu-letter'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Letter Spacing', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 14,
            'active_callback'       => ''
        )
    );
// added - make dynamic - weight
$business_click_settings_controls['business-click-font-family-menu-weight'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu-weight'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Weight', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );
// added - make dynamic - italic
$business_click_settings_controls['business-click-font-family-menu-italic'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu-italic'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Italic', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'checkbox',
            'priority'              => 16,
            'active_callback'       => ''
        )
    );
// added - make dynamic - uppercase
$business_click_settings_controls['business-click-font-family-menu-uppercase'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-menu-uppercase'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Uppercase', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'checkbox',
            'priority'              => 17,
            'active_callback'       => ''
        )
    );
//End MENU

// HEADING
$business_click_settings_controls['business-click-title-heading'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-heading'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Headings', 'business-click' ) ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'input_attrs' => array('class'=> "hidden"),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-heading'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Heading Font Family', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'select',
            'choices'               => $business_click_google_fonts,
            'priority'              => 21,
            'active_callback'       => ''
        )
    );
// added
$business_click_settings_controls['business-click-font-family-heading-size'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-size'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Size', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 22,
            'active_callback'       => ''
        )
    );
// added - make dynamic - line-height
$business_click_settings_controls['business-click-font-family-heading-line-height'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-line-height'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Line Height', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 23,
            'active_callback'       => ''
        )
    );
// added - make dynamic - letter
$business_click_settings_controls['business-click-font-family-heading-letter'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-letter'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Letter Spacing', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 24,
            'active_callback'       => ''
        )
    );
// added - make dynamic - weight
$business_click_settings_controls['business-click-font-family-heading-weight'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-weight'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Weight', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 25,
            'active_callback'       => ''
        )
    );
// added - make dynamic - italic
$business_click_settings_controls['business-click-font-family-heading-italic'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-italic'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Italic', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'checkbox',
            'priority'              => 26,
            'active_callback'       => ''
        )
    );
// added - make dynamic - uppercase
$business_click_settings_controls['business-click-font-family-heading-uppercase'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-uppercase'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Uppercase', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'checkbox',
            'priority'              => 27,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-heading-h1-size'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-h1-size'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'H1 Font Size', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 28,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-heading-h2-size'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-h2-size'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'H2 Font Size', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 29,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-heading-h3-size'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-heading-h3-size'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'H3 Font Size', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 29,
            'active_callback'       => ''
        )
    );
// End Heading

// BODY
$business_click_settings_controls['business-click-title-body'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-body'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Body', 'business-click' ) ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'input_attrs' => array('class'=> "hidden"),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-body-p'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-p'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Body Font Family', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'select',
            'choices'               => $business_click_google_fonts,
            'priority'              => 31,
            'active_callback'       => ''
        )
    );

// added
$business_click_settings_controls['business-click-font-family-body-size'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-size'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Size', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 32,
            'active_callback'       => ''
        )
    );
// added - make dynamic - line-height
$business_click_settings_controls['business-click-font-family-body-line-height'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-line-height'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Line Height', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 33,
            'active_callback'       => ''
        )
    );

// added - make dynamic - letter
$business_click_settings_controls['business-click-font-family-body-letter'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-letter'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Letter Spacing', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 34,
            'active_callback'       => ''
        )
    );

// added - make dynamic - weight
$business_click_settings_controls['business-click-font-family-body-weight'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-weight'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Weight', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'priority'              => 35,
            'active_callback'       => ''
        )
    );

// added - make dynamic - italic
$business_click_settings_controls['business-click-font-family-body-italic'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-italic'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Italic', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'checkbox',
            'priority'              => 36,
            'active_callback'       => ''
        )
    );

// added - make dynamic - uppercase
$business_click_settings_controls['business-click-font-family-body-uppercase'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-body-uppercase'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Uppercase', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'checkbox',
            'priority'              => 37,
            'active_callback'       => ''
        )
    );
// End BODY

// OTHER - site identity
/*setting - controls*/
$business_click_settings_controls['business-click-title-other'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-title-other'],
        ),
        'control' => array(
            'description'           => sprintf( '<div class="tab-title"> %1$s </div>', esc_html__( 'Others', 'business-click' ) ),
            'section'               => 'business-click-family',
            'type'                  => 'text',
            'input_attrs' => array('class'=> "hidden"),
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
$business_click_settings_controls['business-click-font-family-site-identity'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-site-identity'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Site Identity Font Family', 'business-click' ),
            'description'           => esc_html__( 'Site title and tagline font family', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'select',
            'choices'               => $business_click_google_fonts,
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

// button
$business_click_settings_controls['business-click-font-family-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-font-family-button-text'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Button Text Font Family', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'select',
            'choices'               => $business_click_google_fonts,
            'priority'              => 60,
            'active_callback'       => ''
        )
    );

// copyright
$business_click_settings_controls['business-click-footer-copy-right-text'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-footer-copy-right-text'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Font Family for Copy Right Text', 'business-click' ),
            'section'               => 'business-click-family',
            'type'                  => 'select',
            'choices'               => $business_click_google_fonts,
            'priority'              => 70,
            'active_callback'       => ''
        )
    );



/*reset options*/
$business_click_settings_controls['business-click-font-family-reset'] = array(
    'setting' => array(
        'default'   => $business_click_customizer_defaults['business-click-font-family-reset'],
        'transport'            => 'postmessage',
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Reset', 'business-click' ),
        'description'           =>  esc_html__( 'Caution: Reset all fonts settings above to default. Refresh the page after saving to view the effects', 'business-click' ),
        'section'               => 'business-click-family',
        'type'                  => 'checkbox',
        'priority'              => 80,
        'active_callback'       => ''
    )
);