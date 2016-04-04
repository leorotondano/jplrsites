<div class="egw-row">
	<label><?php _e( 'Título Externo:', 'egw-custom' ); ?></label>
	<input 
	id="<?php echo $this->get_field_id( 'TituloExterno' ); ?>"
	name="<?php echo $this->get_field_name( 'TituloExterno' ); ?>"
	type="text"
	value="<?php esc_attr_e( $instance['TituloExterno'] ); ?>" 
	/>
</div>	