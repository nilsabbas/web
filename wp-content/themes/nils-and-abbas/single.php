<?php

/**

 * The template for displaying all single posts

 *
nanda
 * @link hnandadeveloper.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package WordPress

 * @subpackage nanda

 * @since nanda 1.0

 */

get_header();

?>



<main id="site-content" role="main">

    <div class="page-head default">

        <div class="container">



            <h2 class="page-title"><?= the_title(); ?></h2>



        </div>

    </div> <!-- page-head End -->

    <section class="blog-list <?php echo $dynamic_class ?>">

        <div class="container">

            <div class="row">

                <?php if (is_active_sidebar($sidebar)) { ?> <div class="col-xl-9 col-lg-8"> <?php } else {

                                                                                            ?> <div class="col-lg-12"> <?php } ?>



                        <div class="blogs section">

                            <?php

                            if (have_posts()) :

                                /* Start the Loop */

                                while (have_posts()) :

                                    the_post();



                                    /*

						 * Include the Post-Type-specific template for the content.

						 * If you want to override this in a child theme, then include a file

						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.

						 */

                                    get_template_part('template-parts/content', get_post_type());



                                endwhile;



                                the_posts_navigation();



                            else :



                                get_template_part('template-parts/content', 'none');



                            endif;

                            ?>

                        </div>

                        </div>

                        <?php if (is_active_sidebar($sidebar)) { ?>

                            <div class="col-xl-3 col-lg-4">

                                <div class="sidebar">

                                    <?php get_sidebar(); ?>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

            </div>

    </section> <!-- blog-list End-->

</main>



<?php



get_footer();

?>