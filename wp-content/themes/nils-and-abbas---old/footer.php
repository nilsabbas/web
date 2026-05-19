<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage nanda
 * @since nanda 1.0
 */
?>
<footer id="footer" class="main-footer" role="contentinfo">
	<div class="footer-top">
		<div class="container">
			<div class="main-footer-widget">
				<?php if(is_active_sidebar('footer-about-widget')){ ?>
				<div class="main-footer-widget-item about-block">
					<?php dynamic_sidebar('footer-about-widget'); ?>
				</div>
				<?php } ?>
				<?php if(is_active_sidebar('popular-search-widget')){ ?>
				<div class="main-footer-widget-item popular-block">
					<?php dynamic_sidebar('popular-search-widget'); ?>
				</div>
				<?php } ?>
				<?php if(is_active_sidebar('social-media-widget')){ ?>
				<div class="main-footer-widget-item social-block">
					<?php dynamic_sidebar('social-media-widget'); ?>
				</div>
				<?php } ?>
				<?php if(is_active_sidebar('contact-address-widget')){ ?>
				<div class="main-footer-widget-item address-block">
					<?php dynamic_sidebar('contact-address-widget'); ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div> <!-- footer top end -->
	<?php if(is_active_sidebar('footer-copyright-widget')){	?>
	<div class="footer-bottom">
		<div class="container">
			<?php dynamic_sidebar('footer-copyright-widget'); ?>
		</div>
	</div> <!-- footer bottom end -->
	<?php } ?>
</footer>
<button id="goTop" class="btn btn-primary">
<i class="fa-sharp fa-solid fa-arrow-up"></i>
</button>
<?php wp_footer(); ?>

 
</body>

</html>