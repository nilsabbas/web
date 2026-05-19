<?php
/**
 * Files to managed the all function related to widgets
 *
 * @package nanda
 * @since 1.0.0
 *
 */

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nanda_widgets_init() {

// First footer widget area, located in the footer. Empty by default.
	
	register_sidebar( array(
		'name' => __( 'About Us', 'nanda' ),
		'description' => __( 'Appears in the footer area', 'nanda' ),
		'id' => 'footer-about-widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
			'name' => __( 'Quick Links 1', 'nanda' ),
			'description' => __( 'Appears in the footer area', 'nanda' ),
			'id' => 'popular-search-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			) );

	register_sidebar( array(
	'name' => __( 'Quick Links 2', 'nanda' ),
	'description' => __( 'Appears in the footer area', 'nanda' ),
	'id' => 'social-media-widget',
	'before_widget' => '<div id="%1$s" class="widget %2$s socialmedia">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );  

	register_sidebar( array(
		'name' => __( 'Our Address', 'nanda' ),
		'description' => __( 'Appears in the footer area', 'nanda' ),
		'id' => 'contact-address-widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s socialmedia">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );  
		
  
	register_sidebar( array(
		'name' => __( 'Add Footer Copyright/Links Details', 'nanda' ),
		'description' => __( 'Appears in the footer area', 'nanda' ),
		'id' => 'footer-copyright-widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) ); 
		
	}
add_action( 'widgets_init', 'nanda_widgets_init' );
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Register various widgets
 *
 * @since 1.0.0
 */

function nanda_register_widget() {

	if( nanda_is_woocommerce_activated() ) {
		register_widget( 'nanda_Popular_Products' );
	}
}

add_action( 'widgets_init', 'nanda_register_widget' );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Load important files for widgets
 *
 * @since 1.0.0
 */

require get_template_directory() . '/inc/widgets/widget-fields.php';
if( nanda_is_woocommerce_activated() ) {
	require get_template_directory() . '/inc/widgets/popular-product-widget.php';
}