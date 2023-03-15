<?php
if ( ! function_exists( 'business_click_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since business-click 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function business_click_before_footer() {

        global $business_click_customizer_all_values;

    ?>

    <?php do_action( 'business_click_link' );?>

    <!-- full width footer -->
    <?php if(is_active_sidebar('full-width-footer')){ ?>
        <section id="evt-full-width-widgets" class="section">
            <div class="evt-img-overlay">
                <div class="container">
                    <?php                
                        dynamic_sidebar('full-width-footer');
                    ?>
                </div>
            </div>
        </section><!-- full width widget ended -->
    <?php }//end if is_active ?>
    <!-- end full width footer -->

    
    <section class="section footer-section fp-auto-height">
    <footer class="site-footer">
    <?php
    }
endif;
add_action( 'business_click_action_before_footer', 'business_click_before_footer', 10 );

if ( ! function_exists( 'business_click_widget_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since business-click 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function business_click_widget_before_footer() {
        global $business_click_customizer_all_values;
        if( !is_active_sidebar('full-width-footer') && !is_active_sidebar( 'footer-col-one' ) && !is_active_sidebar( 'footer-col-two' ) && !is_active_sidebar( 'footer-col-three' ) && !is_active_sidebar( 'footer-col-four' )){
            return false;
        }
        $col = 'col';
        ?>

        <div class="evt-img-overlay">
            <section class="evt-footer-widget">
                <div class="container">
                    <div class="row">
                         <?php if( is_active_sidebar( 'footer-col-one' )  ) : ?>
                            <div class="<?php echo esc_attr( $col );?> evt-footer-widget-col evision-animate fadeIn">
                                <?php dynamic_sidebar( 'footer-col-one' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( is_active_sidebar( 'footer-col-two' )  ) : ?>
                            <div class="<?php echo esc_attr( $col );?> evt-footer-widget-col evision-animate fadeIn">
                                <?php dynamic_sidebar( 'footer-col-two' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( is_active_sidebar( 'footer-col-three' )  ) : ?>
                            <div class="<?php echo esc_attr( $col );?> evt-footer-widget-col evision-animate fadeIn">
                                <?php dynamic_sidebar( 'footer-col-three' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( is_active_sidebar( 'footer-col-four' ) ) : ?>
                            <div class="<?php echo esc_attr( $col );?> evt-footer-widget-col evision-animate fadeIn">
                                <?php dynamic_sidebar( 'footer-col-four' ); ?>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </section>
        </div><!-- evt-img-overlay -->
    
    <?php
    }
endif;
add_action( 'business_click_action_widget_before_footer', 'business_click_widget_before_footer', 10 );

if ( ! function_exists( 'business_click_footer' ) ) :
    /**
     * Footer content
     *
     * @since business-click 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_click_footer() {
        global $business_click_customizer_all_values;
        ?> 
        <?php if( 1 == $business_click_customizer_all_values['business-click-enable-footer-section'] ) { ?>
            <section>
                <div class="site-info">
                    <div class="container">
                        <?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        if(isset($business_click_customizer_all_values['business-click-copyright-text'])){
                            echo '<span class= "evt-copyright">';
                            echo wp_kses_post( $business_click_customizer_all_values['business-click-copyright-text'] );
                            echo '</span>';

                        }
                        ?>
                        </a>
                        
                        
                        <?php
                        if( 1 == $business_click_customizer_all_values['business-click-enable-theme-name']){
                        ?>
                        <span class="sep"> | </span>
                        
                        <?PHP    /* translators: 1: Theme name, 2: Theme author. */
                             printf( esc_html__( 'Theme: %1$s by %2$s', 'business-click' ), 'Business Click Pro', sprintf('<a href="%s" target = "_blank" rel="designer">%s</a>', esc_url( 'http://evisionthemes.com/' ), esc_html__( 'eVisionThemes', 'business-click' ) )  ); 

                         } ?>
                     </div>
                </div>
            </section>
        <?php } ?>    

    </footer>
    <!-- footer section ends -->
    </section>

        </div><!-- #content -->
    </div> <!-- #page -->
    <?php
    }
endif;
add_action( 'business_click_action_footer', 'business_click_footer', 10 ); 

if ( ! function_exists( 'business_click_page_end' ) ) :
    /**
     * Page end
     *
     * @since business-click 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_click_page_end() {
    global $business_click_customizer_all_values;
        ?>
    <?php
    $scroll_to_top = $business_click_customizer_all_values['business-click-enable-scroll-to-top'];
     if( 1 == $scroll_to_top) {
        $scroll_to_top_id = '';
        // if full page is enabled and if first Full Page Nav Item 1 is not empty
        $scroll_to_top_id = 'page';
        ?>
            <a id="evt-scroll-top" class="btn" href="#<?php echo $scroll_to_top_id;?>"><i class="fa fa-angle-up"></i></a>
        <?php
        } ?>
    <?php }
endif;
add_action( 'business_click_action_after', 'business_click_page_end', 10 );

        
    