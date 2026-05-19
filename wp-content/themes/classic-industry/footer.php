<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Classic Industry
 */
?>
<div id="footer">
  <?php 
    $footer_widget_enabled = get_theme_mod('classic_industry_footer_widget', false);
    
    if ($footer_widget_enabled !== false && $footer_widget_enabled !== '') { ?>

        <div class="footer-widget">
            <div class="container">
                <?php if (!dynamic_sidebar('footer-1')) : ?>
                <?php endif; // end footer widget area ?>
                      
                <?php if (!dynamic_sidebar('footer-2')) : ?>
                <?php endif; // end footer widget area ?>
              
                <?php if (!dynamic_sidebar('footer-3')) : ?>
                <?php endif; // end footer widget area ?>
                
                <?php if (!dynamic_sidebar('footer-4')) : ?>
                <?php endif; // end footer widget area ?>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
  <div class="copywrap text-center">
    <div class="container">
      <p><a href="<?php echo esc_html(get_theme_mod('classic_industry_copyright_link',__('https://www.theclassictemplates.com/products/free-industry-wordpress-theme','classic-industry'))); ?>" target="_blank"><?php echo esc_html(get_theme_mod('classic_industry_copyright_line',__('Classic Industry WordPress Theme','classic-industry'))); ?></a> <?php echo esc_html('By Classic Templates','classic-industry'); ?></p>
    </div>
  </div>
</div>

<?php if(get_theme_mod('classic_industry_scroll_hide',true)){ ?>
 <a id="button"><?php esc_html_e('TOP', 'classic-industry'); ?></a>
<?php } ?>
  
<?php wp_footer(); ?>
</body>
</html>
