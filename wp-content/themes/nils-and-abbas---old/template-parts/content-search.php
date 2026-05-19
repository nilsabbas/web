<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanda
 */

?>
	<div class="search-results pb-5 pt-5">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inner-page-content">
		<div class="container">
		<?php
			if ( is_singular() ) :
				the_title( '<h2 class="mb-2">', '</h2>' );
			else :
				the_title( '<h3 class="mb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="heading-3">', '</a></h2>' );
			endif;?>
			<span class="d-block date mb-4"><?php nanda_posted_on();?></span>
			<?php if(has_post_thumbnail()){ ?>
			<div class="post-thump mb-3 d-none">
				<!-- <img src="<?php //the_post_thumbnail_url();?>" alt="<?php //the_ID(); ?>" class="img-fluid"> -->
			</div>
			<?php } ?>
			<div class="inner-page-content-body">
			<?php the_content();?>
			</div>


		<ul class="breadcrumb">
				<li class="breadcrumb-item"><?php nanda_posted_by();?></li>
				<!-- <li class="breadcrumb-item"><span class="title"><?php// esc_html_e('Comments:','nanda');?></span> <span class="comment-number"><?php // echo esc_html(get_comments_number());?></span></li> -->
			</ul>
		</div>
	 </div> <!-- page-content End -->
	</article><!-- #post-<?php the_ID(); ?> -->
	</div>
