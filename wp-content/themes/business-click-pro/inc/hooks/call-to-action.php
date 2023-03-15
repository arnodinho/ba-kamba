<?php

if( !function_exists('call_to_action_array') ) :
	/**
     * call to action array creation
     *
     * @since Business Click 1.0.0
     *
     * @param  null
     * @return null
     */
	function call_to_action_array(){
		global $business_click_customizer_all_values;

		$call_to_action_number_of_word				= $business_click_customizer_all_values['business-click-call-excerpt-length'];
		$call_to_action_button_text_primary		    = stripslashes( $business_click_customizer_all_values['business-click-button-text-primary'] );
		$call_to_action_button_text_secondary		= stripslashes( $business_click_customizer_all_values['business-click-button-text-secondary'] );

		$call_to_action_button_primary_url		    = $business_click_customizer_all_values['business-click-button-primary-url'];
		$call_to_action_button_secondary_url		= $business_click_customizer_all_values['business-click-button-secondary-url'];
		$call_to_action_enable_title				= $business_click_customizer_all_values['business-click-call-to-action-enable-title'];
		$call_to_action_enable_image 				= $business_click_customizer_all_values['business-click-call-to-action-enable-image'];
		$call_to_action_enable_button_primary		= $business_click_customizer_all_values['business-click-call-to-action-enable-primary-button'];
		$call_to_action_enable_button_secondary		= $business_click_customizer_all_values['business-click-call-to-action-enable-secondary-button'];
		$call_to_action_select_page					= $business_click_customizer_all_values['business-click-call-to-action-select-from-page'];
		$theme_background 							= $business_click_customizer_all_values['business-click-call-action-background-theme'];
		$call_to_action_layout_options 				= $business_click_customizer_all_values['business-click-call-to-action-layout-option'];

		if(  ! $business_click_customizer_all_values['business-click-enable-call-to-action']  )
		{
			return null;
		} ?>
		<?php

		if( !empty($call_to_action_select_page)  ){
			$call_to_action_arg	 = array(
	    		'post_type' 		=> 'page',
	            'p' 				=> $call_to_action_select_page,
	            'posts_per_page' 	=> 1
    		);
    		$call_to_action_arg_querry	= new WP_Query($call_to_action_arg);
    		if($call_to_action_arg_querry->have_posts() ) :
    			while( $call_to_action_arg_querry->have_posts() ) :
    				$call_to_action_arg_querry->the_post();
    				if(has_post_thumbnail())
		            {
		                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
		            }
		            else
		            {
		                $thumb[0] = '';
		            }?>
		            <section id="evt-call-to-action" class="section text-center <?php echo esc_html($theme_background);?>-background <?php echo esc_html($call_to_action_layout_options);?> <?php if($call_to_action_enable_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php if(1 == $call_to_action_enable_image ) { echo esc_url($thumb[0]); }?>');">
					    <div class="evt-img-overlay">
					        <div class="container">
					            <div class="row justify-content-center">
					                <div class="col-md-10 col-lg-8">
					                	<div class="text-group">
					                	<?php if( 1 == $call_to_action_enable_title ) { ?>
					                    	<h2 class="widget-title evision-animate slideInDown"><?php the_title();?></h2>
					                    <?php } ?>
					                    <p class="evision-animate fadeInUp"><?php echo wp_kses_post(business_click_words_count( $call_to_action_number_of_word ,get_the_content()));?></p>
					                    </div>

					                    <div class="btn-group">
					                    <?php if( !empty($call_to_action_button_text_primary) && (1 == $call_to_action_enable_button_primary)) { ?>
					                    	<a href="<?php echo esc_url($call_to_action_button_primary_url);?>" class="btn evision-animate fadeInUp primary mr-3"><?php echo esc_html( $call_to_action_button_text_primary);?><i class="fa fa-angle-right"></i></a>
					                    <?php } ?>	

					                     <?php if( !empty($call_to_action_button_text_secondary) && (1 == $call_to_action_enable_button_secondary)) { ?>
					                    <a href="<?php echo esc_url($call_to_action_button_secondary_url);?>" class="btn evision-animate fadeInUp secondary"><?php echo esc_html( $call_to_action_button_text_secondary);?><i class="fa fa-angle-right"></i></a>
					                    <?php } ?>
					                    </div>

					                </div>
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
$call_to_action_priority = get_theme_mod( 'business_click_options' );
if( !isset( $call_to_action_priority['business-click-priority-call-action-change'] ) ) {
  $call_to_action_priority['business-click-priority-call-action-change'] = false;
}
add_action('business_click_homepage','call_to_action_array', $call_to_action_priority['business-click-priority-call-action-change']); 
