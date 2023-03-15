<?php 
namespace Rise_Blocks_Custom_Fields;

class Field{

	public function render( $config ){

		extract( $config );

		$label       = isset( $label ) ? $label : '';
		$description = isset( $description  ) ? $description : '';
		$placeholder = isset( $placeholder ) ? $placeholder : '';
		$choices     = isset( $choices ) ? $choices : [];
		$multiple    = isset( $multiple ) ? $multiple : false;
		$default     = isset( $default ) ? $default : '';
		$settings    = isset( $settings ) ? $settings : false;
		
		echo sprintf( '<div class="custom-field %s">', esc_attr( $type ) );
		
		if( isset( $label ) && !empty( $label ) ){
			echo sprintf( '<label for="%s">%s</label>', esc_attr( $id ), esc_html( $label ) );
		}

		$file = RBCF_PATH . '/fields/' . $type . '.php';
		$file = apply_filters( 'rise_blocks_custom_fields_file', $file );
		if( file_exists( $file ) ){
			require $file;
		}else{
			require RBCF_PATH . '/fields/default.php';		
		}
		
		echo '</div>';
	}
}