<?php
//Template Name: Đặt lịch tư vấn
get_header();
$title = get_field( "title" );
$desciption = get_field( "desciption" );
$shortcode_form = get_field( "shortcode_form" );
$image_video = get_field( "thumbnail_video" );
$video = get_field( "video" );
?>
	<div class="container-booking">
		<div class="head-booking">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $desciption; ?></p>
		</div>

		<div class="content-booking">
			<div class="container">
				<div class="row">
					<div class="box-booking">
						<div class="content">
							<?php the_content(); ?>
						</div>
						<div class="icon-gn-book text-center">
							<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-3-nuoc.svg" alt="">
						</div>
						<div class="form-booking">
							<?php echo do_shortcode($shortcode_form) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="video-home"
			 style="background-image: url(<?php echo $image_video['url']; ?>);">
			<div class="icon-play text-center">
				<img src="<?php bloginfo('template_url'); ?>/asset/images/play.svg" alt="">
			</div>
			<video width="100%" height="100%" controls class="video-home">
				<source src="<?php echo $video['url']; ?>" type="video/mp4">
			</video>
		</div>
	</div>
<?php
get_footer();
