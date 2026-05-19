<?php



/**

 * nanda functions and definitions

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package WordPress

 * @subpackage nanda

 * @since nanda 1.0

 */



if (!function_exists('nanda_setup')) :

	/**

	 * Sets up theme defaults and registers support for various WordPress features.

	 *

	 * Note that this function is hooked into the after_setup_theme hook, which

	 * runs before the init hook. The init hook is too late for some features, such

	 * as indicating support for post thumbnails.

	 */



	function nanda_setup()

	{









		// Add default posts and comments RSS feed links to head.

		add_theme_support('automatic-feed-links');



		/*

			 * Let WordPress manage the document title.

			 * By adding theme support, we declare that this theme does not use a

			 * hard-coded <title> tag in the document head, and expect WordPress to

			 * provide it for us.

		*/

		add_theme_support('title-tag');



		/*

			 * Enable support for Post Thumbnails on posts and pages.

			 *

			 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

		*/

		add_theme_support('post-thumbnails');

		add_image_size('nanda-banner-1440-*-667', 1440, 667, true);

		add_image_size('nanda-banner-1920-*-1080', 1920, 1080, true);

		add_image_size('nanda-blog-825-*-346', 825, 346, true);

		add_image_size('nanda-blog-image-257-*-232', 257, 232, true);

		add_image_size('nanda-partner-logo-215-*-156', 215, 156, true);

		// This theme uses wp_nav_menu() in one location.

		register_nav_menus(array(

			'nanda-menu' => esc_html__('nanda Menu', 'nanda'),

		));



		/*

			 * Switch default core markup for search form, comment form, and comments

			 * to output valid HTML5.

		*/

		add_theme_support('html5', array(

			'search-form',

			'comment-form',

			'comment-list',

			'gallery',

			'caption',

		));



		// Set up the WordPress core custom background feature.

		add_theme_support('custom-background', apply_filters('nanda_custom_background_args', array(

			'default-color' => 'ffffff',

			'default-image' => '',

		)));



		// Add theme support for selective nanda for widgets.

		add_theme_support('customize-selective-nanda-widgets');



		// Woocommerce Support

		add_theme_support('woocommerce');



		/**

		 * Add support for core custom logo.

		 *

		 * @link https://codex.wordpress.org/Theme_Logo

		 */

		add_theme_support('custom-logo', array(

			'height' => 152,

			'width' => 500,

			'flex-width' => true,

			'flex-height' => true,

		));

	}

endif;

add_action('after_setup_theme', 'nanda_setup');



/**

 * Set the content width in pixels, based on the theme's design and stylesheet.

 *

 * Priority 0 to make it available to lower priority callbacks.

 *

 * @global int $content_width

 */

function nanda_content_width()

{

	// This variable is intended to be overruled from themes.

	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

	$GLOBALS['content_width'] = apply_filters('nanda_content_width', 640);

}

add_action('after_setup_theme', 'nanda_content_width', 0);



/**

 * Enqueue scripts and styles.

 */

require get_template_directory() . '/inc/enqueue.php';



/**

 * Custom template tags for this theme.

 */

require get_template_directory() . '/inc/template-tags.php';



/**

 * Functions which enhance the theme by hooking into WordPress.

 */

require get_template_directory() . '/inc/template-functions.php';



/**

 * Bootstrap Navwalker

 */

require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';



/**

 * Popular Product Widget

 */

require get_template_directory() . '/inc/widgets/widget-functions.php';



/**

 * Load WooCommerce compatibility file.

 */

if (class_exists('WooCommerce')) {

	require get_template_directory() . '/inc/woocommerce.php';

}



add_filter('walker_nav_menu_start_el', 'nanda_walker_nav_menu_start_el', 10, 4);



function nanda_walker_nav_menu_start_el($item_output, $item, $depth = 0, $args = array(), $id = 0)

{

	if ($depth == 0) {

		$item_output = preg_replace('/<a /', '<a class="nav-link" ', $item_output, 1);

	} else if ($depth > 0) {

		$item_output = preg_replace('/<a /', '<a class="dropdown-item" ', $item_output, 1);

	}

	return $item_output;

}



function my_custom_mime_types($mimes)

{



	// New allowed mime types.

	$mimes['svg'] = 'image/svg+xml';

	$mimes['svgz'] = 'image/svg+xml';

	$mimes['doc'] = 'application/msword';



	// Optional. Remove a mime type.

	unset($mimes['exe']);



	return $mimes;

}



add_filter('upload_mimes', 'my_custom_mime_types');



/**

 * Load Jetpack compatibility file.

 */

if (defined('JETPACK__VERSION')) {

	require get_template_directory() . '/inc/jetpack.php';

}



@ini_set('upload_max_size', '500M');

@ini_set('post_max_size', '1000M');

@ini_set('max_execution_time', '500');



function add_script()
{
   wp_register_script('slim', get_template_directory_uri() . '/assets/js/jquery.slim.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'slim');
   wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'aos');
   wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'slick');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'script');
}
add_action('wp_enqueue_scripts', 'add_script');



function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url(/wp-content/uploads/2024/05/N-A-Logo.png);
      background-size: contain;
      background-repeat: no-repeat;
      width: 300px; /* Adjust width as needed */
      height: 100px; /* Adjust height as needed */
      padding: 0;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


add_filter('login_errors', 'custom_login_error_message');

function custom_login_error_message($error) {
    if ( strpos($error, '<strong>Invalid username or password.</strong>') !== false ) {
        $error = '<strong>There seems to be a problem with your username or password. Please try again.</strong>';
    }
    return $error;
}

// Custom menu registration start ---
add_action('admin_menu', 'reg_product_menu');
function reg_product_menu() {
    add_menu_page(
        'Custom Product',    // Page title
        'Custom Product',    // Menu title
        'manage_options',    // Capability
        'menu_custom_product',    // Menu slug
        '', // Callback function to display content
        'dashicons-bank', // Icon URL or Dashicons class
        6                     // Position in the menu
    );
}
// Custom menu registration End ---