<?php

if( !function_exists('business_click_ourteam') ) :
/**
     * our team creation
     *
     * @since Business Click 1.0.0
     *
     * @param string null
     * @return null
     */
	function business_click_ourteam(){
		global $business_click_customizer_all_values;
		$our_team_section_title			= stripslashes($business_click_customizer_all_values['business-click-our-team-title']);
		$our_team_section_sub_title		= stripslashes($business_click_customizer_all_values['business-click-our-team-sub-title']);
    	$our_team_background_image		= esc_url($business_click_customizer_all_values['business-click-our-team-background-image'] );
		

		if(  ! $business_click_customizer_all_values['business-click-our-team-enable'] ){
			return null;
		} ?>
		<?php if(!empty($our_team_section_title ) || !empty($our_team_section_sub_title) || !empty($business_click_customizer_all_values['business-click-our-team-short-code']) ) { ?>
			<section id="evt-team" class="section text-center <?php if($our_team_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($our_team_background_image);?>');">	
            	<div class="evt-img-overlay">
					<div class="container">
						<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html( $our_team_section_title);?></h2>
						<p class="title-description evision-animate slideInDown"><?php echo esc_html( $our_team_section_sub_title);?></p>
						<div class="evt-team-slider evt-carousel- evision-animate fadeIn">
							<?php echo do_shortcode(  $business_click_customizer_all_values['business-click-our-team-short-code']);?>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>	

	<?php }
endif;
$team_priority = get_theme_mod( 'business_click_options' );
if( !isset( $team_priority['business-click-priority-our-team-change'] ) ) {
  $team_priority['business-click-priority-our-team-change'] = false;
}
add_action('business_click_homepage','business_click_ourteam', $team_priority['business-click-priority-our-team-change']); 
