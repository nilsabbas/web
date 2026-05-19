<?php 
/**
 * The woocommerce template file
 *
 * @link https://wordpress.org/support/topic/starting-with-woocommerce-plugin-development/
 *
 * @package WordPress
 * @subpackage nanda
 * @since nanda 1.0
 */
get_header(); 
?>
<main id="woocommerce" class="woocommerce-container">
    <div class="container">
    <?php woocommerce_content(); ?>
    </div>
</main>
<?php get_footer(); ?>