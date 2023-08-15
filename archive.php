<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anonymous
 */

get_header();


?>

    <main id="primary" class="site-main">

        <?php if ( have_posts() ) : ?>

        <header class="page-header page-header-cat">
            <div class="blog">
                <h2>blog</h2>
                <?php
                the_category(', ');
                ?>
            </div>

        </header><!-- .page-header -->
        <div class="content-page-blog">
            <div class="container">
                <div class="content-cat-post">
                    <div class="list-cat-post">
                        <div class="row">
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;
                            ?>
                            <div class="col-12">
                                <div class="pagination-custom">
                                    <?php echo elementor_pagination(); ?>
                                </div>

                            </div>

                            <?php

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main><!-- #main -->

<?php
get_footer();