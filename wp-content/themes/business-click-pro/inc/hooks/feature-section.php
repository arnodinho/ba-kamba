<?php
if( !function_exists('business_click_feature_array') ) :
	/**
     * Feature array creation
     *
     * @since Business Click 1.0.0
     *
     * @param from_slider
     * @return array
     */
	function business_click_feature_array($from_slider){
		global $business_click_customizer_all_values;
		$feature_number_of_post   		= absint($business_click_customizer_all_values['business-click-feature-number-post']);
		$feasute_single_number_words 	= absint($business_click_customizer_all_values['business-click-feature-excerpt-length']);

		$feature_page_array 			= array();
		$repeated_page		= array('feature-page-ids');
		$repeated_icon		= array('feature-icons-ids');

		$feature_post_page 	=  evision_customizer_get_repeated_all_value(7,$repeated_page);
		$feature_post_icon	=  evision_customizer_get_repeated_all_value(7,$repeated_icon);

		$feature_page_id	= array();
		if('form-category' == $from_slider){
			$feature_post_cat = $business_click_customizer_all_values['business-click-feature-from-category'];
			if( 0 != $feature_post_cat ){
				$business_click_feature_arg = array(
					'post_type'  => 'post',
					'cat'		 => absint($feature_post_cat),
					'posts_per_page' => $feature_number_of_post,
					'order'			 => 'DESC'	
				);
			} 
		}
		else{
			if( null != $feature_post_page) {
				foreach ( $feature_post_page as $feature_post_pages ){
					if( 0 != $feature_post_pages['feature-page-ids'] ){
						$feature_page_id[]  =  $feature_post_pages['feature-page-ids'];
					}
				}
				if( !empty($feature_page_id) ){
					$business_click_feature_arg 	= array(
						'post_type'				=> 'page',
						'post__in'				=> $feature_page_id,
						'posts_per_page'		=> $feature_number_of_post,
						'orderby'				=> 'post__in',
						'order'					=> 'ASC'
					); 
				}
			}
		}

		
		if( !empty($business_click_feature_arg) ){
			$business_click_feature_query		= new WP_Query($business_click_feature_arg);
			if( $business_click_feature_query->have_posts() ):
				$i = 1;
				while( $business_click_feature_query->have_posts() ) :
					$business_click_feature_query->the_post();
					$th_image ='';
	                if(has_post_thumbnail()){
	                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'latebusiness-click-image' );
	                    $th_image = $thumb['0'];
	                }
	                $feature_page_array[]  = array(
	                	'feature-title'			=> get_the_title(),
	                	'feature-content'		=> has_excerpt()  ? the_excerpt() : business_click_words_count($feasute_single_number_words,get_the_content()),
	                	'feature-url'			=> esc_url(get_the_permalink()),
	                	'feature-image'			=> $th_image,
	                	'feature-icons-ids'		=> isset($feature_post_icon[$i]['feature-icons-ids']) ? $feature_post_icon[$i]['feature-icons-ids'] : ''

	                );
					
					$i++;
				endwhile;
				wp_reset_postdata();
			endif;
		}
		return $feature_page_array;
	}
endif;

if ( !function_exists('business_click_feature') ) :
	/**
     * Feature array creation
     *
     * @since Business Click 1.0.0
     *
     * @param string null
     * @return array
  **/
  function business_click_feature(){
  	global $business_click_customizer_all_values;

  	if (  ! $business_click_customizer_all_values['business-click-feature-enable'] ){
  		return null;
  	}
  	$feature_select_of_page  = $business_click_customizer_all_values['business-click-feature-select-form'];
  	$feature_post_page_array = business_click_feature_array($feature_select_of_page);
  	if( is_array($feature_post_page_array)  ){
  		$feature_section_title 					= esc_html($business_click_customizer_all_values['business-click-feature-section-title']);
  		$feature_section_sub_title				= esc_html($business_click_customizer_all_values['business-click-feature-section-sub-title']);
  		$feature_icon_aligment					= $business_click_customizer_all_values['business-click-feature-icon-alignment'];
  		$feature_carousel						= $business_click_customizer_all_values['business-click-feature-carousel'];
  		$feature_button_text					= esc_html($business_click_customizer_all_values['business-click-feature-button-text']);
  		$feature_enable_title					= esc_html($business_click_customizer_all_values['business-click-feature-enable-title']);
  		$feature_enable_content					= esc_html($business_click_customizer_all_values['business-click-feature-enable-content']);
  		$feature_enable_image					= esc_html($business_click_customizer_all_values['business-click-feature-enable-image']);
  		$feature_enable_button					= esc_html($business_click_customizer_all_values['business-click-feature-enable-button']);
  		$feature_number_of_post   				= absint($business_click_customizer_all_values['business-click-feature-number-post']);
  		$feature_per_rows_item   				= absint($business_click_customizer_all_values['business-click-feature-show-per-page']);
  		$layout_options							= $business_click_customizer_all_values['business-click-feature-layout-options'];
    	$feature_background_image			= esc_url($business_click_customizer_all_values['business-click-feature-background-image'] );
  		

  		?>


  			<!-- Icon Alignment: text-center, featured-icon-left, featured-icon-right -->
  			<!-- Box Background Color -->
  			<?php if(!empty($feature_section_title) || !empty($feature_section_sub_title) ||count($feature_post_page_array) > 0 )  { ?>
	  			<section id="evt-featured" class="section <?php echo esc_html($feature_icon_aligment);?> <?php echo esc_html($layout_options);?> number-of-item-<?php echo absint($feature_per_rows_item)?> <?php if($feature_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($feature_background_image);?>');">	
	  				<div class="evt-img-overlay">
						<div class="container">
							<?php 
							if(!empty($feature_section_title)) { ?>
								<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html($feature_section_title);?></h2>
							<?php 
							}

							if(!empty($feature_section_sub_title)) { ?>
								<p class="title-description evision-animate slideInDown"><?php echo esc_html($feature_section_sub_title);?></p>
							<?php } 
							?>	
							<!-- .evt-carousel -->
							<!-- if carousel: evt-carousel -->
							<!-- if not carousel: row -->
							<?php if( !empty($feature_post_page_array ) ) { ?>
								<div class="<?php if(($feature_carousel ) ){ echo 'evt-carousel';} else { echo 'row'; } ?> evt-featured-slider evision-animate fadeIn ">	
									<?php
									$i = 1;
									foreach( $feature_post_page_array as $feature_post_page_arrays  ){
										
										if ( empty($feature_post_page_arrays['feature-image'] ))
							            {
							              $feature_sec_image = '';
							            }
							            else
							            {
							              $feature_sec_image = $feature_post_page_arrays['feature-image'];
							            }
							            $thumb_id = get_post_thumbnail_id(get_the_ID());
              							$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

							            
									?>
									<?php if(!empty($feature_post_page_arrays['feature-icons-ids']) || !empty($feature_post_page_arrays['feature-title']) || !empty($feature_post_page_arrays['feature-content']) || !empty($feature_button_text) ) {?>		
									<!-- if not carousel: col-12 col-sm-6 col-lg-4 -->
									<div class="<?php if($feature_carousel  ) {} else {
										echo 'col-12 col-sm-6 col-lg-4';
										echo ' col-xl-' . 12/absint($feature_per_rows_item);
										} ?> evt-featured-item-wrap">
										<div class="evt-featured-item">
											
											<?php if(($feature_post_page_arrays['feature-icons-ids']  != '')  ) { ?>
												<div class="evt-featured-icon">
												  	<i class="fa <?php echo esc_attr($feature_post_page_arrays['feature-icons-ids'])?>"></i>
												</div>
											<?php }
											else{ ?>
												<?php if(1 == $feature_enable_image) { ?>
												<div class="evt-featured-img">
												  	<img src="<?php echo esc_url($feature_sec_image);?>" alt="<?php echo esc_attr($alt);?>">
												</div>
											<?php  } } ?>
												
											<div class="evt-featured-caption">
												<?php if(  !empty($feature_post_page_arrays['feature-title']) && (1 == $feature_enable_title) ) { ?>
													<h2 class="evt-featured-title mb-3 mt-2"><a href="<?php echo esc_url($feature_post_page_arrays['feature-url']);?>"><?php echo esc_html($feature_post_page_arrays['feature-title']);?></a></h2>
												<?php } ?>
												<?php if(  !empty($feature_post_page_arrays['feature-content']) && (1 == $feature_enable_content) ) { ?>	
													<p><?php echo wp_kses_post($feature_post_page_arrays['feature-content']);?></p>
												<?php } ?>
												<?php if( !empty($feature_button_text) && (1 == $feature_enable_button )  ) { ?>
												<a href="<?php echo esc_url($feature_post_page_arrays['feature-url']);?>" class="readmore"><?php echo esc_html($feature_button_text);?>
													<i class="fa fa-angle-right"></i>
												</a>
												<?php } ?>
											</div>
										</div>
										
									</div>
									<?php } 									 
									$i++;
									}  ?>	  
								</div>
							<?php } ?>
								
						</div>
					</div>
				</section>

  			<?php }
  	 	}
  }
endif;
$feature_priority = get_theme_mod( 'business_click_options' );
if( !isset( $feature_priority['business-click-priority-feature-change'] ) ) {
  $feature_priority['business-click-priority-feature-change'] = false;
}
add_action('business_click_homepage','business_click_feature', $feature_priority['business-click-priority-feature-change']); 


