<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anonymous
 */

?>


<div class="item-post-archive col-12 col-xl-4">
    <div class="item">
        <a href="<?php echo get_permalink(); ?>">
            <div class="thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php echo the_title(); ?>">
            </div>
        </a>
        <div class="content">
            <a href="<?php echo get_permalink(); ?>">
            <h4><?php echo mb_strimwidth(get_the_title(), 0, 85, '...'); ?> </h4>
            </a>
            <div class="btn-readmore">
                <a class='read-more' href="<?php echo get_permalink(); ?>"> đọc thêm</a>
            </div>
        </div>
    </div>
</div>
