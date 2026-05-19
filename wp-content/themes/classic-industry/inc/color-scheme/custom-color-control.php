<?php

$classic_industry_first_color = get_theme_mod('classic_industry_first_color');
$classic_industry_second_color = get_theme_mod('classic_industry_second_color');
$classic_industry_color_scheme_css = '';

/*------------------ Global First Color -----------*/
$classic_industry_color_scheme_css .=' .postsec-list .wp-block-button a:hover, .site-main .wp-block-button a:hover, is-style-outline .wp-block-button__link:not(.has-background):hover, .postsec-list .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover, .tags a:hover, .header-box, .header .contact-us a:hover, #mySidenav, .nav-links .page-numbers, .page-links .post-page-numbers.current, .page-links, #footer {';
  $classic_industry_color_scheme_css .='background-color: '.esc_attr($classic_industry_first_color).'!important;';
$classic_industry_color_scheme_css .='}';
  
$classic_industry_color_scheme_css .=' .slide-btn a:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, #commentform input#submit:hover, nav.woocommerce-MyAccount-navigation ul li:hover, nav.woocommerce-MyAccount-navigation ul li:hover, button.wc-block-components-checkout-place-order-button:hover, a.wc-block-components-totals-coupon-link:hover, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained:hover, a.wc-block-components-checkout-return-to-cart-button:hover, .breadcrumb .current-breadcrumb, .breadcrumb a:hover, #commentform input#submit:hover {';
$classic_industry_color_scheme_css .='background: '.esc_attr($classic_industry_first_color).'!important;';
$classic_industry_color_scheme_css .='}';
  
$classic_industry_color_scheme_css .=' body, h1,h2,h3,h4,h5,h6, p.site-title a:hover, h1.site-title a:hover, .page-template-template-home-page .logo span.site-description, .page-template-template-home-page p.site-title a, .page-template-template-home-page h1.site-title a, .page-template-template-home-page .header-top .top-text, .main-nav .sub-menu a, .page-header h1, .slider-users .user-content, #blog h3 a, #blog .social-icon i, .listarticle h2 a, #sidebar ul li, #sidebar .widget a, #sidebar .widget a:visited, #footer .copywrap a:hover, a.wc-block-components-product-name, .wc-block-grid__product-title, .page-template-template-home-page .header-top .top-contact, .header-top .top-contact:hover, #comments p {';
$classic_industry_color_scheme_css .='color: '.esc_attr($classic_industry_first_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .=' input:focus{';
$classic_industry_color_scheme_css .='border: 2px solid'.esc_attr($classic_industry_first_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='.header.main.sticky-head {';
$classic_industry_color_scheme_css .='box-shadow: -2px 2px 10px 0px'.esc_attr($classic_industry_first_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='
@media screen and (max-width:1000px) {
  .toggle-nav button {';
    $classic_industry_color_scheme_css .='background-color: '.esc_attr($classic_industry_first_color).' !important;';
$classic_industry_color_scheme_css .='} }';

$classic_industry_color_scheme_css .='
@media screen and (max-width:1000px) {
  .main-nav ul.sub-menu a:hover {';
    $classic_industry_color_scheme_css .='color: '.esc_attr($classic_industry_first_color).' !important;';
$classic_industry_color_scheme_css .='} }';

/*------------------ Global Second Color -----------*/

$classic_industry_color_scheme_css .='.copywrap, .slider-img-color, .slide-btn a, .slider-users i, .postsec-list .search-form input.search-submit, span.page-numbers.current, .nav-links .page-numbers:hover, input.search-submit, .page-links a, .page-links span, .tagcloud a:hover, .copywrap, nav.woocommerce-MyAccount-navigation ul li, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, #commentform input#submit, .wc-block-components-totals-coupon-link,a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained, a.wc-block-components-checkout-return-to-cart-button,.wc-block-components-totals-coupon__button.contained,button.wc-block-components-checkout-place-order-button, .breadcrumb a, #slider-cat .text-content h1::after, .mainhead, .header .contact-us a, .entry-content .tags a {';
$classic_industry_color_scheme_css .='background-color: '.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='.page-template-template-home-page .header .contact-us a, .postsec-list .wp-block-button__link, .site-main .wp-block-button__link, #button, #sidebar input.search-submit, #footer input.search-submit, span.onsale, form.woocommerce-product-search button, .widget_calendar caption, .widget_calendar #today, #footer input.search-submit{';
$classic_industry_color_scheme_css .='background: '.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .=' .postsec-list .wp-block-button.is-style-outline a, .tags a, .main-nav a:hover, .main-nav ul ul a:hover, .text-content h1 a:hover, .text-content .slider-text, .slider-users .top-text, #blog .subhed, #blog .social-icon i:hover, #blog h3 a:hover, #sidebar ul li::before, #sidebar ul li a:hover, #sidebar .widget a:active,  #footer h6, #sidebar .widget-title, .postmeta a:hover, .page-template-template-home-page i, .page-template-template-home-page .header-top .top-contact:hover, .page-template-template-home-page p.site-title a:hover, .nav-links a, .entry-content a, .edit-link a, #comments a, .added_to_cart {';
$classic_industry_color_scheme_css .='color: '.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='.site-main .wp-block-button.is-style-outline a, .main-nav ul.sub-menu li a:focus, .main-nav ul ul a:focus,.main-nav a:focus, .widget .tagcloud a:hover,  {';
$classic_industry_color_scheme_css .='border: 1px solid'.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}'; 

$classic_industry_color_scheme_css .='blockquote {';
$classic_industry_color_scheme_css .='border-left: 5px solid'.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}'; 

$classic_industry_color_scheme_css .=' .postsec-list .wp-block-button.is-style-outline a, .postsec-list .search-form input.search-submit, #sidebar input[type="text"], #sidebar input[type="search"], #footer input[type="search"], .main-nav a:focus {';
$classic_industry_color_scheme_css .='border: 2px solid'.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='.main-nav li ul {';
$classic_industry_color_scheme_css .='border-top: 3px solid'.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='.page-template-template-home-page .main-nav .current-menu-item a {';
$classic_industry_color_scheme_css .='border-top: 4px solid'.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';


$classic_industry_color_scheme_css .='#sidebar .widget{';
$classic_industry_color_scheme_css .='border-bottom: 3px solid'.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';

$classic_industry_color_scheme_css .='.tagcloud a:hover{';
$classic_industry_color_scheme_css .='border-color: '.esc_attr($classic_industry_second_color).'!important;';
$classic_industry_color_scheme_css .='}';
  
$classic_industry_color_scheme_css .='
@media screen and (max-width:1000px) {
  .page-template-template-home-page .toggle-nav button, .sidenav {';
    $classic_industry_color_scheme_css .='background: '.esc_attr($classic_industry_first_color).' !important;';
$classic_industry_color_scheme_css .='} }';

//---------------------------------Logo-Max-height--------- 
$classic_industry_logo_width = get_theme_mod('classic_industry_logo_width');

if($classic_industry_logo_width != false){

$classic_industry_color_scheme_css .='.logo .custom-logo-link img{';

  $classic_industry_color_scheme_css .='width: '.esc_html($classic_industry_logo_width).'px;';

$classic_industry_color_scheme_css .='}';
}

// slider hide css
$classic_industry_slider = get_theme_mod( 'classic_industry_slider', false);
if($classic_industry_slider != true){
$classic_industry_color_scheme_css .='.page-template-template-home-page .header {';
  $classic_industry_color_scheme_css .='position:static;';
$classic_industry_color_scheme_css .='}';
}

/*---------------------------Slider Height ------------*/

$classic_industry_slider_img_height = get_theme_mod('classic_industry_slider_img_height');
if($classic_industry_slider_img_height != false){
    $classic_industry_color_scheme_css .='#slider-cat{';
        $classic_industry_color_scheme_css .='height: '.esc_attr($classic_industry_slider_img_height).' !important;';
    $classic_industry_color_scheme_css .='}';
}

/*--------------------------- Footer background image -------------------*/

$classic_industry_footer_bg_image = get_theme_mod('classic_industry_footer_bg_image');
if($classic_industry_footer_bg_image != false){
    $classic_industry_color_scheme_css .='#footer{';
        $classic_industry_color_scheme_css .='background: url('.esc_attr($classic_industry_footer_bg_image).')!important;';
        $classic_industry_color_scheme_css .= 'background-size: cover!important;';    
    $classic_industry_color_scheme_css .='}';
}

/*--------------------------- Scroll to top positions -------------------*/

$classic_industry_scroll_position = get_theme_mod( 'classic_industry_scroll_position','Right');
if($classic_industry_scroll_position == 'Right'){
    $classic_industry_color_scheme_css .='#button{';
        $classic_industry_color_scheme_css .='right: 20px;';
    $classic_industry_color_scheme_css .='}';
}else if($classic_industry_scroll_position == 'Left'){
    $classic_industry_color_scheme_css .='#button{';
        $classic_industry_color_scheme_css .='left: 20px;';
    $classic_industry_color_scheme_css .='}';
}else if($classic_industry_scroll_position == 'Center'){
    $classic_industry_color_scheme_css .='#button{';
        $classic_industry_color_scheme_css .='right: 50%;left: 50%;';
    $classic_industry_color_scheme_css .='}';
}

/*--------------------------- Footer Background Color -------------------*/

$classic_industry_footer_bg_color = get_theme_mod('classic_industry_footer_bg_color');
if($classic_industry_footer_bg_color != false){
    $classic_industry_color_scheme_css .='#footer{';
        $classic_industry_color_scheme_css .='background-color: '.esc_attr($classic_industry_footer_bg_color).' !important;';
    $classic_industry_color_scheme_css .='}';
}

/*--------------------------- Blog Post Page Image Box Shadow -------------------*/

$classic_industry_blog_post_page_image_box_shadow = get_theme_mod('classic_industry_blog_post_page_image_box_shadow',0);
if($classic_industry_blog_post_page_image_box_shadow != false){
    $classic_industry_color_scheme_css .='.post-thumb img{';
        $classic_industry_color_scheme_css .='box-shadow: '.esc_attr($classic_industry_blog_post_page_image_box_shadow).'px '.esc_attr($classic_industry_blog_post_page_image_box_shadow).'px '.esc_attr($classic_industry_blog_post_page_image_box_shadow).'px #cccccc;';
    $classic_industry_color_scheme_css .='}';
}

/*--------------------------- Woocommerce Product Image Border Radius -------------------*/

$classic_industry_woo_product_img_border_radius = get_theme_mod('classic_industry_woo_product_img_border_radius');
if($classic_industry_woo_product_img_border_radius != false){
    $classic_industry_color_scheme_css .='.woocommerce ul.products li.product a img{';
        $classic_industry_color_scheme_css .='border-radius: '.esc_attr($classic_industry_woo_product_img_border_radius).'px;';
    $classic_industry_color_scheme_css .='}';
}

/*--------------------------- Woocommerce Product Sale Position -------------------*/    

$classic_industry_product_sale_position = get_theme_mod( 'classic_industry_product_sale_position','Left');
if($classic_industry_product_sale_position == 'Right'){
    $classic_industry_color_scheme_css .='.woocommerce ul.products li.product .onsale{';
        $classic_industry_color_scheme_css .='left:auto !important; right:.5em !important;';
    $classic_industry_color_scheme_css .='}';
}else if($classic_industry_product_sale_position == 'Left'){
    $classic_industry_color_scheme_css .='.woocommerce ul.products li.product .onsale {';
        $classic_industry_color_scheme_css .='right:auto !important; left:.5em !important;';
    $classic_industry_color_scheme_css .='}';
}   