<?php 
namespace Rise_Blocks_Custom_Fields;

class Menu{

	public function __construct(){
		add_action( 'admin_menu', array( $this, 'register_menu' ), 90 );
	}

	public function register_menu(){
		add_submenu_page( 
			'rise_blocks', # parent slug
			esc_html__( 'Custom Fields', 'rise-blocks' ), # page title
			esc_html__( 'Custom Fields', 'rise-blocks' ), # menu title
			'manage_options', # capability
			'rise-blocks-custom-fields', # menu_slug
			array( $this, 'render' ), # function
			10 # position
		);
	}

	public function render(){
		require Main::get_instance()->get_directory_path( 'menu-page.php' );
	}

	public function get_sample( $field = null ){
		if( !$field ){
			$field = array(
				'post_type'   => '',
				'type'        => '',
				'label'       => '',
				'name'        => '',
				'placeholder' => ''
			);
		}
		?>
		<div class="rise-blocks-custom-fields-wrapper-inner">
			<div>
				<button class="delete"><span class="dashicons dashicons-trash"></span></button>
				<div class="rise-blocks-custom-fields-menu">
					<div class="rise-blocks-custom-fields-menu-field">
						<div>
							<p><?php esc_html_e( 'Post Type', 'rise-blocks' ); ?></p>
							<select name="post_type" class="field">
								<option value="post" <?php selected( $field[ 'post_type' ], 'post' ); ?>><?php esc_html_e( 'Post', 'rise-blocks' ) ?></option>
								<option value="page" <?php selected( $field[ 'post_type' ], 'page' ); ?>><?php esc_html_e( 'Page', 'rise-blocks' ) ?></option>
							</select>
						</div>
					</div>	
					<div class="rise-blocks-custom-fields-menu-field">
						<div>
							<p><?php esc_html_e( 'Field Type', 'rise-blocks' ); ?></p>
							<select name="type" class="field-type field">
								<option value="text" <?php selected( $field[ 'type' ], 'text' ); ?>>
									<?php esc_html_e( 'Text', 'rise-blocks' ); ?>
								</option>
								<option value="email" <?php selected( $field[ 'type' ], 'email' ); ?>>
									<?php esc_html_e( 'Email', 'rise-blocks' ); ?>
								</option>
								<option value="number" <?php selected( $field[ 'type' ], 'number' ); ?>>
									<?php esc_html_e( 'Number', 'rise-blocks' ); ?>
								</option>
								<option value="editor" <?php selected( $field[ 'type' ], 'editor' ); ?>>
									<?php esc_html_e( 'Editor', 'rise-blocks' ); ?>
								</option>
								<option value="image" <?php selected( $field[ 'type' ], 'image' ); ?>>
									<?php esc_html_e( 'Image', 'rise-blocks' ); ?>
								</option>
								<option value="textarea" <?php selected( $field[ 'type' ], 'textarea' ); ?>>
									<?php esc_html_e( 'Text Area', 'rise-blocks' ); ?>
								</option>
								<option value="color-picker" <?php selected( $field[ 'type' ], 'color-picker' ); ?>>
									<?php esc_html_e( 'Color', 'rise-blocks' ); ?>
								</option>
							</select>
						</div>
					</div>
					<div class="rise-blocks-custom-fields-menu-field">
						<div>
							<p><?php esc_html_e( 'Field Label', 'rise-blocks' ); ?></p>
							<input type="text" name="label" class="field-label field" value="<?php echo esc_attr( $field[ 'label' ] ); ?>">
						</div>
					</div>
					<div class="rise-blocks-custom-fields-menu-field">
						<div>
							<p><?php esc_html_e( 'Field Name', 'rise-blocks' ); ?></p>
							<input type="text" name="name" class="field-name field" value="<?php echo esc_attr( $field[ 'name' ] ); ?>">
						</div>
					</div>
					<div class="rise-blocks-custom-fields-menu-field">
						<div>
							<p><?php esc_html_e( 'Placeholder', 'rise-blocks' ); ?></p>
							<input type="text" name="placeholder" class="field-placeholder field" value="<?php echo esc_attr( $field[ 'placeholder' ] ); ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}