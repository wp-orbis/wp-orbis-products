<?php

global $post;

wp_nonce_field( 'orbis_save_product_details', 'orbis_product_details_meta_box_nonce' );

$price = get_post_meta( $post->ID, '_orbis_product_price', true );

?>
<table class="form-table">
	<tr valign="top">
		<th scope="row">
			<label for="orbis_product_price"><?php _e( 'Price', 'orbis_products' ); ?></label>
		</th>
		<td>
			<input id="orbis_product_price" name="_orbis_product_price" value="<?php echo empty( $price ) ? '' : esc_attr( number_format( $price, 2, ',', '.' ) ); ?>" type="text" class="regular-text" />
		</td>
	</tr>
</table>
