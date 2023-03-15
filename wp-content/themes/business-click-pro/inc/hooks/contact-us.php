<?php

if( !function_exists('contact_us_section') ) :
/**
     *contact us 
     *
     * @since Business Click 1.0.0
     *
     * @param  null
     * @return null
     */
	function contact_us_section()
	{
		global $business_click_customizer_all_values; 
		$business_contact_section_title 	= stripslashes($business_click_customizer_all_values['business-click-contact-section-title']);
		$business_contact_section_sub_title = stripslashes($business_click_customizer_all_values['business-click-contact-section-sub-title']);
		$business_click_phone_number 		= esc_html($business_click_customizer_all_values['business-click-top-bar-phone']);
        $business_click_email_address 		= esc_html($business_click_customizer_all_values['bussiness-click-top-bar-email']);
        $business_click_location			= esc_html($business_click_customizer_all_values['bussiness-click-top-bar-location']);
        $business_click_phone_name			= esc_html($business_click_customizer_all_values['business-click-contact-section-title-phone']);
        $business_click_email_name			= esc_html($business_click_customizer_all_values['business-click-contact-section-title-email']);
        $business_click_location_name		= esc_html($business_click_customizer_all_values['business-click-contact-section-title-location']);
        $business_click_contact_form		= esc_attr($business_click_customizer_all_values['business-click-contact-section-contact-form-short-code']  );

        $business_click_phone_show			= esc_html($business_click_customizer_all_values['business-click-contact-section-enable-phone']);
        $business_click_email_show			= esc_html($business_click_customizer_all_values['business-click-contact-section-enable-email']);
        $business_click_location_show		= esc_html($business_click_customizer_all_values['business-click-contact-section-enable-location']);
        $business_click_sho_social_menu		= esc_html($business_click_customizer_all_values['business-click-contact-section-enable-social-menu']);
        $contact_background_image            = esc_url($business_click_customizer_all_values['business-click-contact-background-image'] );


        if(  ! $business_click_customizer_all_values['business-click-contact-section-enable'] ){
        	return null;
        }
		?>
		<?php if(!empty($business_contact_section_title) || !empty($business_contact_section_sub_title) || !empty($business_click_phone_number) || !empty($business_click_email_address) || !empty($business_click_location)  || !empty($business_click_contact_form) ) { ?>
			<section id="evt-contact" class="section <?php if($contact_background_image == '') echo esc_html('css-gradient');?>"  style="background-image: url('<?php echo esc_url($contact_background_image);?>');">
        		<div class="evt-img-overlay">
					<div class="container">
						<?php if($business_click_customizer_all_values['business-click-contact-section-align-title-with-text'] == 0) { ?>
							<?php if(!empty($business_contact_section_title) ) { ?>
								<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html( $business_contact_section_title );?></h2>
							<?php } ?>
							<?php if(!empty($business_contact_section_sub_title) ) {  ?>
								<p class="title-description evision-animate slideInDown"><?php echo esc_html( $business_contact_section_sub_title );?></p>
							<?php } ?>	
						<?php } ?>


						<?php if(!empty($business_click_phone_number) || !empty($business_click_email_address) || !empty($business_click_location) || !empty($business_click_phone_name) || !empty($business_click_email_name) || !empty($business_click_location_name) || !empty($business_click_contact_form) || ($business_click_phone_show ==1 ) || ($business_click_email_show ==1 ) || ($business_click_location_show == 1 ) || ($business_click_sho_social_menu == 1) || ($business_click_customizer_all_values['business-click-contact-section-align-title-with-text'] == 1) ) { ?>
							<div class="row">
								<?php if ( ($business_click_phone_show ==1 ) || ($business_click_email_show ==1 ) || ($business_click_location_show == 1 ) || ($business_click_sho_social_menu == 1) || ($business_click_customizer_all_values['business-click-contact-section-align-title-with-text'] == 1) ) { ?>
									<div class="col">
										<div class="evision-animate fadeInUp evt-contact-text <?php if(empty($business_click_contact_form)) { echo 'contact-info-only'; } ?>">

											<?php if($business_click_customizer_all_values['business-click-contact-section-align-title-with-text'] == 1) { ?>
												<?php if(!empty($business_contact_section_title) ) { ?>
													<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html($business_contact_section_title);?></h2>
												<?php } ?>
												<?php if(!empty($business_contact_section_sub_title) ) {  ?>
													<p class="title-description evision-animate slideInDown"><?php echo esc_html($business_contact_section_sub_title);?></p>
												<?php } ?>	
											<?php } ?>

											<?php //same as contact-info present in widget-footer-3.php ?>
											<div class="contact-info">
												<ul class="clearfix">
													<?php if(!empty($business_click_phone_number) && ($business_click_phone_show ==1 ) ) { ?>
														<li>
															<i class="fa fa-phone"></i> 
															<strong><?php echo esc_html($business_click_phone_name);?></strong>
															<?php echo esc_html($business_click_phone_number);?>
														</li>
													<?php } ?>
													<?php if(!empty($business_click_email_address) && ($business_click_email_show ==1 ) ) { ?>	
														<li>
															<i class="fa fa-envelope"></i> 
															<strong><?php echo esc_html($business_click_email_name);?></strong>
															<a href="mailto:<?php echo esc_html($business_click_email_address);?>"><?php echo esc_html($business_click_email_address);?></a>
														</li>
													<?php } ?>
													<?php if(!empty($business_click_location) && ($business_click_location_show ==1 ) ) { ?>	
														<li>
															<i class="fa fa-map-marker"></i>
															<strong><?php echo esc_html($business_click_location_name);?></strong>
															<?php echo esc_html($business_click_location);?>
														</li>
													<?php } ?>	
												</ul>
											</div>
							                <!-- social icons -->
							                <?php if(1 == $business_click_sho_social_menu) { ?>
								                <div id="evt-social-icons" class="">
								                    <ul>
								                        <?php
								                        	wp_nav_menu( array(
														        'theme_location' => 'menu-2',
														        'menu_id'        => 'social-menu',
														        'fallback_cb'    => 'business_click_social_menu'
													        ) );
								                        ?>
								                    </ul>
								                </div>
							                <?php } ?>          
							            </div>
									</div>
									<div class="w-100 d-block d-md-none"></div>
								<?php } ?>

								<?php if(!empty($business_click_contact_form)) { ?>
									<div class="col evision-animate fadeInUp">
										<?php 
											if(function_exists( 'wpcf7' ) && isset( $business_click_customizer_all_values['business-click-contact-section-contact-form-short-code'] )){
												
				                        ?>
											<div class="contact-form">
												<?php echo do_shortcode( str_replace( '\\', '',  $business_click_customizer_all_values['business-click-contact-section-contact-form-short-code'] ) ); ?>
												
												 
											</div>
										<?php
				    					}
				    					?> 
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>

	<?php } }
endif;
$contact_us_priority = get_theme_mod( 'business_click_options' );
if( !isset( $contact_us_priority['business-click-priority-contact-us-change'] ) ) {
  $contact_us_priority['business-click-priority-contact-us-change'] = false;
}
add_action('business_click_homepage','contact_us_section', $contact_us_priority['business-click-priority-contact-us-change']); 

