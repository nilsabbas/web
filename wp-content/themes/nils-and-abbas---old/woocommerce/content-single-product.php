<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

?>

<div class="product-detail woocommerce-product-detail" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row clearfix bg-light">
		<div class="col-md-6">
			<div class="product-block">
				<div id="product__slider">
					<div class="product__slider-main">
						<div class="slide zoom">
							<?php nanda_show_product_images();?>
						</div>
					</div>
					<div class="product__slider-thmb">
						<?php woocommerce_show_product_thumbnails(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="product-card">
				<div class="card-body">
					<div class="d-flex card-flex no-gutters">
						<div class="card-flex-item col-8">
						<div class="category">
								<span class="m-title">
									<?php echo esc_html__('Categories:','nanda');?>
								</span>
								<?php $terms =  get_the_terms( $product->get_id(), 'product_cat' );
							if ( $terms && ! is_wp_error( $terms ) ) {
								$terms_links = array();
								foreach ( $terms as $term ) {
									$terms_links[] = '<a href="' . get_term_link( $term ) . '" class="small text-uppercase">' . esc_html( $term->name ) . '</a>';
								}
								echo implode( ' | ', $terms_links );
							}
							?>
							</div>
							<?php nanda_template_single_title();?>
						</div>
						<div class="card-flex-item col-4">
							<p class="small">PRICE</p>
							<p class="font-bold"><?php echo $product->get_price_html(); ?></p>
						</div>
						<div class="card-flex-item col-12">
							<?php nanda_template_single_excerpt();?>
						</div>
						<div class="card-flex-item col-12">
							<?php nanda_template_single_add_to_cart(); ?>
						</div>
					</div>
				</div>
			</div> <!-- product-card End -->


			<!-- <div class="p-detail other-p-style">
					<div class="t-content">
						
						
					</div>
					<div class="price-tag">
						<div class="tag-holder">
							
						</div>
					</div>
					<div class="qty-btn">
						
					</div>
					<div class="btm-block">

					</div>
				</div> -->
		</div>
	</div>
	<?php $tabs = apply_filters( 'woocommerce_product_tabs', array() );
	if ( ! empty( $tabs ) ) : ?>
	<div class="description-tab">
		<ul class="nav nav-tabs" role="tablist">
			<?php foreach ( $tabs as $key => $tab ) : ?>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#<?php echo esc_attr( $key ); ?>" role="tab"
					aria-controls="home"
					aria-selected="true"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
			</li>
			<?php endforeach; ?>

		</ul>
		<div class="tab-content" id="myTabContent">
			<?php foreach ( $tabs as $key => $tab ) : ?>
			<div class="tab-pane fade show active" id="<?php echo esc_attr( $key ); ?>" role="tabpanel">
				<?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php get_template_part( 'sections/ex', 'trending-product' );