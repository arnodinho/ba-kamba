<?php
if( !function_exists('testimonial_arrays') ) :
	/**
     *Testimonial array creation
     *
     * @since Business Click 1.0.0
     *
     * @param  $from_slider
     * @return array
     */
	function testimonial_arrays($from_slider){
		global $business_click_customizer_all_values;

		$testimonial_number_of_post 				= absint( $business_click_customizer_all_values['business-click-number-of-testimonial'] );
		$testimonila_number_of_word					= absint( $business_click_customizer_all_values['business-click-testimonial-excerpt-length'] );

		$testimonial_arrays	= array();
		$testimonial_page_id			= array();
		$reapeted_page	  				= array('testimonial-page-ids');
		$repeated_designation 			= array('testimonial-designation-ids');
		$testimonial_args 				= array();
		$testimonial_post_page 			= evision_customizer_get_repeated_all_value(5,$reapeted_page);
		$testimonial_post_designation 	= evision_customizer_get_repeated_all_value(5,$repeated_designation);

		if('form-category' == $from_slider){
			$testimonial_post_cat = $business_click_customizer_all_values['business-click-testimonial-from-category'];
			if( 0 != $testimonial_post_cat ){
				$testimonial_args 	= array(
					'post_type'				=> 'post',
					'cat'					=> absint($testimonial_post_cat),
					'posts_per_page'	    => $testimonial_number_of_post,
					'order'					=> 'DESC'
				); 
			}
		}
		else{

			if(  null != $testimonial_post_page ){
				foreach($testimonial_post_page as $testimonial_post_pages){
					if( 0 != $testimonial_post_pages['testimonial-page-ids'] ){
						$testimonial_page_id[] = $testimonial_post_pages['testimonial-page-ids'];
					}
				}
				if( !empty($testimonial_page_id) ){
					$testimonial_args = array(
						'post_type'			=> 'page',
						'posts_per_page'	=> $testimonial_number_of_post,
						'post__in'			=> $testimonial_page_id,
						'orderby'			=> 'post__in',
						'order'				=> 'ASC'	

					);
				}
			}
		}
		if( !empty( $testimonial_args ) ){
			/*Query start*/
			$testimonial_ars_query 	= new WP_Query($testimonial_args);
			if( $testimonial_ars_query->have_posts()  ) :
				$i = 1;
				while( $testimonial_ars_query->have_posts() ) :
					$testimonial_ars_query->the_post();
					$th_image ='';
		            if(has_post_thumbnail()){
	                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
	                    $th_image = $thumb['0'];
		            }
		            
		            $testimonial_arrays[] = array(
		            	'testimonial-title' 			=> get_the_title(),
		            	'testimonial-content' 			=> has_excerpt() ? get_the_excerpt() : business_click_words_count($testimonila_number_of_word,get_the_content() ) ,
		            	'testimonial-url' 				=> esc_url(get_the_permalink()),
		            	'testimonial-image' 			=> $th_image,
		            	'testimonial-designation-ids' 	=> isset( $testimonial_post_designation[$i]['testimonial-designation-ids'] ) ?  $testimonial_post_designation[$i]['testimonial-designation-ids'] : '',
		            	
		            );
		            $i++;
				endwhile;
				wp_reset_postdata();
			endif;
		}
		return $testimonial_arrays;	
	}
endif;

if( !function_exists('testimonial_section') ) :
/**
     *Testimonial array creation
     *
     * @since Business Click 1.0.0
     *
     * @param  null
     * @return null
     */
	function testimonial_section(){
		global $business_click_customizer_all_values;

		if( ! $business_click_customizer_all_values['business-click-testimonila-enable'] ){
			return null;
		}
		$testimonial_number_of_post 				= absint($business_click_customizer_all_values['business-click-number-of-testimonial'] );
		$testimonial_select_post					= esc_html($business_click_customizer_all_values['business-click-testimonial-select-form'] );
		
		$tesimonial_pages_array						= testimonial_arrays($testimonial_select_post);	
		if( is_array($tesimonial_pages_array) )	
		{
			$testimonila_section_title				= stripslashes($business_click_customizer_all_values['business-click-testimonial-section-title'] );
			$testimonila_section_sub_title			= stripslashes($business_click_customizer_all_values['business-click-testimonial-section-sub-title'] );
			$testimonila_background_image			= esc_url($business_click_customizer_all_values['business-click-testimonial-background-image'] );
			$testimonial_box_content_aligment		= esc_html($business_click_customizer_all_values['business-click-testimonila-box-aligment']);
			$testimonial_show_title					= esc_html($business_click_customizer_all_values['business-click-testimonial-enable-title']);
			$testimonial_show_image					= esc_html($business_click_customizer_all_values['business-click-testimonial-enable-image']);
			$theme_background 						= $business_click_customizer_all_values['business-click-testimonial-background-theme'];
			$layout_options							= $business_click_customizer_all_values['business-click-testimonial-layout'];
			
			?>
			<?php if( '' != $testimonila_section_title || count( $tesimonial_pages_array ) > 0 ) { ?>
				<section id="evt-testimonials" class="section img-cover <?php echo esc_html($theme_background);?>-background <?php echo esc_html($layout_options);?> <?php if($testimonila_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($testimonila_background_image);?>');">	
					<div class="evt-img-overlay">
						<div class="container">
							<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html( $testimonila_section_title);?></h2>
							<?php if( '' != $testimonila_section_sub_title || count( $tesimonial_pages_array ) > 0 ) { ?>	
								<p class="title-description evision-animate slideInDown"><?php echo esc_html( $testimonila_section_sub_title );?></p>
							<?php } ?>	
							<?php if( count( $tesimonial_pages_array ) > 0 ) {?>
								<div class="row justify-content-center <?php echo esc_html($testimonial_box_content_aligment);?> ">
									<div class="col-md-10 col-lg-8  " >
										<div class="evt-testimonials-slider evt-carousel slidesToShow-one evision-animate fadeIn">
											<?php 
											$i = 1;
											foreach( $tesimonial_pages_array as $tesimonial_pages_arrays ){
												if( $testimonial_number_of_post < $i ){
													break;
												}
												if ( !empty($tesimonial_pages_arrays['testimonial-image'] )){
									              $testimonial_image = $tesimonial_pages_arrays['testimonial-image'];
									            }
									            else{
									              $testimonial_image = '';
									            }

	                    						$image_id   = get_post_thumbnail_id( get_the_ID() );
												$image_attr = get_post_meta( $image_id, '_wp_attachment_image_alt','true' );
									            ?>
									            <?php if( !empty($tesimonial_pages_arrays['testimonial-image']) || !empty($tesimonial_pages_arrays['testimonial-content']) || !empty($tesimonial_pages_arrays['testimonial-title']) || !empty($tesimonial_pages_arrays['testimonial-designation-ids'])) { ?>
													<div class="evt-box-item-wrap">
														<div class="evt-box-item">
															
															<div class="evt-box-caption">

																<p><?php echo wp_kses_post($tesimonial_pages_arrays['testimonial-content']); ?></p>
																<div class="evt-testimonials-author">
																	<?php if(1 == $testimonial_show_image ) { ?>
																		<div class="profile-img">
																			<img src="<?php echo esc_url($testimonial_image);?>" alt ="<?php echo esc_attr($image_attr); ?>" >
																		</div>
																	<?php } ?>	
																	<div class="profile-info">
																		<?php if(1 == $testimonial_show_title ) { ?>
																		<h3 class="profile-name"><?php echo esc_html($tesimonial_pages_arrays['testimonial-title']);?></h3>
																		<?php } ?>	
																		<p class="designation"><?php echo esc_html( $tesimonial_pages_arrays['testimonial-designation-ids'] ); ?></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<?php } ?>
												<?php
												$i++;
										    } ?>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php }
		}
	}
endif;
$testimonial_priority = get_theme_mod( 'business_click_options' );
if( !isset( $testimonial_priority['business-click-priority-testimonial-change'] ) ) {
  $testimonial_priority['business-click-priority-testimonial-change'] = false;
}
add_action('business_click_homepage','testimonial_section', $testimonial_priority['business-click-priority-testimonial-change']); 

