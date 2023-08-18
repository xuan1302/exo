<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Anonymous
 */

get_header();
?>

	<main id="primary" class="site-main container">

		<?php if ( have_posts() ) : ?>

		<!-- <header class="page-header">
				<h1 class="page-title">
					<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'anonymous' ), '<span>' . get_search_query() . '</span>' );
		?>
				</h1>
			</header> -->
		<div class="content-search">
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
					//get_template_part( 'template-parts/content', get_post_type() );
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
				<?php

				endwhile;
				?>
				<div class="col-12">
					<div class="pagination-x">
						<?php elementor_pagination(); ?>
					</div>

				</div>

				<?php

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>

		</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
