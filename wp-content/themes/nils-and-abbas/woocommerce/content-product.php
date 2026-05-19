<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="media other-p-style" <?php wc_product_class(); ?>>
	<div class="img-product"><?php nanda_product_thumbnail(); ?></div>
	<div class="media-body">
		<div class="flext-item heading">
			<h6 class="mt-0"><?php the_title();?></h6>
		</div>
		<div class="flext-item decription">
			<?php 
				the_excerpt();
				
			?>
		</div>
		<div class="flext-item option">
			<span class="small label">Option</span>
			<a href="<?php the_permalink();?>" data-toggle="tooltip" data-placement="top" title="View">
				<span class="fa fa-search" aria-hidden="true"></span> Option
			</a>
		</div>
		<div class="flext-item price-tag">
			<span class="small label">PRICE</span>
			<div class="tag-holder">
				<?php echo $product->get_price_html(); ?>
			</div>
		</div>
		<div class="flext-item shop-btn">
			<a href="<?php echo esc_url( $product->add_to_cart_url() );?>"
				class="btn btn-secondary btn-block"><?php echo $product->add_to_cart_text(); ?></a>
		</div>
	</div>
</div>