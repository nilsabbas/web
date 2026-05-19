<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Classic Industry
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('classic_industry_preloader', true) != "") { ?>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
<?php }?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'classic-industry' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'classic_industry_box_layout', false) != "" ) { echo 'class="boxlayout"'; } ?>>

  <div class="mainhead">
    <div class="header-top py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-3 align-self-center px-0">
            <div class="logo">
            <?php classic_industry_the_custom_logo(); ?>
            <div class="site-branding-text">
              <?php if ( get_theme_mod('classic_industry_title_enable',true) != "") { ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
              <?php } ?>
              <?php $classic_industry_description = get_bloginfo( 'description', 'display' );
              if ( $classic_industry_description || is_customize_preview() ) : ?>
                <?php if ( get_theme_mod('classic_industry_tagline_enable',false) != "") { ?>
                <span class="site-description"><?php echo esc_html( $classic_industry_description ); ?></span>
                <?php } ?>
              <?php endif; ?>
            </div>
          </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12 align-self-center contact email">
            <?php if ( get_theme_mod('classic_industry_phone_number_text') != "" || get_theme_mod('classic_industry_phone_number') != "") { ?>
              <div class="phoneno my-md-0 my-3">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-3 align-self-center phone-icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9 align-self-center phone-text pe-1">
                      <p class="top-text mb-0 text-uppercase"><?php echo esc_html(get_theme_mod ('classic_industry_phone_number_text','')); ?></p>
                      <a class="mb-0 top-contact" href="tel:<?php echo esc_attr( get_theme_mod('classic_industry_phone_number','' )); ?>"><?php echo esc_html(get_theme_mod ('classic_industry_phone_number','')); ?></a>
                    </div>
                  </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-2 col-md-3 col-12 align-self-center contact email">
            <?php if ( get_theme_mod('classic_industry_time_text') != ""|| get_theme_mod('classic_industry_time') != "") { ?> 
              <div class="time my-md-0 my-3">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-3 align-self-center time-icon">
                    <i class="far fa-clock"></i>
                  </div>
                  <div class="col-lg-9 col-md-9 col-9 time-text align-self-center pe-1">
                    <p class="mb-0 top-text"><?php echo esc_html(get_theme_mod ('classic_industry_time_text','')); ?></p>
                    <p class="mb-0 top-contact"><?php echo esc_html(get_theme_mod ('classic_industry_time','')); ?></p>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-2 col-md-3 col-12 align-self-center email">
            <?php if ( get_theme_mod('classic_industry_email_address_text') != "" || get_theme_mod('classic_industry_email_address') != "") { ?>
              <div class="emailadd my-md-0 my-3">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-3 align-self-center email-icon">
                      <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9 email-text align-self-center pe-1">
                      <p class="top-text mb-0"><?php echo esc_html(get_theme_mod ('classic_industry_email_address_text','')); ?></p>
                      <a class="mb-0 top-contact" href="mailto:<?php echo esc_attr( get_theme_mod('classic_industry_email_address','') ); ?>"><?php echo esc_html(get_theme_mod ('classic_industry_email_address','')); ?></a>
                    </div>
                  </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>

    <div class="main-header">
      <div class="header main-stick <?php echo esc_attr(classic_industry_sticky_menu()); ?>">
        <div class="container header-box">
          <div class="row">
            <div class="col-lg-10 col-md-6 col-6 align-self-center px-md-0">
              <div class="toggle-nav mobile-stick text-center <?php echo esc_attr(classic_industry_sticky_menu()); ?>">
                  <button role="tab"><?php esc_html_e('Menu','classic-industry'); ?></button>
              </div>
              <div id="mySidenav" class="nav sidenav">
                <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','classic-industry' ); ?>">
                  <ul class="mobile_nav">
                    <?php
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu' ,
                        'items_wrap' => '%3$s',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                     ?>
                  </ul>
                  <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','classic-industry'); ?></a>
                </nav>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6 align-self-center">
              <?php if ( get_theme_mod('classic_industry_contact_us_text') != "" && get_theme_mod('classic_industry_contact_us_url') != "") { ?> 
                <div class="contact-us text-md-end text-center">
                  <a href="<?php echo esc_url(get_theme_mod ('classic_industry_contact_us_url','')); ?>"><?php echo esc_html(get_theme_mod ('classic_industry_contact_us_text','CONTACT US','classic-industry')); ?></a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>