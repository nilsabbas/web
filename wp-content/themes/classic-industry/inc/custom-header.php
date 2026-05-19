<?php
/**
 * @package Classic Industry
 * Setup the WordPress core custom header feature.
 *
 * @uses classic_industry_header_style()
 */
function classic_industry_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'classic_industry_custom_header_args', array(
		'default-text-color'     => 'fff',
		'width'                  => 2500,
		'height'                 => 400,
		'wp-head-callback'       => 'classic_industry_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'classic_industry_custom_header_setup' );

if ( ! function_exists( 'classic_industry_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see classic_industry_custom_header_setup().
 */
function classic_industry_header_style() {
	$classic_industry_header_text_color = get_header_textcolor();

	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat !important;
			background-position: center top;
			background-size: cover !important;
		}

	<?php endif; ?>	

	.page-template-template-home-page .site-title a, .page-template-template-home-page p.site-title a, h1.site-title a, p.site-title a{
		color: <?php echo esc_attr(get_theme_mod('classic_industry_sitetitle_color')); ?> !important;
	}

	.page-template-template-home-page .site-description, .site-description{
		color: <?php echo esc_attr(get_theme_mod('classic_industry_sitetagline_color')); ?> !important;
	}

	.main-nav ul li a {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_menu_color')); ?> !important;
	}

	.main-nav a:hover{
		color: <?php echo esc_attr(get_theme_mod('classic_industry_menuhrv_color')); ?> !important;
	}

	.main-nav ul ul a{
		color: <?php echo esc_attr(get_theme_mod('classic_industry_submenu_color')); ?> !important;
	}

	.main-nav ul ul a:hover {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_submenuhrv_color')); ?> !important;
	}

	.sliderbox h1 a{
		color: <?php echo esc_attr(get_theme_mod('classic_industry_slidertitle_color')); ?> !important;
	}
	#slider .redmor {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_sliderbutton1text_color')); ?> !important;
	}
	#slider .redmor {
		background-color: <?php echo esc_attr(get_theme_mod('classic_industry_sliderbutton1_color')); ?> !important;
	}

	.copywrap p {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_footercoypright_color')); ?> !important;
	}
	#footer h6 {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_footertitle_color')); ?> !important;

	}
	#footer p {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_footerdescription_color')); ?>;
	}
	#footer ul li a {
		color: <?php echo esc_attr(get_theme_mod('classic_industry_footerlist_color')); ?>;

	}
	#footer {
		background-color: <?php echo esc_attr(get_theme_mod('classic_industry_footerbg_color')); ?>;
	}
	

	</style>
	<?php 
}
endif;