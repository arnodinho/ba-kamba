<?php
if( !function_exists('portfolio_section_array') ) :
    /**
    * portfolio section
    *
    * @since business click 1.0.0
    *
    * @param null
    * @return  array
    *
    */
    function portfolio_section_array(){
        global $business_click_customizer_all_values;

        $portfolio_section_title            = stripslashes( $business_click_customizer_all_values['business-click-portfolio-section-title'] );
        $portfolio_section_sub_title        = stripslashes( $business_click_customizer_all_values['business-click-portfolio-section-sub-title'] );
        $portfolio_background_image         = $business_click_customizer_all_values['business-click-portfolio-background-image'];

        $enable_protfolio_post_title        = $business_click_customizer_all_values['business-click-portfolio-enable-category-title'];

        $theme_background                   = $business_click_customizer_all_values['business-click-portfolio-background-theme'];

        $repeated_post                      = array('portfolio-category-post-ids'); 

        $portfolio_layout                   = $business_click_customizer_all_values['business-click-portfolio-layout-options'];
        $button_text                        = stripslashes ( $business_click_customizer_all_values['business-click-portfolio-button-text'] );
        $button_url                         = $business_click_customizer_all_values['business-click-portfolio-button-url'];

        $business_click_prot_cat            = evision_customizer_get_repeated_all_value(10,$repeated_post); 

        $business_post_num                  = $business_click_customizer_all_values['business-click-portfolio-number-of-post'];

        if( ! $business_click_customizer_all_values['business-click-portfolio-enable'] ){
            return null;
        } ?>

        <?php if( !empty($portfolio_section_title) || !empty($portfolio_section_sub_title) || !empty($portfolio_background_image) || !empty($business_click_prot_cat) ) {  ?>

            <section id="evt-portfolio" class="section text-center img-cover <?php echo esc_html($theme_background);?>-background <?php echo esc_html($portfolio_layout);?> <?php if($portfolio_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($portfolio_background_image);?>');"> 
                <div class="evt-img-overlay">
                    <div class="container">
                        <?php if(!empty($portfolio_section_title)) { ?>
                            <h2 class="widget-title evision-animate slideInDown"><?php echo esc_html($portfolio_section_title );?></h2>
                        <?php } ?> 
                        <?php if(!empty($portfolio_section_sub_title)) { ?>   
                            <p class="title-description evision-animate slideInDown"><?php echo esc_html( $portfolio_section_sub_title );?></p>
                        <?php } 
                        
                        if(!empty($business_click_prot_cat) ) {  ?>
                            <div id="filters" class="button-group evision-animate zoomIn"> 
                            <?php 
                                $business_click_port_post_cat_id    = array();
                                $i= 0;
                                foreach( $business_click_prot_cat as $business_click_prot_cats ){
                                    if($i < $business_post_num){

                                        if( 0 != $business_click_prot_cats['portfolio-category-post-ids'] ){
                                            $business_click_port_post_cat_id[] = $business_click_prot_cats['portfolio-category-post-ids'];
                                        }
                                    }
                                $i++;

                                }
                                $business_click_port_arg = array();
                                if( !empty($business_click_port_post_cat_id) ){  
                                    $business_click_port_arg = array(
                                        'post_type'             => 'post',
                                        'posts_per_page'        => -1,
                                        'cat'                   => $business_click_port_post_cat_id,
                                        'ignore_sticky_posts'   => true

                                    );

                                }
                                ?>
                                <?php if(count($business_click_port_post_cat_id) > 0) { ?>
                                <button class="button button-outline is-checked" data-filter="*"><?php echo esc_html__( 'All', 'business-click' ) ?></button>
                                <?php } ?> 
                                <?php for( $i=0; $i < count($business_click_port_post_cat_id); $i++ ){
                                    $business_click_cat_name    = get_cat_name($business_click_port_post_cat_id[$i]);
                                    $business_click_cat_name_id = get_cat_id($business_click_cat_name);
                                    ?>
                                    <button class="button button-outline" data-filter=".<?php echo esc_html('cat-'.$business_click_cat_name_id);?>"><?php echo esc_html($business_click_cat_name);?></button>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            
                        <?php  if( !empty($business_click_port_post_cat_id) ){ ?>
                            <div class="evt-grid evision-animate zoomIn" style="">
                                <?php
                                $business_click_portfolio_querry = new WP_Query($business_click_port_arg);
                                if( $business_click_portfolio_querry->have_posts() ) :
                                    while( $business_click_portfolio_querry->have_posts() ) :
                                        $business_click_portfolio_querry->the_post();
                                        $business_clik_por_cat_id   = array();
                                        if(has_post_thumbnail()){
                                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );//latebusiness-click-image
                                            $th_image = $thumb['0'];
                                        }
                                        else{
                                            $th_image = '';
                                        } 
                                        ?>
                                        <?php
                                        global $post;
                                        $portfolio_get_cat = get_the_category( $post->ID);
                                        foreach( $portfolio_get_cat as $portfolio_get_cats ){

                                            $business_clik_por_cat_id[]     = $portfolio_get_cats->cat_ID;
                                        }
                                        $cat_ids = implode(' cat-',$business_clik_por_cat_id);
                                            ?>
                                            <div class="element-item <?php echo esc_attr('cat-'.($cat_ids)); ?>" data-category="transition" style="">
                                                <div class="evt-thumb-holder">
                                                    <figure class="image css-gradient" style="<?php if($th_image != '') { ?> background-image: url(<?php echo esc_url($th_image);?>); <?php } ?>">
                                                        <a href="<?php the_permalink();?>">
                                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/500x360.png';?>" alt="">
                                                        </a>
                                                    </figure>
                                                    <?php if(1 == $enable_protfolio_post_title) {?>
                                                        <div class="evt-thumb-hover">
                                                            <a href="<?php the_permalink();?>" class="evt-thumb-category d-block"><?php the_title();?></a>
                                                            
                                                        </div>
                                                    <?php } ?>    
                                                </div>
                                            </div>
                                    <?php  
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>   
                                     
                            </div>
                        <?php } ?>    
                        <?php if(!empty($button_text) ) {?>
                            <a href="<?php echo esc_url($button_url); ?>" class="btn mt-5"><?php echo esc_html( $button_text );?></a>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>    
        
    <?php }
endif;
$portfolio_priority = get_theme_mod( 'business_click_options' );
if( !isset( $portfolio_priority['business-click-priority-portfolio-change'] ) ) {
  $portfolio_priority['business-click-priority-portfolio-change'] = false;
}
add_action('business_click_homepage','portfolio_section_array', $portfolio_priority['business-click-priority-portfolio-change']); 
