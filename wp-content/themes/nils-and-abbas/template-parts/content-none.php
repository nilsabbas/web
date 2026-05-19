<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanda
 */

?>

<section class="no-results not-found">
	<header class="page-head default">
		<div class="container">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'nanda' ); ?></h1>
		</div>
	</header><!-- .page-header -->



	<div class="page-content section">
		<div class="container">
			<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nanda' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nanda' ); ?>
			</p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nanda' ); ?>
			</p>


			<div class="search-form">
				<?php
			get_search_form();

		endif;
		?>
			</div>


		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->