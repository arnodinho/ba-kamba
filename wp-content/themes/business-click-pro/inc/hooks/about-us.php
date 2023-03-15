<?php

if( !function_exists('about_us_sections') ) :
	/**
    * about us
    *
    * @since business-click 1.0.0
    *
    * @param null
    * @return null
    *
    */
    function about_us_sections()
    {
    	global $business_click_customizer_all_values;
    	$about_us_single_number_words 		= esc_attr($business_click_customizer_all_values['business-click-excerpt-length']);
    	$about_us_section_sub_title			= stripslashes($business_click_customizer_all_values['business-click-about-us-sub-title']);
    	$about_us_button_text				= stripslashes( $business_click_customizer_all_values['business-click-about-us-button-text'] );
    	$about_us_enable_title				= esc_html($business_click_customizer_all_values['business-click-about-us-enable-title']);
    	$about_us_enable_content			= esc_html($business_click_customizer_all_values['business-click-about-us-enable-content']);
    	$about_us_enable_image				= esc_url($business_click_customizer_all_values['business-click-about-us-enable-image']);
    	$about_us_enable_button				= esc_html($business_click_customizer_all_values['business-click-about-us-enable-button']);
    	$about_us_page						= $business_click_customizer_all_values['business-click-about-us-select-page'];
    	$about_us_background_image			= esc_url($business_click_customizer_all_values['business-click-about-us-background-image'] );

    	if(  ! $business_click_customizer_all_values['business-click-enable-about-us'] )
    	{
    		return null;
    	} ?>

    	<?php
    	if ( !empty($about_us_page) ){
    		$about_us_arg		= array(
	    		'post_type' => 'page',
	            'p' =>$about_us_page,
	            'posts_per_page' => 1
    		);
    		$about_us_query	= new WP_Query($about_us_arg);
    		if( $about_us_query->have_posts() ) :
    			while ( $about_us_query->have_posts() ) :
    				$about_us_query->the_post();
    				if(has_post_thumbnail())
		            {
		                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
		            }
		            else
		            {
		                $thumb[0] = '';
		            }
		            	$image_id   = get_post_thumbnail_id ( get_the_ID() );
		            	$image_attr = get_post_meta( $image_id, '_wp_attachment_image_alt',true );

		            ?>
		            <section id="evt-why-us" class="section <?php if($about_us_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($about_us_background_image);?>');">
		            	<div class="evt-img-overlay">
							<div class="container">
								<!-- title -->
								<?php if($business_click_customizer_all_values['business-click-align-title-with-text'] == 0) { ?>
									<?php if( 1 == $about_us_enable_title ) { ?>
										<h2 class="widget-title evision-animate slideInDown"><?php the_title();?></h2>
									<?php } ?>
									<p class="title-description evision-animate slideInDown"><?php echo esc_html($about_us_section_sub_title);?></p>
								<?php } ?>


								<div class="row <?php echo $business_click_customizer_all_values['business-click-about-us-vertical-alignment'];?>">
									<?php 
									$about_us_text_animation = 'fadeInLeft';
									$about_us_image_animation = 'fadeInRight';

									if($business_click_customizer_all_values['business-click-about-us-layout'] == 'image-and-text') {
										$about_us_text_animation = 'fadeInRight';
										$about_us_image_animation = 'fadeInLeft';
									}
									?>
									<?php if( (1 == $about_us_enable_content) || (!empty($about_us_button_text) && 1 == $about_us_enable_button ) ): ?>
										<div class="col evision-animate <?php echo $about_us_text_animation;?> evt-why-us-text">
											<!-- title -->
											<?php if($business_click_customizer_all_values['business-click-align-title-with-text'] == 1) { ?>
												<?php if( 1 == $about_us_enable_title ) { ?>
													<h2 class="widget-title evision-animate slideInDown"><?php the_title();?></h2>
												<?php } ?>
												<p class="title-description evision-animate slideInDown"><?php echo esc_html($about_us_section_sub_title);?></p>
											<?php } ?>

											<?php if( 1 == $about_us_enable_content ) { ?>
												<p><?php echo wp_kses_post(business_click_words_count( $about_us_single_number_words ,get_the_content()));?></p>
											<?php } ?>		

											<?php if( (!empty($about_us_button_text) && 1 == $about_us_enable_button ) ){ ?>
												<a href="<?php echo esc_url(the_permalink());?>" class="btn"><?php echo esc_html($about_us_button_text);?><i class="fa fa-angle-right"></i></a>
											<?php } ?>	
										</div>
									<?php endif;?>

									<div class="w-100 d-block d-md-none"></div>

									<?php if (  1 == $business_click_customizer_all_values['business-click-about-us-enable-image'] ) { ?>
										<div class="col evision-animate <?php echo $about_us_image_animation;?>">
											<figure>
												<img src="<?php echo esc_url($thumb[0]); ?>" alt = "<?php echo esc_attr($image_attr);?>">
											</figure>
										</div>
									<?php } ?>	

								</div>
							</div>
						</div>
					</section>
		            <?php
    			endwhile;
    		endif;
    	}

    }
endif;
$about_us_priority = get_theme_mod( 'business_click_options' );
if( !isset( $about_us_priority['business-click-priority-about-us-change'] ) ) {
  $about_us_priority['business-click-priority-about-us-change'] = false;
}
add_action('business_click_homepage','about_us_sections', $about_us_priority['business-click-priority-about-us-change']); 
