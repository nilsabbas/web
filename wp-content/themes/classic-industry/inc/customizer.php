<?php
/**
 * Classic Industry Theme Customizer
 *
 * @package Classic Industry
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function classic_industry_customize_register( $wp_customize ) {

	function classic_industry_sanitize_dropdown_pages( $page_id, $setting ) {
  		$page_id = absint( $page_id );
  		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	wp_enqueue_style('classic-industry-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');

	//Logo
    $wp_customize->add_setting('classic_industry_logo_width',array(
		'default'=> '',
		'transport' => 'refresh',
		'sanitize_callback' => 'classic_industry_sanitize_integer'
	));
	$wp_customize->add_control(new Classic_Industry_Slider_Custom_Control( $wp_customize, 'classic_industry_logo_width',array(
		'label'	=> esc_html__('Logo Width','classic-industry'),
		'section'=> 'title_tagline',
		'settings'=>'classic_industry_logo_width',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	// color site title
	$wp_customize->add_setting('classic_industry_sitetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_industry_sitetitle_color', array(
	   'settings' => 'classic_industry_sitetitle_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Title Color', 'classic-industry'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('classic_industry_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_industry_title_enable', array(
	   'settings' => 'classic_industry_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','classic-industry'),
	   'type'      => 'checkbox'
	));

	// color site tagline
	$wp_customize->add_setting('classic_industry_sitetagline_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_sitetagline_color', array(
	   'settings' => 'classic_industry_sitetagline_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Tagline Color', 'classic-industry'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('classic_industry_tagline_enable',array(
		'default' => false,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_industry_tagline_enable', array(
	   'settings' => 'classic_industry_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','classic-industry'),
	   'type'      => 'checkbox'
	));

	// woocommerce section
	$wp_customize->add_section('classic_industry_woocommerce_page_settings', array(
		'title'    => __('WooCommerce Page Settings', 'classic-industry'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('classic_industry_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'classic_industry_sanitize_checkbox'
	 ));
	 $wp_customize->add_control('classic_industry_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __(' Check To Enable Shop page sidebar','classic-industry'),
		'section' => 'classic_industry_woocommerce_page_settings',
	 ));
    // shop page sidebar alignment
    $wp_customize->add_setting('classic_industry_shop_page_sidebar_position', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'classic_industry_sanitize_choices',
	));
	$wp_customize->add_control('classic_industry_shop_page_sidebar_position',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Sidebar', 'classic-industry'),
		'section'        => 'classic_industry_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'classic-industry'),
			'Right Sidebar' => __('Right Sidebar', 'classic-industry'),
		),
	));	 
	 $wp_customize->add_setting( 'classic_industry_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'classic_industry_sanitize_checkbox'
    ) );
    $wp_customize->add_control('classic_industry_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Check To Enable Single Product Page Sidebar','classic-industry'),
		'section' => 'classic_industry_woocommerce_page_settings'
    ));

	// single product page sidebar alignment
    $wp_customize->add_setting('classic_industry_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'classic_industry_sanitize_choices',
	));
	$wp_customize->add_control('classic_industry_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page Sidebar', 'classic-industry'),
		'section'        => 'classic_industry_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'classic-industry'),
			'Right Sidebar' => __('Right Sidebar', 'classic-industry'),
		),
	));

	$wp_customize->add_setting( 'classic_industry_woo_product_img_border_radius', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'classic_industry_sanitize_integer'
    ) );
    $wp_customize->add_control(new classic_industry_Slider_Custom_Control( $wp_customize, 'classic_industry_woo_product_img_border_radius',array(
		'label'	=> esc_html__('Woo Product Img Border Radius','classic-industry'),
		'section'=> 'classic_industry_woocommerce_page_settings',
		'settings'=>'classic_industry_woo_product_img_border_radius',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	// Add a setting for number of products per row
	$wp_customize->add_setting('classic_industry_products_per_row', array(
		'default'   => '3',
		'transport' => 'refresh',
		'sanitize_callback' => 'classic_industry_sanitize_integer'
	));

	$wp_customize->add_control('classic_industry_products_per_row', array(
		'label'    => __('Woo Products Per Row', 'classic-industry'),
		'section'  => 'classic_industry_woocommerce_page_settings',
		'settings' => 'classic_industry_products_per_row',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
		),
	) );

	// Add a setting for the number of products per page
	$wp_customize->add_setting('classic_industry_products_per_page', array(
		'default'   => '9',
		'transport' => 'refresh',
		'sanitize_callback' => 'classic_industry_sanitize_integer'
	));

	$wp_customize->add_control('classic_industry_products_per_page', array(
		'label'    => __('Woo Products Per Page', 'classic-industry'),
		'section'  => 'classic_industry_woocommerce_page_settings',
		'settings' => 'classic_industry_products_per_page',
		'type'     => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'step' => 1,
		),
	));

    $wp_customize->add_setting('classic_industry_product_sale_position',array(
        'default' => 'Left',
        'sanitize_callback' => 'classic_industry_sanitize_choices'
	));
	$wp_customize->add_control('classic_industry_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','classic-industry'),
        'section' => 'classic_industry_woocommerce_page_settings',
        'choices' => array(
            'Left' => __('Left','classic-industry'),
            'Right' => __('Right','classic-industry'),
        ),
	) );	

	//Theme Options
	$wp_customize->add_panel( 'classic_industry_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'classic-industry' ),
	) );

	//Site Layout Section
	$wp_customize->add_section('classic_industry_site_layoutsec',array(
		'title'	=> __('Manage Site Layout Section ','classic-industry'),
		'description' => __('<p class="sec-title">Manage Site Layout Section</p>','classic-industry'),
		'priority'	=> 1,
		'panel' => 'classic_industry_panel_area',
	));

	$wp_customize->add_setting('classic_industry_box_layout',array(
		'default' => false,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_industry_box_layout', array(
	   'section'   => 'classic_industry_site_layoutsec',
	   'label'	=> __('Check to Show Box Layout','classic-industry'),
	   'type'      => 'checkbox'
 	));

	$wp_customize->add_setting('classic_industry_preloader',array(
		'default' => true,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_industry_preloader', array(
	   'section'   => 'classic_industry_site_layoutsec',
	   'label'	=> __('Check to Show preloader','classic-industry'),
	   'type'      => 'checkbox'
 	));

	$wp_customize->add_setting( 'classic_industry_layout_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('classic_industry_layout_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			<a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'classic_industry_site_layoutsec'
	));	

   //Global Color
    $wp_customize->add_section('classic_industry_global_color', array(
	    'title'    => __('Manage Global Color Section', 'classic-industry'),
	    'panel'    => 'classic_industry_panel_area',
    ));
    $wp_customize->add_setting('classic_industry_first_color', array(
        'default'           => '#250d01',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'classic_industry_first_color', array(
	  'label'    => __('Theme Color', 'classic-industry'),
	  'section'  => 'classic_industry_global_color',
	  'settings' => 'classic_industry_first_color',
    )));	

    $wp_customize->add_setting('classic_industry_second_color', array(
        'default'           => '#ff590c',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'classic_industry_second_color', array(
	  'label'    => __('Theme Color', 'classic-industry'),
	  'section'  => 'classic_industry_global_color',
	  'settings' => 'classic_industry_second_color',
    )));
	
	$wp_customize->add_setting( 'classic_industry_global_color_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('classic_industry_global_color_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			<a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'classic_industry_global_color'
	));		

 	// Header Section
	$wp_customize->add_section('classic_industry_header_section', array(
        'title' => __('Manage Header Section', 'classic-industry'),
		'description' => __('<p class="sec-title">Manage Header Section</p>','classic-industry'),
        'priority' => null,
		'panel' => 'classic_industry_panel_area',
 	));

 	$wp_customize->add_setting('classic_industry_stickyheader',array(
		'default' => false,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_industry_stickyheader', array(
	   'section'   => 'classic_industry_header_section',
	   'label'	=> __('Check To Show Sticky Header','classic-industry'),
	   'type'      => 'checkbox'
 	));

 	$wp_customize->add_setting('classic_industry_phone_number_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_phone_number_text', array(
	   'settings' => 'classic_industry_phone_number_text',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Phone Text', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_phone_number',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_phone_number', array(
	   'settings' => 'classic_industry_phone_number',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Phone Number', 'classic-industry'),
	   'type'      => 'text'
	));

 	$wp_customize->add_setting('classic_industry_time_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_time_text', array(
	   'settings' => 'classic_industry_time_text',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Opening Time Text', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_time',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_time', array(
	   'settings' => 'classic_industry_time',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Opening Time', 'classic-industry'),
	   'type'      => 'text'
	));

 	$wp_customize->add_setting('classic_industry_email_address_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_email_address_text', array(
	   'settings' => 'classic_industry_email_address_text',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Email Text', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_email_address',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_email_address', array(
	   'settings' => 'classic_industry_email_address',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Email Address', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_contact_us_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_contact_us_text', array(
	   'settings' => 'classic_industry_contact_us_text',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Button Text', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_contact_us_url',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_contact_us_url', array(
	   'settings' => 'classic_industry_contact_us_url',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Add Button URL', 'classic-industry'),
	   'type'      => 'url'
	));

	// header menu
	$wp_customize->add_setting('classic_industry_menu_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_menu_color', array(
	   'settings' => 'classic_industry_menu_color',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Menu Color', 'classic-industry'),
	   'type'      => 'color'
	));

	// header menu hover color
	$wp_customize->add_setting('classic_industry_menuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_menuhrv_color', array(
	   'settings' => 'classic_industry_menuhrv_color',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('Menu Hover Color', 'classic-industry'),
	   'type'      => 'color'
	));

	// header sub menu color
	$wp_customize->add_setting('classic_industry_submenu_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_submenu_color', array(
	   'settings' => 'classic_industry_submenu_color',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('SubMenu Color', 'classic-industry'),
	   'type'      => 'color'
	));

	// header sub menu hover color
	$wp_customize->add_setting('classic_industry_submenuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_submenuhrv_color', array(
	   'settings' => 'classic_industry_submenuhrv_color',
	   'section'   => 'classic_industry_header_section',
	   'label' => __('SubMenu Hover Color', 'classic-industry'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting( 'classic_industry_header_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('classic_industry_header_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			<a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'classic_industry_header_section'
	));	

	//Slider
  	$wp_customize->add_section('classic_industry_slider_section',array(
	    'title' => __('Manage Slider Section','classic-industry'),
	    'priority'  => null,
	    'description'	=> __('<p class="sec-title">Manage Slider Section</p> Select Category from the Dropdowns for slider, Also use the given image dimension (550 x 450).','classic-industry'),
	    'panel' => 'classic_industry_panel_area',
	));

	$wp_customize->add_setting('classic_industry_slider',array(
		'default' => false,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_slider', array(
	   'settings' => 'classic_industry_slider',
	   'section'   => 'classic_industry_slider_section',
	   'label'     => __('Check To Enable This Section','classic-industry'),
	   'type'      => 'checkbox'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

    $wp_customize->add_setting('classic_industry_slider_cat',array(
	    'default' => '0',
	    'sanitize_callback' => 'classic_industry_sanitize_choices',
  	));
  	$wp_customize->add_control('classic_industry_slider_cat',array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label' => __('Select Category to display Latest Post','classic-industry'),
	    'section' => 'classic_industry_slider_section',
	));

	$wp_customize->add_setting('classic_industry_button_text',array(
		'default' => 'More About Us',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_button_text', array(
	   'settings' => 'classic_industry_button_text',
	   'section'   => 'classic_industry_slider_section',
	   'label' => __('Add Button Text', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_button_link_slider',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('classic_industry_button_link_slider',array(
        'label' => esc_html__('Add Button Link','classic-industry'),
        'section'=> 'classic_industry_slider_section',
        'type'=> 'url'
    ));

    //Slider height
    $wp_customize->add_setting('classic_industry_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('classic_industry_slider_img_height',array(
        'label' => __('Slider Image Height','classic-industry'),
        'description'   => __('Add the slider image height here (eg. 600px)','classic-industry'),
        'input_attrs' => array(
            'placeholder' => __( '500px', 'classic-industry' ),
        ),
        'section'=> 'classic_industry_slider_section',
        'type'=> 'text'
    ));

    $wp_customize->add_setting( 'classic_industry_slider_settings_upgraded_features',array(
    'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('classic_industry_slider_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	    'section' => 'classic_industry_slider_section'
	));

	// blog Section
	$wp_customize->add_section('classic_industry_below_slider_section', array(
		'title'	=> __('Manage Our Team Section','classic-industry'),
		'description'	=> __('<p class="sec-title">Manage Our Management Section</p>','classic-industry'),
		'priority'	=> null,
		'panel' => 'classic_industry_panel_area',
	));

	$wp_customize->add_setting('classic_industry_disabled_pgboxes',array(
		'default' => false,
		'sanitize_callback' => 'classic_industry_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_industry_disabled_pgboxes', array(
	   'settings' => 'classic_industry_disabled_pgboxes',
	   'section'   => 'classic_industry_below_slider_section',
	   'label'     => __('Check To Enable This Section','classic-industry'),
	   'type'      => 'checkbox'
	));

	$wp_customize->add_setting('classic_industry_headingtext1',array(
		'default' => ' ',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_headingtext1', array(
	   'settings' => 'classic_industry_headingtext1',
	   'section'   => 'classic_industry_below_slider_section',
	   'label' => __('Heading', 'classic-industry'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_industry_headingtext_para',array(
		'default' => ' ',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_headingtext_para', array(
	   'settings' => 'classic_industry_headingtext_para',
	   'section'   => 'classic_industry_below_slider_section',
	   'label' => __('Sub Heading', 'classic-industry'),
	   'type'      => 'text'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'classic_industry_blog_cat', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Classic_Industry_Category_Dropdown_Custom_Control( $wp_customize, 'classic_industry_blog_cat', array(
		'section' => 'classic_industry_below_slider_section',
	   'label' => __('Select Category', 'classic-industry'),
		'settings'   => 'classic_industry_blog_cat',
	) ) );

	$wp_customize->add_setting( 'classic_industry_secondsec_settings_upgraded_features',array(
    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('classic_industry_secondsec_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	    'section' => 'classic_industry_below_slider_section'
	));

	//Blog post
	$wp_customize->add_section('classic_industry_blog_post_settings',array(
        'title' => __('Manage Post Section', 'classic-industry'),
        'priority' => null,
        'panel' => 'classic_industry_panel_area'
    ) );

   // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('classic_industry_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'classic_industry_sanitize_choices'
	));
	$wp_customize->add_control('classic_industry_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Theme Post Sidebar Position', 'classic-industry'),
     'description'   => __('This option work for blog page, archive page and search page.', 'classic-industry'),
     'section' => 'classic_industry_blog_post_settings',
     'choices' => array(
         'full' => __('Full','classic-industry'),
         'left' => __('Left','classic-industry'),
         'right' => __('Right','classic-industry'),
         'three-column' => __('Three Columns','classic-industry'),
         'four-column' => __('Four Columns','classic-industry'),
         'grid' => __('Grid Layout','classic-industry')
     ),
	) );

	$wp_customize->add_setting('classic_industry_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'classic_industry_sanitize_choices'
	));
	$wp_customize->add_control('classic_industry_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','classic-industry'),
        'section' => 'classic_industry_blog_post_settings',
        'choices' => array(
            'No Content' => __('No Content','classic-industry'),
            'Excerpt Content' => __('Excerpt Content','classic-industry'),
            'Full Content' => __('Full Content','classic-industry'),
        ),
	) );

	$wp_customize->add_setting('classic_industry_blog_post_thumb',array(
        'sanitize_callback' => 'classic_industry_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('classic_industry_blog_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Show / Hide Blog Post Thumbnail', 'classic-industry'),
        'section'     => 'classic_industry_blog_post_settings',
    ));

    $wp_customize->add_setting( 'classic_industry_blog_post_page_image_box_shadow', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'classic_industry_sanitize_integer'
    ) );
    $wp_customize->add_control(new classic_industry_Slider_Custom_Control( $wp_customize, 'classic_industry_blog_post_page_image_box_shadow',array(
		'label'	=> esc_html__('Blog Page Image Box Shadow','classic-industry'),
		'section'=> 'classic_industry_blog_post_settings',
		'settings'=>'classic_industry_blog_post_page_image_box_shadow',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));
	$wp_customize->add_setting( 'classic_industry_post_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('classic_industry_post_settings_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			<a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		'section' => 'classic_industry_blog_post_settings'
	));		

	// Footer Section
	$wp_customize->add_section('classic_industry_footer', array(
		'title'	=> __('Manage Footer Section','classic-industry'),
		'description'	=> __('<p class="sec-title">Manage Footer Section</p>','classic-industry'),
		'priority'	=> null,
		'panel' => 'classic_industry_panel_area',
	));

	$wp_customize->add_setting('classic_industry_footer_widget', array(
	    'default' => false,
	    'sanitize_callback' => 'classic_industry_sanitize_checkbox',
	));
	$wp_customize->add_control('classic_industry_footer_widget', array(
	    'settings' => 'classic_industry_footer_widget', // Corrected setting name
	    'section'   => 'classic_industry_footer',
	    'label'     => __('Check to Enable Footer Widget', 'classic-industry'),
	    'type'      => 'checkbox',
	));

	$wp_customize->add_setting('classic_industry_footer_bg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'classic_industry_footer_bg_color', array(
        'label'    => __('Footer Background Color', 'classic-industry'),
        'section'  => 'classic_industry_footer',
    )));

	$wp_customize->add_setting('classic_industry_footer_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'classic_industry_footer_bg_image',array(
        'label' => __('Footer Background Image','classic-industry'),
        'section' => 'classic_industry_footer',
    )));

	$wp_customize->add_setting('classic_industry_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_industry_copyright_line', array(
	   'section' 	=> 'classic_industry_footer',
	   'label'	 	=> __('Copyright Line','classic-industry'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

    $wp_customize->add_setting('classic_industry_copyright_link',array(
    	'default' => 'https://www.theclassictemplates.com/products/free-industry-wordpress-theme',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_industry_copyright_link', array(
	   'section' 	=> 'classic_industry_footer',
	   'label'	 	=> __('Link','classic-industry'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

	//  footer coypright color
	$wp_customize->add_setting('classic_industry_footercoypright_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_footercoypright_color', array(
	   'settings' => 'classic_industry_footercoypright_color',
	   'section'   => 'classic_industry_footer',
	   'label' => __('Coypright Color', 'classic-industry'),
	   'type'      => 'color'
	));

	//  footer title color
	$wp_customize->add_setting('classic_industry_footertitle_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_footertitle_color', array(
	   'settings' => 'classic_industry_footertitle_color',
	   'section'   => 'classic_industry_footer',
	   'label' => __('Title Color', 'classic-industry'),
	   'type'      => 'color'
	));

	//  footer description color
	$wp_customize->add_setting('classic_industry_footerdescription_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_footerdescription_color', array(
	   'settings' => 'classic_industry_footerdescription_color',
	   'section'   => 'classic_industry_footer',
	   'label' => __('Description Color', 'classic-industry'),
	   'type'      => 'color'
	));

	//  footer list color
	$wp_customize->add_setting('classic_industry_footerlist_color',array(
		'default' => '',
		'sanitize_callback' => 'classic_industry_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_industry_footerlist_color', array(
	   'settings' => 'classic_industry_footerlist_color',
	   'section'   => 'classic_industry_footer',
	   'label' => __('List Color', 'classic-industry'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('classic_industry_scroll_hide', array(
        'default' => true,
        'sanitize_callback' => 'classic_industry_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'classic_industry_scroll_hide',array(
        'label'          => __( 'Check To Show Scroll To Top', 'classic-industry' ),
        'section'        => 'classic_industry_footer',
        'settings'       => 'classic_industry_scroll_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('classic_industry_scroll_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'classic_industry_sanitize_choices'
    ));
    $wp_customize->add_control('classic_industry_scroll_position',array(
        'type' => 'radio',
        'section' => 'classic_industry_footer',
        'label'	 	=> __('Scroll To Top Positions','classic-industry'),
        'choices' => array(
            'Right' => __('Right','classic-industry'),
            'Left' => __('Left','classic-industry'),
            'Center' => __('Center','classic-industry')
        ),
    ) );

    $wp_customize->add_setting( 'classic_industry_footer_settings_upgraded_features',array(
    'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('classic_industry_footer_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url(CLASSIC_INDUSTRY_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	    'section' => 'classic_industry_footer'
	));

      // Google Fonts
      $wp_customize->add_section( 'classic_industry_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'classic-industry' ),
		'priority'    => 24,
	  ) );
  
	  $font_choices = array(
		'Kaushan Script:' => 'Kaushan Script',
		'Emilys Candy:' => 'Emilys Candy',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	  );
  
	  $wp_customize->add_setting( 'classic_industry_headings_fonts', array(
		'sanitize_callback' => 'classic_industry_sanitize_fonts',
	  ));
	  $wp_customize->add_control( 'classic_industry_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'classic-industry'),
		'section' => 'classic_industry_google_fonts_section',
		'choices' => $font_choices
	  ));
  
	  $wp_customize->add_setting( 'classic_industry_body_fonts', array(
		'sanitize_callback' => 'classic_industry_sanitize_fonts'
	  ));
	  $wp_customize->add_control( 'classic_industry_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'classic-industry' ),
		'section' => 'classic_industry_google_fonts_section',
		'choices' => $font_choices
	  ));	

}
add_action( 'customize_register', 'classic_industry_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function classic_industry_customize_preview_js() {
	wp_enqueue_script( 'classic_industry_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'classic_industry_customize_preview_js' );
