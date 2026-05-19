<?php
/**
 * Header file for the nanda WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage nanda
 * @since nanda 1.0
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name');?></title>
	<meta name="title" content="<?php bloginfo('name');?>">
	<meta name="description" content="<?php bloginfo('description');?>">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
	<!-- <link
		href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
		rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>



	<?php wp_head();?>
</head>

<body <?php body_class();?>>
	<?php
        wp_body_open();
    ?>
	<header id="header" class="main-header" role="header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars"></i>
    </button>
				<?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                    ?>
				<?php
                            wp_nav_menu([
                                'menu' => 'primary',
                                'theme_location' => 'nanda-menu',
                                'container' => 'div',
                                'container_id' => 'navbarCollapse',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_id' => true,
                                'menu_class' => 'navbar-nav ml-lg-auto',
                                'depth' => 0,
                                'fallback_cb' => 'bs4navwalker::fallback',
                                'walker' => new nanda_Navwalker(),
                            ]);
                            ?>
			</div>
		</nav> <!-- main navigation -->
	</header>
	<!-- Site-header End -->