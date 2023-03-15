<?php
if( !function_exists('short_code1') ) :
	/**
    *  Short code1
    *
    * @since business-click 1.0.0
    *
    * @param null
    * @return null
    *
    */
    function short_code1(){
    	global $business_click_customizer_all_values;
    	$business_click_title_text			 = stripslashes($business_click_customizer_all_values['short-code1-title'] );
    	$business_click_sub_title_text		 = stripslashes($business_click_customizer_all_values['short-code1-sub-title'] );
        $business_click_short_code_text      = $business_click_customizer_all_values['short-code1-short-code-value'];
        $business_click_short_code_btn_text  = stripslashes($business_click_customizer_all_values['short-code1-btn-text'] );
    	$business_click_short_code_btn_link	 = $business_click_customizer_all_values['short-code1-btn-link'];
        $shortcode1_background_image         = esc_url($business_click_customizer_all_values['short-code1-background-image'] );


    	if(! $business_click_customizer_all_values['short-code1-enable']){
    		return null;
    	} ?>
        <?php if(!empty($business_click_title_text) || !empty($business_click_sub_title_text) || !empty($business_click_short_code_text)) { ?>
        	<section id="evt-short-code1" class="section short-code1 <?php if($shortcode1_background_image == '') echo esc_html('css-gradient');?>" style="background-image: url('<?php echo esc_url($shortcode1_background_image);?>');">
                <div class="evt-img-overlay">
                    <div class="container clearfix">
                        <?php if($business_click_title_text != '') { ?>
                		<h2 class="widget-title"><?php echo esc_html($business_click_title_text);?></h2>
                        <?php } ?>
                		<p class="title-description"><?php echo esc_html($business_click_sub_title_text);?></p>
            			<?php 
                        echo do_shortcode( str_replace( '\\', '',  $business_click_short_code_text ) );
                        ?>

                        <?php if( isset($business_click_customizer_all_values['short-code1-btn-text']) && isset($business_click_customizer_all_values['short-code1-btn-link']) ): 
                            if($business_click_short_code_btn_text != ''):
                        ?>
                            <div class="text-center"><a href="<?php echo $business_click_short_code_btn_link;?>" class="btn"><?php echo $business_click_short_code_btn_text;?> <i class="fa fa-angle-right"></i></a></div>
                        <?php 
                            endif;
                        endif;
                        ?>
            		</div>
                </div>
        	</section>

        <?php }
    }    
endif;
$priority_short_code1 = get_theme_mod('business_click_options');
if( !isset( $priority_short_code1['business-click-priority-short-code1-change'] ) ) {
  $priority_short_code1['business-click-priority-short-code1-change'] = false;
}
add_action('business_click_homepage','short_code1',$priority_short_code1['business-click-priority-short-code1-change']);