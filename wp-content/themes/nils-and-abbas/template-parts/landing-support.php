<?php
/**
 * Template part for landing page details
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanda
 */

?>
<div class="landing-page">
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content();?>
</section><!-- #post-<?php the_ID(); ?> -->
</div>

