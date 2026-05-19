<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Classic Industry
 */

get_header(); ?>

<div id="content" >

  <?php
    $classic_industry_hidepageboxes = get_theme_mod('classic_industry_slider', false);
    $classic_industry_catData = get_theme_mod('classic_industry_slider_cat');

    if ($classic_industry_hidepageboxes && $classic_industry_catData) { ?>
    <section id="slider-cat">
        <div class="slideimg">
            <div class="container sliderbox">
                <div class="owl-carousel m-0">
                    <?php
                    $classic_industry_page_query = new WP_Query(
                        array(
                            'category_name' => esc_attr($classic_industry_catData),
                            'posts_per_page' => -1, 
                        )
                    );
                    while ($classic_industry_page_query->have_posts()) : $classic_industry_page_query->the_post(); ?>
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-12 align-self-center mb-md-5 mb-2">
                                <div class="text-content pe-lg-5">
                                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <?php
                                    $classic_industry_trimexcerpt  = get_the_excerpt();
                                    $classic_industry_shortexcerpt = wp_trim_words($classic_industry_trimexcerpt, $num_words = 40);
                                    echo '<p class="slider-content">' . esc_html($classic_industry_shortexcerpt) . '</p>';
                                    ?>
                                    <div class="sliderbtn">
                                        <?php 
                                        $classic_industry_button_text = get_theme_mod('classic_industry_button_text', 'More About Us');
                                        $classic_industry_button_link_slider = get_theme_mod('classic_industry_button_link_slider', ''); 
                                        if (empty($classic_industry_button_link_slider)) {
                                            $classic_industry_button_link_slider = get_permalink();
                                        }
                                        if ($classic_industry_button_text || !empty($classic_industry_button_link_slider)) { ?>
                                          <?php if(get_theme_mod('classic_industry_button_text', 'More About Us') != ''){ ?>
                                            <div class="slide-btn mb-2">
                                                <a href="<?php echo esc_url($classic_industry_button_link_slider); ?>" class="button redmor">
                                                  <?php echo esc_html($classic_industry_button_text); ?>
                                                    <span class="screen-reader-text"><?php echo esc_html($classic_industry_button_text); ?></span>
                                                </a>
                                            </div>
                                          <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12 align-self-center mb-5">
                                <div class="imagebox">
                                    <?php if(has_post_thumbnail()){
                                      the_post_thumbnail('full');
                                      } else{?>
                                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt=""/>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
  <?php } ?>

  <?php
    $classic_industry_hidepageboxes = get_theme_mod('classic_industry_disabled_pgboxes',false);
    $classic_industry_blog_cat = get_theme_mod('classic_industry_blog_cat');
    if( $classic_industry_hidepageboxes && $classic_industry_blog_cat){
  ?>
  <section id="blog" class="my-5">
    <div class="container">
      <div class="blog_bx mx-lg-5 px-lg-5 text-center">
        <?php if ( get_theme_mod('classic_industry_headingtext1') != "") { ?>
          <p class="subhed mb-2"><?php echo esc_html(get_theme_mod('classic_industry_headingtext1','classic-industry')); ?></p>
        <?php }?>
        <?php if ( get_theme_mod('classic_industry_headingtext_para') != "") { ?>
          <h2 class="mb-3"><?php echo esc_html(get_theme_mod('classic_industry_headingtext_para','classic-industry')); ?></h2>
        <?php }?>
      </div>
      <div class="row">
        <?php if( get_theme_mod('classic_industry_blog_cat') ) { ?>

        <?php $classic_industry_queryvar = new WP_Query(
          array( 
            'cat' => esc_attr(get_theme_mod('classic_industry_blog_cat')),
          )
        );
        while( $classic_industry_queryvar->have_posts() ) : $classic_industry_queryvar->the_post(); ?>
        <div class="col-lg-3 col-md-4 service-box my-3">
            <div class="team-box">
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail('full');
                  } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/our-team-img.png" alt=""/>
                <?php } ?>
                <div class="blog-content pb-4 px-3 pt-1 text-center <?php if (!has_post_thumbnail()) echo ' no-thumbnail'; ?>">
                    <h3 class="mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php 
                    $classic_industry_designation = get_post_meta($post->ID, 'classic_industry_designation', true);
                    
                    if ($classic_industry_designation) : ?>
                        <p class="serv-content"><?php echo esc_html($classic_industry_designation); ?></p>
                    <?php endif; ?>
                    <div class="social-icon">
                        <?php
                        $classic_industry_facebook_link = get_post_meta($post->ID, 'classic_industry_facebook_link', true);
                        $classic_industry_twitter_link = get_post_meta($post->ID, 'classic_industry_twitter_link', true);
                        $classic_industry_telegram_link = get_post_meta($post->ID, 'classic_industry_telegram_link', true);

                        if ($classic_industry_facebook_link || $classic_industry_twitter_link || $classic_industry_telegram_link) :
                        ?>
                            <div class="meta-fields text-center">
                                <?php if ($classic_industry_facebook_link) : ?>
                                    <a href="<?php echo esc_url($classic_industry_facebook_link); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                <?php endif; ?>

                                <?php if ($classic_industry_twitter_link) : ?>
                                    <a href="<?php echo esc_url($classic_industry_twitter_link); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                <?php endif; ?>

                                <?php if ($classic_industry_telegram_link) : ?>
                                    <a href="<?php echo esc_url($classic_industry_telegram_link); ?>" target="_blank"><i class="fab fa-telegram"></i></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php }?>

</div>
<?php get_footer(); ?>