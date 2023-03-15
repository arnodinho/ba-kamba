<?php
/**
 * Handle script and style 
 * 
 * @since Create Custom Fields 1.0
 */
namespace Rise_Blocks_Custom_Fields;

class Script{

	public function __construct(){
		add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
	}

	public function get_handler( $handler ){
	    return Rise_Blocks_Prefix . '-' . $handler;
	}

	public function get_directory_uri( $file ){
	    return RBCF_URL . 'assets/' . $file;
	}
	
	public function enqueue_style( $config, $absolute = false ){

	    $handler = $this->get_handler( $config[ 'handler' ] );

	    if( $absolute ){
	        $url = $config[ 'url' ];
	    }else{
	        $url = $this->get_directory_uri( $config[ 'url' ] );
	    }

	    if( isset( $config[ 'dependencies' ] ) ){
	        $dependencies = $config[ 'dependencies' ];
	    }else{
	        $dependencies = [];
	    }

	    wp_enqueue_style( $this->get_handler( $config[ 'handler' ] ), esc_url( $url ), $dependencies );
	}

	public function enqueue_script( $config, $absolute = false ){

	    if( $absolute ){
	        $url = $config[ 'url' ];
	    }else{
	        $url = $this->get_directory_uri( $config[ 'url' ] );
	    }

	    if( isset( $config[ 'dependencies' ] ) ){
	        $dependencies = $config[ 'dependencies' ];
	    }else{
	        $dependencies = array( 'jquery' );
	    }

	    wp_enqueue_script( $this->get_handler( $config[ 'handler' ] ), esc_url( $url ), $dependencies );
	}

	public function scripts(){

		wp_enqueue_media();

		$this->enqueue_script(array(
			'handler' => 'select2',
			'url'     => 'select2/js/select2.min.js'
		));

		$this->enqueue_style(array(
			'handler' => 'select2',
			'url'     => 'select2/css/select2.min.css'
		));

		$this->enqueue_script(array(
			'handler' => 'script',
			'url'     => 'script.js',
			'dependencies' => array( 'jquery', 'jquery-ui-sortable', 'jquery-ui-selectable', 'wp-color-picker' )
		));
		
		$this->enqueue_style(array(
			'handler' => 'style.css',
			'url'     => 'style.css',
			'dependencies' => array( 'wp-color-picker' )
		));

		$locale = array(
			'caption'               => esc_html__( 'Caption.', 'rise-blocks' ),
			'link'                  => esc_html__( 'Link.', 'rise-blocks' ),
			'confirm_delete'        => esc_html__( 'Are you sure to delete?', 'rise-blocks' ),
			'no_select_notice'      => esc_html__( 'Please Select atleast an item?', 'rise-blocks' ),
			'media_title'           => esc_html__( 'Choose an Image.', 'rise-blocks' ),
			'media_btn_text'        => esc_html__( 'Insert', 'rise-blocks' ),
			'media_btn_change_text' => esc_html__( 'Change Image', 'rise-blocks' ),
			'image_upload_text'     => esc_html__( 'Select Image', 'rise-blocks' ),
			'ajax_url'              => admin_url( 'admin-ajax.php' )
		);

		wp_localize_script( $this->get_handler( 'script' ), 'RBCF', $locale );
	}
}