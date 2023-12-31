<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anonymous
 */
if (!defined('ABSPATH')) {
    return;
}
get_header();
$description = get_field("description");
$banner = get_field("banner")
?>

    <main id="primary" class="site-main single-page container">
        <div class="content-single-page">
            <div class="row">
                <div class="single-content col-12">
                    <div class="banner">
                        <div class="category-name">
                            <?php
                            the_category(', ');
                            ?>
                        </div>
                        <div class="single-title">
                           <h1><?php the_title()?></h1>
                        </div>
                        <div class="des">
                            <?php
                              echo $description;
                            ?>
                        </div>
                        <div class="image">
                            <img src="<?php echo $banner['url'] ?>"/>
                        </div>
                    </div>
                    <div class="inner-content">
                        <?php
                        the_content();
                        ?>
                        <div class="author">
                            <?php
                            if ( 'post' === get_post_type() ) :
                                ?>
                                <div class="entry-meta">
                                    <span>Written by</span>
                                    <p>
                                        <?php
                                        $post_id =  get_the_ID();
                                        $author_id = get_post_field ('post_author', $post_id);
                                        echo get_the_author_meta( 'display_name' , $author_id );
                                        ?>
                                    </p>

                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                            <?php
                            $tags = get_tags();
                            $html = '<div class="post_tags">';
                            foreach ( $tags as $tag ) {
                                $tag_link = get_tag_link( $tag->term_id );

                                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                $html .= "{$tag->name}</a>";
                            }
                            $html .= '</div>';
                            echo $html;
                            ?>
                        </div>
                    </div>



                </div>

            </div>
        </div>


    </main>
    <!-- #main -->
    <div class="related-post">
        <?php  related_posts() ?>
    </div>

<?php
// get_sidebar();
get_footer();
