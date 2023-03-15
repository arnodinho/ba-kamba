<?php 
	if( isset( $_POST[ 'submit' ] ) ){
		if( isset( $_POST[ 'data' ] ) ){
			
			$options = array(
				'post' => array(),
				'page' => array()
			);

			$data = json_decode( wp_unslash( $_POST[ 'data' ] ), true );
			if( !empty( $data ) ){
				foreach( $data[ 'post' ] as $key => $option ){
					$options[ 'post' ][ sanitize_key( $key ) ] = [
						'type'        => sanitize_key( $option[ 'type' ] ),
						'label'       => sanitize_text_field( $option[ 'label' ] ),
						'placeholder' => sanitize_text_field( $option[ 'placeholder' ] )
					];
				}

				foreach( $data[ 'page' ] as $key => $option ){
					$options[ 'page' ][ sanitize_key( $key ) ] = [
						'type'        => sanitize_key( $option[ 'type' ] ),
						'label'       => sanitize_text_field( $option[ 'label' ] ),
						'placeholder' => sanitize_text_field( $option[ 'placeholder' ] )
					];
				}
			}

			update_option( 'rbcf_fields', $options );
		}
	}

	$fields = get_option( 'rbcf_fields' );

?>
<script type="text/template" id="sample"><?php $this->get_sample(); ?></script>
<div class="rise-blocks-custom-fields-wrapper">
	<?php 
		if( !empty( $fields ) ){
			if( is_array( $fields ) && count( $fields ) > 0 ){
				foreach( $fields as $post_type => $field ){
					foreach( $field as $name => $f ){
						$f[ 'name' ] = $name;
						$f[ 'post_type' ] = $post_type;
						$this->get_sample( $f );
					}
				}
			}else{
				$this->get_sample();
			}
		}else{
			$this->get_sample();
		}
	?>
</div>

<div class="rise-blocks-custom-fields-add-new-field">
	<form method="POST" action="" class="rise-blocks-custom-fields-menu-form">
		<input type="hidden" name="data" class="rbcf-data">
		<input class="components-button is-primary" type="submit" name="submit" value="<?php esc_html_e( 'Save', 'rise-blocks' ); ?>">
	</form>
	<button class="components-button is-primary add-field">
		<?php esc_html_e( 'Add Field', 'rise-blocks' ); ?>
	</button>
</div>
