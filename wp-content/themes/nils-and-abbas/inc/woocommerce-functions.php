<?php
/**
 * woocommerce-functions.php.
 *
 * @version 1.1.0
 */

if ( ! function_exists( 'nanda_init' ) ) {
	/**
	 * nanda_init.
	 *
	 * @version 1.1.0
	 */
	function nanda_init() {

		remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper',     10 );
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',                 20 );
		remove_action( 'woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10 );

		add_action( 'woocommerce_before_main_content', 'nanda_before_main_content', 10 );
		add_action( 'woocommerce_after_main_content',  'nanda_after_main_content',  10 );
	}
	nanda_init();
}

if ( ! function_exists( 'nanda_before_main_content' ) ) {
	/**
	 * nanda_before_main_content.
	 */
	function nanda_before_main_content() {
		?>
		<section class="gridpage rev-page block">
			<div class="container">
				<div class="row">
		<?php
	}
}

if ( ! function_exists( 'nanda_after_main_content' ) ) {
	/**
	 * nanda_after_main_content.
	 */
	function nanda_after_main_content() {
		?>
				</div>
			</div>
		</section>
		<?php
	}
}

if ( ! function_exists( 'nanda_add_to_cart_dropdown' ) ) {
	/**
	 * nanda_add_to_cart_dropdown.
	 */
	function nanda_add_to_cart_dropdown() {
		?>
		<ul class="cart">
			<?php
			global $woocommerce;
			$cart_contents_count = $woocommerce->cart->cart_contents_count;
			$cart_url = esc_url(wc_get_cart_url());
			?>
			<li class="dropdown">
				<div class="btn mini-cart">
					<a href="#" class="cart-btn">
						<span class="fa fa-shopping-cart fa-icon" aria-hidden="true"></span>
						<span class="badge badge-light"><?php echo absint( $cart_contents_count );?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" >
						<?php if ( ! WC()->cart->is_empty() ) : ?>
						<div class="mini-cart-media">
							<?php
							foreach( WC()->cart->cart_contents as $cart_item_key => $cart_item ):
								$item = $cart_item['data'];
								$item_id = $item->get_id();
								$item_name = $item->get_name();
								$qty = $cart_item['quantity'];
								?>
								<div class="media">
									<?php if ( has_post_thumbnail( $item_id ) ) {
										$product_image_url  = get_the_post_thumbnail_url($item_id, 'nanda-add-to-cart-dropdown-74-*-81');?>
										<img class="mr-3" src="<?php echo esc_url( $product_image_url);?>" alt="">
									<?php }?>
									<div class="media-body">
										<a href="<?php echo esc_url(get_permalink($item_id));?>"><h6 class="mt-0"><?php echo esc_html($item_name);?></h6></a>
										<div class="price-tag">
											<?php $currency = get_woocommerce_currency_symbol();?>
											<p>
												<span class="discount-tag">
													<?php echo esc_html($currency);?><?php echo esc_html(get_post_meta($item_id, '_regular_price', true));?>
												</span>
												<?php echo esc_html($currency);?><?php echo esc_html(get_post_meta($item_id , '_sale_price', true));?>
											</p>
										</div>
									</div>

									<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s"><span class="fa fa-times-circle"></span></a>', esc_url( wc_get_cart_remove_url( $cart_item_key )  ), __( 'Remove this item', 'nanda' ) ), $cart_item_key ); ?>
								</div>
							<?php endforeach;?>
							<div class="subtotal">
								<div class="text">
									<?php esc_html_e( 'Subtotal', 'nanda' ); ?>
								</div>
								<div class="total-num">
									<?php echo WC()->cart->get_cart_subtotal(); ?>
								</div>
							</div>
							<div class="cart-checkout">
								<a href="<?php echo esc_url(get_permalink( wc_get_page_id( 'cart' ) )); ?>" class="btn view-btn"><?php esc_html_e('View Cart','nanda');?></a>
								<a href="<?php echo esc_url(get_permalink( wc_get_page_id( 'checkout' ) )); ?>" class="btn checkout-btn"><?php esc_html_e('Checkout','nanda');?></a>
							</div>
						</div>

						<?php else:?>
							<div class="mini-cart-media"><?php esc_attr_e( 'No products in the cart.', 'nanda' ); ?></div>
						<?php endif;?>

					</div>
				</div>
			</li>
		</ul>
		<?php
	}
}

if ( ! function_exists( 'nanda_show_product_images' ) ) {
	/**
	 * Overwrite Product single Page Start
	 */
	function nanda_show_product_images() {
		global $product;
		$post_thumbnail_id = $product->get_id();
		$product_thumb_url = get_the_post_thumbnail_url($post_thumbnail_id,'nanda-single-product-thumb-510*-510');
		?>
		<img src="<?php echo esc_url($product_thumb_url);?>" alt="">
		<?php
	}
}

if ( ! function_exists( 'nanda_output_related_products' ) ) {
	/**
	 * nanda_output_related_products.
	 *
	 * @todo    [dev] this is not used anywhere
	 */
	function nanda_output_related_products() {

		global $product;
		$args = array(
			'posts_per_page' => 4,
			'columns'        => 4,
			'orderby'        => 'rand', // @codingStandardsIgnoreLine.
		);
		if ( ! $product ) {
			return;
		}

		$defaults = array(
			'posts_per_page' => 6,
			'orderby'        => 'rand', // @codingStandardsIgnoreLine.
			'order'          => 'desc',
		);

		$args = wp_parse_args( $args, $defaults );

		// Get visible related products then sort them at random.
		$args['related_products'] = array_filter( array_map( 'wc_get_product', wc_get_related_products( $product->get_id(), $args['posts_per_page'], $product->get_upsell_ids() ) ), 'wc_products_array_filter_visible' );

		// Handle orderby.
		$args['related_products'] = wc_products_array_orderby( $args['related_products'], $args['orderby'], $args['order'] );

		// Set global loop values.
		wc_set_loop_prop( 'name', 'related' );

		wc_get_template( 'single-product/related.php', $args );
	}
}

if ( ! function_exists( 'nanda_template_single_title' ) ) {
	/**
	 * nanda_template_single_title.
	 */
	function nanda_template_single_title() {
		the_title( '<p class="font-bold lead">', '</p>' );
	}
}

if ( ! function_exists( 'nanda_template_single_excerpt' ) ) {
	/**
	 * nanda_template_single_excerpt.
	 */
	function nanda_template_single_excerpt() {
		global $post;

		$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

		if ( ! $short_description ) {
			return;
		}?>
		<div class="woocommerce-product-details__short-description">
			<?php echo $short_description; // WPCS: XSS ok. ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'nanda_template_single_add_to_cart' ) ) {
	/**
	 * nanda_template_single_add_to_cart.
	 *
	 * @version 1.1.0
	 * @todo    [fix] variable default variation
	 */
	function nanda_template_single_add_to_cart(){
		global $product;

		if ( ! $product->is_purchasable() ) {
			return;
		}

		switch ( $product->get_type() ) {
			case 'grouped':
				woocommerce_grouped_add_to_cart();
				return;
			case 'variable':
				woocommerce_variable_add_to_cart();
				return;
			case 'external':
				woocommerce_external_add_to_cart();
				return;
		}

		echo wc_get_stock_html( $product );

		if ( $product->is_in_stock() ) : ?>

			<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

			<form class="detail-select cart" action="<?php echo esc_url( get_permalink() ); ?>" method="post" enctype='multipart/form-data'>
			<?php
			/**
			 * @since 2.1.0.
			 */
			do_action( 'woocommerce_before_add_to_cart_button' );

			/**
			 * @since 3.0.0.
			 */
			do_action( 'woocommerce_before_add_to_cart_quantity' );

			woocommerce_quantity_input( array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
			) );

			/**
			 * @since 3.0.0.
			 */
			do_action( 'woocommerce_after_add_to_cart_quantity' );
			?>

			<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn-secondary btn-block"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

			<?php
			/**
			 * @since 2.1.0.
			 */
			do_action( 'woocommerce_after_add_to_cart_button' );
			?>
			</form>

			<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

		<?php endif; ?>
	<?php
	}
}

if ( ! function_exists( 'nanda_product_thumbnail' ) ) {
	/**
	 * nanda_product_thumbnail.
	 *
	 * @version 1.1.0
	 * @since   1.1.0
	 * @todo    [dev] add option for toggling `$do_use_placeholder`
	 * @todo    [dev] use correct placeholder image size (i.e. instead of `woocommerce_single`)
	 */
	function nanda_product_thumbnail( $post_id = 0 ) {
		if ( 0 == $post_id ) {
			$post_id = get_the_ID();
		}
		$thumbnail = get_the_post_thumbnail( $post_id, 'nanda-single-product-270-*-345', array('class'=>'mr-5') );
		$do_use_placeholder = true;
		echo( $thumbnail ? $thumbnail : ( $do_use_placeholder ?
			sprintf( '<img src="%s" alt="%s" class="mr-5 wp-post-image" />',
				esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) ) : '' ) );
	}
}
