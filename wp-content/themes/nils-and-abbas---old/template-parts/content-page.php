<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanda
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-body">
		<!-- <span class="date"><?php //nanda_posted_on(); the_permalink(); ?></span> -->
<?php if(has_post_thumbnail()){ ?>
		<div class="page-head" style="background-image:url('<?php the_post_thumbnail_url();?>')">
		<div class="container">
		<?php
			if ( is_singular() ) :
				the_title( '<h2 class="page-title">', '</h2>' );
			else :
				the_title( '<h2 class="page-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;?>
		</div>
	</div> <!-- page-head End -->
	<?php } ?>
	 <div class="inner-page-content">
	 <?php the_content();?>
	 </div> <!-- page-content End -->
		<?php if(!is_page()):?>
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><?php nanda_posted_by();?></li>
			<!-- <li class="breadcrumb-item"><span class="title"><?php //esc_html_e('Comments:','nanda');?></span> <span
					class="comment-number"><?php // echo esc_html(get_comments_number());?></span></li> -->
		</ul>
		<?php endif;?>
	</div>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nanda' ),
			'after'  => '</div>',
		) );
		?>

</div><!-- #post-<?php the_ID(); ?> -->