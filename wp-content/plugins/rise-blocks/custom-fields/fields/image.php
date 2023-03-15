<?php 
	$upload_btn_text = esc_html__( 'Change Image', 'rise-blocks' );

	if( empty( $value ) ){
		$upload_btn_text = esc_html__( 'Select Image', 'rise-blocks' );
	}
?>
<div class="rise-blocks-custom-fields-image-wrapper">
	<div class="rise-blocks-custom-fields-image">
		<input type="hidden" data-type="<?php echo esc_attr( $type ); ?>" data-id="<?php echo esc_attr( $id ); ?>" class="rise-blocks-custom-fields-image-input field"
			name="<?php echo esc_attr( $name ); ?>" 
			value="<?php echo esc_attr( $value ); ?>" 
		>
		<div class="rise-blocks-custom-fields-image-holder">
			<?php echo wp_get_attachment_image( $value, 'thumbnail' ); ?>
		</div>
	</div>
	<div class="rise-blocks-custom-fields-btn-group">
		<button type="button" class="button rise-blocks-custom-fields-image-browse">
			<span class="wp-media-buttons-icon"></span>
			<span class="rise-blocks-custom-fields-image-btn-text"><?php echo esc_html( $upload_btn_text ); ?></span>
		</button>

		<button id="<?php echo esc_attr( $d[ 'delete' ] ); ?>" class="rise-blocks-custom-fields-image-delete button <?php echo empty( $value ) ? esc_attr( 'hidden' ) : ''; ?>">
			<?php echo esc_html__( 'Delete Image', 'rise-blocks' ); ?>
		</button>
	</div>
</div>