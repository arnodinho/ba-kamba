<?php

if( !function_exists('our_partner_section') ) :
/**
    * Our partner section
    *
    * @since business click 1.0.0
    *
    * @param null
    * @return  array
    *
    */
	function our_partner_section(){
		global $business_click_customizer_all_values;
		$partner_section_title				= stripslashes($business_click_customizer_all_values['business-click-our-partner-section-title']);
		$partner_section_sub_title			= stripslashes($business_click_customizer_all_values['business-click-our-partner-section-sub-title']);
		$partner_background_image			= esc_url($business_click_customizer_all_values['business-click-our-partner-background-image']);
		$partner_select_page				= $business_click_customizer_all_values['business-click-our-partner-select-page'];

		if(  ! $business_click_customizer_all_values['business-click-our-partner-enable'] ){
			return null;
		} ?> 
		<?php if(!empty($partner_section_title)  || !empty($partner_section_sub_title) || !empty($partner_select_page) ) { ?>
			<section id="evt-partner" class="section text-center img-cover <?php if($partner_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($partner_background_image);?>');">	

				<div class="evt-img-overlay">
					<div class="container">
						<?php if( !empty($partner_section_title) ) { ?>	
							<h2 class="widget-title white-title evision-animate slideInDown"><?php echo esc_html( $partner_section_title );?></h2>
						<?php } ?>	
						<?php if(!empty($partner_section_sub_title) || !empty($partner_select_page) ) { ?>
							<p class="title-description evision-animate slideInDown"><?php echo esc_html( $partner_section_sub_title );?></p>
						<?php }  
						 if( !empty($partner_select_page) ) {  ?>	
							<div class="evt-partner-slider evt-carousel evision-animate fadeIn">
								<?php
								if( !empty($partner_select_page) ){
									$partner_args =  array(
										'post_type'		=> 'page',
										'posts_per_page' => 1,
										'p'				=> $partner_select_page
									);

									$partner_pages_query	= new WP_Query($partner_args);
									if( $partner_pages_query->have_posts() ) :
										while( $partner_pages_query->have_posts() ) :
											$partner_pages_query->the_post();
											$id = get_the_ID();
											$gallery_image = get_post_galleries_images($id);
												foreach( $gallery_image[0] as $gallery_images ){
													?>	
													<div class="evt-box-item-wrap">
														<div class="evt-box-item">
																<div class="evt-box-image">
																	<img src="<?php echo esc_url($gallery_images); ?>">
																</div>		
														</div>
													</div>
												<?php } ?>
											
										<?php endwhile; 
									endif;
								} ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php }
	}
endif;
$partner_priority = get_theme_mod( 'business_click_options' );
if( !isset( $partner_priority['business-click-priority-partner-change'] ) ) {
  $partner_priority['business-click-priority-partner-change'] = false;
}
add_action('business_click_homepage','our_partner_section', $partner_priority['business-click-priority-partner-change']); 
