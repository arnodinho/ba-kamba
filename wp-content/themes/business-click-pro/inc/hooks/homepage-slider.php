<?php

if ( !function_exists('business_click_feature_slider_array') ) :
  /**
     * Featured Slider array creation
     *
     * @since Business Click 1.0.0
     *
     * @param  $from_slider
     * @return array
     */
    function business_click_feature_slider_array($from_slider)
    {
      global $business_click_customizer_all_values;
      $feature_number_of_slider   = absint($business_click_customizer_all_values['business-click-number-of-slider']);
      $slider_excerpt_length      = absint($business_click_customizer_all_values['business-click-slider-excerpt-length']);

      $feature_slideer_array[0]['business-click-feature-title']     = '';
      $feature_slideer_array[0]['business-click-feature-content']   = '';
      $feature_slideer_array[0]['business-click-feature-image']     = '';
      $feature_slideer_array[0]['business-click-feature-url']       = '';
      
      $reapeated_pages      = array('business-click-page-id');
      $feature_slider_args  = array(); 

      if ('From-category'  == $from_slider )
      {
        $feature_slider_category    = $business_click_customizer_all_values['business-click-select-from-category'];

        if(0 != $feature_slider_category)
        {
          $feature_slider_args = array(
            'post_type'             => 'post',
            'cat'                   => $feature_slider_category,
            'posts_per_page'        => $feature_number_of_slider,
            'ignore_sticky_posts'   => true
          );
        }
      }
      else
      {
        $feature_slider_post_page = evision_customizer_get_repeated_all_value(7,$reapeated_pages);
        if (null !=$feature_slider_post_page )
        {
          foreach ($feature_slider_post_page as $feature_slider_post_pages)
          {
            if ( 0 !=  $feature_slider_post_pages['business-click-page-id'])
            {
              $feature_slider_page_ids[] = $feature_slider_post_pages['business-click-page-id'];
            }
          }
          if (!empty($feature_slider_page_ids ) )
          {
            $feature_slider_args = array(
              'post_type'             => 'page',
              'post__in'              => $feature_slider_page_ids,
              'posts_per_page'        => $feature_number_of_slider,
              'orderby'               => 'post__in',
              'order'                 => 'ASC' 
            );
          }
        }
      }
      if( !empty( $feature_slider_args ))
      {
          // the query
          $business_click_feature_slider_args = new WP_Query( $feature_slider_args );

          if ( $business_click_feature_slider_args->have_posts() ) :
              $i = 0;
              while ( $business_click_feature_slider_args->have_posts() ) : 
                $business_click_feature_slider_args->the_post();
                  $url ='';
                  if(has_post_thumbnail())
                  {
                      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'slider-banner-image' );
                      $url = $thumb['0'];
                  }
                  $feature_slideer_array[$i]['business-click-feature-title'] = get_the_title();
                  if (has_excerpt())
                  {
                      $feature_slideer_array[$i]['business-click-feature-content'] = get_the_excerpt();
                  }
                  else
                  {
                      $feature_slideer_array[$i]['business-click-feature-content'] = business_click_words_count( $slider_excerpt_length ,get_the_content());
                  }
                  $feature_slideer_array[$i]['business-click-feature-url'] = esc_url( get_permalink() );
                  $feature_slideer_array[$i]['business-click-feature-image'] = $url;
                  $i++;
              endwhile;
              wp_reset_postdata();
          endif;
      }
      return $feature_slideer_array;
    }
endif;

if (!function_exists('business_click_feature_slider')) :
   /**
     * Featured Slider
     *
     * @since business Click 1.0.0
     *
     * @param null
     * @return null
     *
     */
 function business_click_feature_slider()
 {
  global $business_click_customizer_all_values;
  if(  ! $business_click_customizer_all_values['business-click-enbale-slider'] )
  {
    return null;
  }
  $feature_slider_select_post   = $business_click_customizer_all_values['business-click-post-type-slider'];
  $feature_slide_arrays         = business_click_feature_slider_array($feature_slider_select_post);
  if ( is_array($feature_slide_arrays) )
  {
    $feature_button_text        = stripslashes( $business_click_customizer_all_values['business-click-slider-button-text']);
    $feature_post_title         = esc_html($business_click_customizer_all_values['business-click-enable-title']);
    $feature_post_content       = esc_html($business_click_customizer_all_values['business-click-enable-content']);
    $feature_post_image         = esc_html($business_click_customizer_all_values['business-click-enable-image']);
    $feature_post_button        = esc_html($business_click_customizer_all_values['business-click-enable-button']);
    $feature_number_of_slider   = absint($business_click_customizer_all_values['business-click-number-of-slider']);
    $caption_aligment           = $business_click_customizer_all_values['business-click-slider-content-alignment'];
    $aspect_ratio_height        = $business_click_customizer_all_values['business-click-slider-menu-mbl-height'];
    $aspect_ratio_height        = $business_click_customizer_all_values['business-click-slider-menu-aspect-ration-height'];
    $aspect_ratio_width        = $business_click_customizer_all_values['business-click-slider-menu-aspect-ration-width'];
    $pager_layout              = $business_click_customizer_all_values['business-click-slider-pager-layout-options'];

    
     ?>

    <section id="evt-banner" class="section fp-auto-height <?php echo esc_html($caption_aligment .' '. $pager_layout)?>" style="opacity: 0;">
      <?php
          $metaslider = $business_click_customizer_all_values['business-click-meta-slider-meta-shortcode'];
          if( !empty($metaslider) ) { 
             echo do_shortcode( str_replace( '\\', '',  $business_click_customizer_all_values['business-click-meta-slider-meta-shortcode'] ) ); 
          }
          else{ ?>

        <div class="evt-banner-slider">
          <?php
          // aspect ratio
          // greater than 1200 = 1343 x 767
          $resolution_lg = $aspect_ratio_width . 'x' . $aspect_ratio_height;//width x height
          ?>

          <?php
            $i = 0;
            foreach ($feature_slide_arrays as $feature_slide_array)
            {
              if ( $feature_number_of_slider < $i )
              {
                break;
              }
              if ( empty($feature_slide_array['business-click-feature-image'] ))
              {
                $feature_slider_image = '';
              }
              else
              {
                $feature_slider_image = $feature_slide_array['business-click-feature-image'];
              }

            ?>

            <div class="evt-banner-image evt-overlay position-relative <?php if($feature_slider_image == '') echo esc_html('css-gradient');?>" <?php if( 1 == $feature_post_image && !empty($feature_slider_image)) {?> style="background-image: url('<?php echo esc_url($feature_slider_image); ?>');"<?php } ?> >

              <?php 
              //check if full page is enabled
              //not required below holder img if full page is enabled
              ?>
              <?php if( 0 == $business_click_customizer_all_values['full-page-enable']) { ?>
                <img data-src="holder.js/<?php echo $resolution_lg;?>" class="holder">
              <?php } ?>

              <div class="container">
                <div class="evt-banner-caption">
                  <?php if( 1 == $feature_post_title && !empty($feature_slide_array['business-click-feature-title']) ) { ?>
                    <h2 class="evt-title text-white mb-4"><?php echo esc_html($feature_slide_array['business-click-feature-title']);?></h2>
                  <?php } ?>
                  <?php if( 1 == $feature_post_content && !empty($feature_slide_array['business-click-feature-content']) ) {?>
                    <p><?php echo wp_kses_post($feature_slide_array['business-click-feature-content']);?></p>
                  <?php } ?>  
                  <?php if(!empty($feature_button_text) && 1 == $feature_post_button) { ?>
                    <a href="<?php echo esc_url($feature_slide_array['business-click-feature-url']);?>" class="btn"><?php echo esc_html($feature_button_text ) ;?><i class="fa fa-angle-right"></i></a>
                  <?php } ?>  
                </div>
              </div>
            </div>
            <?php
            $i++;
          }
          ?>
        </div>
          <?php }
       ?>  

       <!-- move section down -->
       <a id="moveSectionDown" class="animate-move-up-down" style="display: none;" href="#"><i class="fa fa-angle-down"></i></a>
    </section>

  <?php
  }
 }
endif;
$Slider_priority = get_theme_mod( 'business_click_options' );
if( !isset( $Slider_priority['business-click-priority-slider-change'] ) ) {
  $Slider_priority['business-click-priority-slider-change'] = false;
}

add_action('business_click_homepage','business_click_feature_slider', $Slider_priority['business-click-priority-slider-change']); 
