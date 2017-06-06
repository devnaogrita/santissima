<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $post;

if ( ! $post->post_excerpt ) {
//    return;
}

?>

	<style type="text/css">
		#descricao_do_produto h2{
			display:none;
		}
	</style>
<div class="description" id="descricao_do_produto" itemprop="description">
	
	<?php 
		//echo force_balance_tags( apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ) 
		call_user_func( 'woocommerce_product_description_tab', 'description') . "</pre>";
		
	?>
	
	
</div>
<div class="medidas">
	<a href="/wp-content/uploads/2016/03/tabela-de-medidas-santissima.jpg" class="zoom" data-index="0">guia de tamanhos</a>
</div>