<input type="hidden" class="repeater-hidden-field" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( json_encode( $value ) ); ?>">

<div class="sample hidden">
	<div class="repeater-single">
		<?php 
			foreach( $fields as $id => $field ){

				$field[ 'id' ]    = $id;
				$field[ 'name' ]  = '';
				$field[ 'value' ] =  '';

				$this->render( $field );
			}
		?>
		<button class="custom-field-repeater-delete button button-secondary">
			<?php _e( 'Delete', 'rise-blocks' ); ?>
		</button>
	</div>
</div>

<div class="custom-field-repeater-wrapper">
	<?php

		if( is_array( $value )){
			foreach( $value as $repeaters ){
				?>
				<div class="repeater-single">
					<?php
						foreach( $repeaters as $id => $field ){

							$field[ 'id' ]    = $id;
							$field[ 'name' ]  = '';
							
							$field[ 'label' ] = $fields[ $id ][ 'label' ];
							if( 'select' == $field[ 'type' ] ){
								$field[ 'choices' ] = $fields[ $id ][ 'choices' ];
							}

							$this->render( $field ); 
						}
					?>
					<button class="custom-field-repeater-delete button button-secondary">
						<?php _e( 'Delete', 'rise-blocks' ); ?>
					</button>
				</div>
				<?php
			}
		}
	?>
</div>
<div class="custom-field-repeater-add-button-wrapper">
	<button class="custom-field-repeater-add button button-primary"><?php _e( 'Add', 'rise-blocks' ); ?></button>
</div>