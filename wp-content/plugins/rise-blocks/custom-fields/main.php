<?php
namespace Rise_Blocks_Custom_Fields;

define( 'RBCF_FILE', __FILE__ );
define( 'RBCF_PATH', plugin_dir_path( RBCF_FILE ) );
define( 'RBCF_URL', plugin_dir_url( RBCF_FILE ) );

class Main{

    public static $modules;

    public static $instances = array();

    public static $instance;

    public function __construct( $modules = false ){

        if( $modules ){
            self::$modules = $modules;
        }

        add_action( 'plugins_loaded', array( $this, 'load_modules' ) );
        add_filter( 'wp_check_filetype_and_ext', array( $this, 'allow_svg' ), 10, 4 );
        add_action( 'after_setup_theme', array( $this, 'load_fields' ) );
    }

    public static function get_instance( $module = false ){
        if( $module ){
            return self::$instances[ $module ];
        }else{
            return self::$instance;
        }
    }

    public function allow_svg( $mime, $file, $filename, $mimes ) {
        $wp_filetype = wp_check_filetype( $filename, $mimes );
        if ( in_array( $wp_filetype['ext'], [ 'svg' ] ) ) {
            $mime['ext']  = true;
            $mime['type'] = true;
        }
        return $mime;
        
    }

    public function load_fields(){
        $fields = get_option( 'rbcf_fields' );
        if( $fields ){
            if( is_array( $fields ) ){
                foreach( $fields as $post_type => $field ){
                    $post_type = new Post_Type( $post_type );
                    $post_type->add_fields( esc_html__( 'Rise Blocks Custom Fields', 'rise-blocks' ), array(
                        'general' => array(
                            'label'  => esc_html__( 'General Options', 'rise-blocks' ),
                            'fields' => $field
                        )
                    ));
                }
            }
            
        }
    }

    public function load_modules(){

        $modules = apply_filters( 'rise_blocks_custom_fields_modules', self::$modules, self::$instance );

        foreach ( $modules as $m ){
            
            $this->require( "class/{$m}.php" );

            $class = 'Rise_Blocks_Custom_Fields\\';
            $ar = explode( '-', $m );
            foreach( $ar as $a ){
                $class .= ucfirst( $a) . '_';
            }
            $class = rtrim( $class, '_' );
            self::$instances[$m] = new $class();
        }

        do_action( 'rise_blocks_custom_fields_loaded' );
    }

    public function get_directory_path( $file = ''){
        return RBCF_PATH . $file;
    }

    public function require( $file ){
        require $this->get_directory_path( $file );
    }
}

Main::$instance = new Main(array(
    'helper',
    'ajax',
    'script',
    'field',
    'setting',
    'post-type',
    'taxonomy',
    'menu'
));
