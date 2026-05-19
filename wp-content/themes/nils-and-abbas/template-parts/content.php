<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanda
 * 
 */
?>
<div class="blog-holder">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<a href="<?php the_permalink();?>" class="blog-image">
			<div class="img-thumbnail"><?php the_post_thumbnail();?></div>
		</a>
		<div class="blog-body">

			<?php
			if ( is_singular() ) :
				the_title( '<h2 class="mb-2">', '</h2>' );
			else :
				the_title( '<h3 class="mb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="heading-3">', '</a></h3>' );
			endif;?>
			<span class="d-block date mb-2"><?php nanda_posted_on();?></span>
			<div class="page-content mb-3">
				<?php the_content();?>
				<?php if(is_archive()):?>
				<a href="<?php the_permalink();?>"
					class="btn btn-light"><?php echo esc_html__('Read More','nanda');?></a>
				<?php endif;?>
			</div> <!-- page-content End -->
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><?php nanda_posted_by();?></li>
				<!-- <li class="breadcrumb-item"><span class="title"><?php // esc_html_e('Comments:','nanda');?></span>
					<span class="comment-number"><?php // echo esc_html(get_comments_number());?></span></li> -->
			</ul>
		</div>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nanda' ),
			'after'  => '</div>',
		) );
		?>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>