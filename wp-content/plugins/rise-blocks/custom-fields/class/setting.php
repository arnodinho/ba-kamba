<?php 
namespace Rise_Blocks_Custom_Fields;

class Setting{

	protected $key;
	protected $slug;
	protected $fields = array();
	protected $field_module;

	protected static $counter = 0;

	public function __construct( $config = false ){

		if( $config ){
			$this->key  = $config[ 'key' ];
			$this->slug = $config[ 'slug' ]; //option_group 
			$this->field_module = Main::get_instance( 'field' );
			add_action( 'admin_init', array( $this, 'register' ) );
		}
	}

	public function add_fields( $fields ){
		$this->fields = $fields;
	}

	public function get(){
		return get_option( $this->key );
	}

	public function get_section_id( $section ){
		return 'rise_blocks_custom_fields_section' . $section;
	}

	public function register(){

	    register_setting( $this->slug, $this->key ); 

	    $fields = apply_filters( 'rise_blocks_custom_fields_setting_fields', $this->fields, $this );
	    foreach( $fields as $section_id => $section ){

	    	$label      = $section[ 'label' ];
	    	$fields     = $section[ 'fields' ];
	    	$section_id = $this->get_section_id( $section_id );

	    	add_settings_section(
	    	    $section_id, # section id
	    	    $label,
	    	    array( $this, 'section_callback' ), # callback
	    	    $this->slug # page slug
	    	);

	    	foreach( $fields as $id => $field ){

	    		$pass = array_merge( array( 'id' => $id ), $field );

	    		add_settings_field(
	    		    $id, #id 
	    		    $field[ 'label' ], #name
	    		    array( $this, 'field_callback' ), #callback
	    		    $this->slug, #page
	    		    $section_id,
	    		    $pass #pass to callback function
	    		);
	    	}
	    }
	}

	public function section_callback(){
	    
	}

	public function field_callback( $field ) {

	    $options = $this->get();
	    $id = $field[ 'id' ];
	    $field[ 'name' ]  = $this->key . "[" . $id ."]";
	    $field[ 'value' ] = isset( $options[ $id ] ) ? $options[ $id ]: '';
	    $field[ 'label' ] = '';
	    
	    $this->field_module->render( $field );
	}

	public function do_settings_sections( $page ){
		
		global $wp_settings_sections, $wp_settings_fields;
		 
	    if ( ! isset( $wp_settings_sections[ $page ] ) ) {
	        return;
	    }

	    $i = 0;
	    foreach ( (array) $wp_settings_sections[ $page ] as $section ) {
	       
	        if ( $section['callback'] ) {
	            call_user_func( $section['callback'], $section );
	        }
	 
	        if ( ! isset( $wp_settings_fields ) || ! isset( $wp_settings_fields[ $page ] ) || ! isset( $wp_settings_fields[ $page ][ $section['id'] ] ) ) {
	            continue;
	        }

	        $active = $i == 0 ? 'active' : ''; $i++;
	        echo '<div id="' . esc_attr( $section[ 'id' ] ) . '" class="rise-blocks-custom-fields-single-tab '. esc_attr( $active ) . '">';
	        echo '<table class="form-table" role="presentation">';
	        do_settings_fields( $page, $section[ 'id' ] );
	        echo '</table>';
	        echo '</div>';
	    }
	}

	public function render(){
	?>
		<div class="rise-blocks-custom-fields-wrapper <?php echo esc_attr( $this->slug ); ?>">
			<div class="rise-blocks-custom-fields">
			    <form method="POST" action="options.php">
			        <?php
			            # pass slug name of page, also referred
			            # to in Settings API as option group name
			            settings_fields( $this->slug );
			            echo '<div class="rise-blocks-custom-fields-tab-wrapper">';
				            echo '<ul class="rise-blocks-custom-fields-tab-navigation">';

				            $i = 0;
				            foreach( $this->fields as $section_id => $section ){
				            	$active = $i == 0 ? 'active' : ''; $i++;
				            	echo '<li><a class="rise-blocks-custom-fields-tab-menu '. esc_attr( $active ) .'" href="#'. esc_attr( $this->get_section_id( $section_id ) ) .'">' . esc_html( $section[ 'label' ] ) . '</a></li>';
				            }

				            echo '</ul>';
				            echo '<div class="rise-blocks-custom-fields-tab">';
					            # pass slug name of page
					            $this->do_settings_sections( $this->slug );
				            echo '</div>';
			            echo '</div>';
			            submit_button();
			        ?>
			    </form>
			</div>
		</div>
	   <?php
	}
}
