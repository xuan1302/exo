<?php
//Template Name: Product
get_header();
$title = get_field( "title" );
$desciption = get_field( "desciption" );
$shortcode_form = get_field( "shortcode_form" );

$args = array(
	'post_type' => 'service',
	'post_status' => 'publish',
    );

    $loop = new WP_Query( $args );
?>

<div class="container-product">
	<div class="head-product">
		<h2><?php echo $title; ?></h2>
		<p><?php echo $desciption; ?></p>
	</div>

	<?php
	if($loop->have_posts()) : ?>
		<div class="list-product-tax"
<!--			 data-aos="fade-left"-->
<!--			 data-aos-duration="1000"-->
<!--			 data-aos-easing="ease-in-sine"  data-aos-delay="50"-->
		>
			<div class="container">
				<div class="row">
					<div class="content-list-product col-12"
					>
						<?php
							while ( $loop->have_posts() ) : $loop->the_post();
								$thumbnail = get_field( "icon_title", get_the_ID());
								$des = get_field( "desciption", get_the_ID());
								$video = get_field( "video", get_the_ID());
							?>
								<div class="item-product-p">
									<div class="left-pro">
										<div class="ct">
											<div class="icon-pro">
												<img src="<?php echo $thumbnail['url']; ?>" alt="">
											</div>
											<div class="des">
												<?php echo $des; ?>
											</div>
											<a class="read-more-light" href="<?php echo get_permalink(get_the_ID()) ?>">Tìm  hiểu thêm
												<svg width="15" height="15" viewBox="0 0 15 15" fill="#324894" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M0.77 1C0.77 0.585786 1.10579 0.25 1.52 0.25H14C14.4142 0.25 14.75 0.585786 14.75 1V13.48C14.75 13.8942 14.4142 14.23 14 14.23C13.5858 14.23 13.25 13.8942 13.25 13.48V2.81066L1.53033 14.5303C1.23744 14.8232 0.762563 14.8232 0.46967 14.5303C0.176777 14.2374 0.176777 13.7626 0.46967 13.4697L12.1893 1.75H1.52C1.10579 1.75 0.77 1.41421 0.77 1Z" fill=""></path>
												</svg>
											</a>
										</div>
									</div>
									<div class="right-pro"
									>
										<div class="ct">
											<video width="100%" height="100%" controls="">
												<source src="<?php echo $video['url']; ?>" type="video/mp4">
											</video>

										</div>

									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata(); // Reset the post data
						?>
					</div>
				</div>
			</div>
		</div>
	<?php endif;
	?>

	<?php
		if($shortcode_form){ ?>
			<div class="shortcode-form"
<!--				 data-aos="fade-right"-->
<!--				 data-aos-duration="1000"-->
<!--				 data-aos-easing="ease-in-sine"  data-aos-delay="50"-->
			>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php
							echo do_shortcode($shortcode_form);
							?>
						</div>
					</div>
				</div>
			</div>
		<?php }
	?>
</div>
<?php get_footer();