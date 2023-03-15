<?php

if( !function_exists('business_click_blog') ) :
	/**
     * Blog Section
     *
     * @since business-click 1.0.0
     *
     * @param null
     * @return null
     *
     */
	function business_click_blog(){
		global $business_click_customizer_all_values;
		global $post;
		$author_id = $post->post_author;
		$business_click_section_title			= stripslashes( $business_click_customizer_all_values['business-click-blog-section-title-text'] );
		$business_click_section_sub_title   	= stripslashes($business_click_customizer_all_values['business-click-blog-sub-title-text']);
		$business_click_number_post				= absint( $business_click_customizer_all_values['business-click-blog-select-number-post'] );
		$business_click_number_single_words		= absint( $business_click_customizer_all_values['business-click-blog-excerpt-length'] );
		$business_click_blog_category			= $business_click_customizer_all_values['business-click-blog-select-category'];
		$business_click_button_text				= stripslashes( $business_click_customizer_all_values['business-click-blog-button-text'] );
		$blog_carousel							= esc_html($business_click_customizer_all_values['business-click-carousel']);
		$business_click_enable_title			= esc_html( $business_click_customizer_all_values['business-click-blog-enable-title'] );
		$business_click_enable_date				= esc_html( $business_click_customizer_all_values['business-click-blog-enable-date'] );
		$business_click_enable_author			= esc_html( $business_click_customizer_all_values['business-click-blog-enable-author'] );
		$business_click_enable_content			= esc_html( $business_click_customizer_all_values['business-click-blog-enable-content'] );
		$business_click_enable_image			= esc_html( $business_click_customizer_all_values['business-click-blog-enable-image'] );
		$business_click_enable_button			= esc_html( $business_click_customizer_all_values['business-click-blog-enable-button'] );
    	$blog_background_image			= esc_url($business_click_customizer_all_values['business-click-blog-background-image'] );

		

		if(  ! $business_click_customizer_all_values['business-click-blog-section-enable']  ){
			return null;
		} ?>
		<?php if(!empty($business_click_blog_category) ) { ?>
			<section id="evt-blog" class="section text-center <?php if($blog_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($blog_background_image);?>');">	
				<div class="evt-img-overlay">
					<div class="container">
						<?php if( !empty($business_click_section_title) ) { ?>
							<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html( $business_click_section_title);?></h2>
							<p class="title-description evision-animate slideInDown"><?php echo esc_html( $business_click_section_sub_title);?></p>
						<?php } ?>	
						
						<!-- if carousel: evt-carousel -->
						<!-- if not carousel: row -->
						<div class="evt-blog-slider <?php if(($blog_carousel ) ){ echo 'evt-carousel';} else { echo 'row'; } ?> evision-animate fadeIn">
							<?php 
							if( 0 != $business_click_blog_category ) {
								$business_click_blog_arg = array(
									'post_type'				=> 'post',
									'posts_per_page'		=> $business_click_number_post,
									'cat'					=> $business_click_blog_category,
									'ignore_sticky_posts'	=> 1
								);
								$business_click_blog_query  = new WP_Query($business_click_blog_arg);
								if( $business_click_blog_query->have_posts() ) :
									while( $business_click_blog_query->have_posts() ) :
										$business_click_blog_query->the_post();
										if(has_post_thumbnail()){
		                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID(),'latebusiness-click-image' ), 'latebusiness-click-image' );
		                                    $th_image = $thumb['0'];
		                                    }
		                                    else{
		                                        $th_image = '';
		                                    }
		                                    $image_id   = get_post_thumbnail_id( get_the_ID() );
		                                    $image_attr = get_post_meta( $image_id, '_wp_attachment_image_alt','true' );
											?>
											<!-- if not carousel: col-12 col-sm-6 col-lg-4 -->
											<div class="<?php if($blog_carousel  ) {} else {echo 'col-12 col-sm-6 col-lg-4'; } ?>  evt-box-item-wrap">
												<div class="evt-box-item">
													<?php if( 1 == $business_click_enable_image ) { ?>
														<div class="evt-box-image image css-gradient" style="<?php if($th_image != '') { ?> background-image: url(<?php echo esc_url($th_image);?>); <?php } ?>">

															<a href="<?php the_permalink();?>">
                                                            	<img src="<?php echo get_template_directory_uri() . '/assets/img/500x360.png';?>" alt="<?php echo esc_attr($image_attr);?>">
															</a>

														</div>
													<?php } ?>	

													<div class="evt-box-caption text-left">
														<?php if( 1 == $business_click_enable_title ) { ?>
															<h2 class="evt-box-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
														<?php } ?>

														<?php if( (1 == $business_click_enable_date) || (1 == $business_click_enable_author) ): ?>
															<div class="entry-meta">
																<?php if( 1 == $business_click_enable_date ): ?>
			                                                        <span class="posted-on ">
			                                                            <?php
			                                                            $archive_year  = get_the_time('Y'); 
			                                                            $archive_month = get_the_time('m'); 
			                                                            $archive_day   = get_the_time('d'); 
			                                                            ?>
			                                                            <a href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day) ); ?>"><?php echo esc_html(get_the_date('M j , Y') );?></a>
			                                                        </span>
			                                                    <?php endif;?>
																
																<?php if( 1 == $business_click_enable_author ): ?>
			                                                        <span class="byline">
			                                                        	 <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')) ); ?>"><?php echo esc_html(get_the_author() );?></a>
			                                                        	
			                                                        </span>   
		                                                        <?php endif;?>                                                    
			                                                </div>
                                                        <?php endif;?>  

														<?php if(1 == $business_click_enable_content ) { ?>
															<p>
																<?php 
																	if ( has_excerpt() ) {
							                                            the_excerpt();
							                                        } else {
							                                            $content_blog = get_the_content();
							                                            echo wp_kses_post(business_click_words_count( $business_click_number_single_words, $content_blog ));
							                                        }
																?>
															</p>

														<?php } ?>	
														<?php if(!empty($business_click_button_text)) { ?>
															<a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html( $business_click_button_text);?>
																<i class="fa fa-angle-right"></i>
															</a>
														<?php } ?>	
													</div>
												</div>
											</div>
										<?php
									endwhile;
									wp_reset_postdata();
								endif;
							}
							?>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>

	<?php 	
	}
endif;
$feature_priority = get_theme_mod( 'business_click_options' );
if( !isset( $feature_priority['business-click-priority-blog-change'] ) ) {
  $feature_priority['business-click-priority-blog-change'] = false;
}
add_action('business_click_homepage','business_click_blog', $feature_priority['business-click-priority-blog-change']); 

