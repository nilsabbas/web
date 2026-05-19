<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage nanda
 * @since nanda 1.0
 */

get_header();
?>

<main id="site-content" role="main">
<section class="blog-list">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="blogs">
					<div class="blog-holder">
						<div class="blog-body">
							<h4 class="mt-0"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nanda' ); ?></h4>

							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nanda' ); ?></p>
							<?php
							get_search_form();
							?>
						</div>	
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>	
</main>
<?php
get_footer();
?>

