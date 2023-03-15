<?php
/**
* Generates Select Field
* @since Create Custom Fields 1.0
*/
?>
<div class="rise-blocks-custom-fields-select">
	<p>
		<select data-placeholder="<?php echo esc_attr( $placeholder ); ?>" data-type="<?php echo esc_attr( $type ); ?>" data-id="<?php echo esc_attr( $id ); ?>" class="rise-blocks-custom-fields-dropdown-navigation field" name="<?php echo esc_attr( $name ); if( $multiple ){ echo '[]'; } ?>" class="widefat" <?php if( $multiple ){ echo 'multiple'; } ?>>
			<?php if( $value && is_array( $value ) ): ?>
				<?php foreach( $value as $v ): ?>
					<option value="<?php echo esc_attr( $v ); ?>" selected>
						<?php 
							$p = get_term( $v, 'nav_menu' );
							echo esc_html( $p->name );
						?>
					</option>
				<?php endforeach; ?>
			<?php elseif( $value ): ?>
				<option value="<?php echo esc_attr( $value ); ?>" selected>
					<?php 
						$p = get_term( $value, 'nav_menu' );
						echo esc_html( $p->name );
					?>
				</option>
			<?php endif; ?>
		</select>			
	</p>
</div>