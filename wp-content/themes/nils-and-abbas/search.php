<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage nanda
 * @since nanda 1.0
 */

get_header();
?>

<main id="site-content" role="main">
    
    <?php if ( have_posts() ) : ?>
        <div class="page-head default">
            <div class="container">
                <h2 class="page-title">Search Results</h2>
            </div>
        </div> <!-- page-head End -->
        <div class="result-all">

                <div class="container">
                    <div class="mh-page-banner__outer">
                        <div class="content-wrapper">
                            <div class="mh-banner__exp">
                                <p class="mh-banner__exp-40">Showing Results</p>
                            </div>
                        </div>
                    </div>
                </div>
            

            <div class="mh-abt-division mh-search-page mh-bg_black">
                <div class="container">
                    <div class="content-wrapper">
                        <h1 class="search-title"><?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>
                        
                        <ul>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php if($_GET['asl_active'] == 1){
                                    $qstr = '?product=true';
                                }else{
                                    $qstr = '';
                                }?>
                                <li class="mh-ion-science__bullet">
                                    <h3><a href="<?php the_permalink(); ?><?php echo $qstr; ?>"><?php the_title(); ?></a></h3>
                                    <?php the_post_thumbnail('medium'); ?>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                                    <div class="h-readmore">
                                        <a class="mh-button" href="<?php the_permalink(); ?><?php echo $qstr; ?>">Read More</a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>

                        <div class="mh-pagination">
                            <?php echo paginate_links(); ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php else : ?>
            <div class="page-head default">
                <div class="container">
                    <h2 class="page-title">No Results Found</h2>
                </div>
            </div>
            <div class="mh-abt-division mh-search-page mh-bg_black">
                <div class="container">
                    <div class="content-wrapper">
                        <section class="no-results not-found">
                            <div class="page-content section">
                                <div class="container">
                                    <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Search …" value="<?php echo get_search_query(); ?>" name="s">
                                        </label>
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
</main>

<?php
get_footer();
?>
