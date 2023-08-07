<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anonymous
 */
$logo_ft = get_field('footer_logo', 'option');
$description = get_field('description', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$web = get_field('web', 'option');
$link_facebook = get_field('link_facebook', 'option');
$link_instagram = get_field('link_instagram', 'option');
$link_youtube = get_field('link_youtube', 'option');
$coppy_right = get_field('coppy_right', 'option');
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row footer-top">
					<div class="col-12  col-md-3">
						<?php 
							if($logo_ft){ ?>
								<div class="logo-footer">
									<img src="<?php echo $logo_ft['url']; ?>" alt="">
								</div>
							<?php }
						?>
						<div class="des-footer">
							<?php echo $description; ?>
						</div>
					</div>
					<div class="col-12  col-md-4">
						<div class="ct-mid">
						<nav class="main-navigation-footer">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer_menu',
									'menu_id'        => 'footer-menu',
								)
							);
							?>
						</nav>
						</div>

					</div>
					<div class="col-12  col-md-5">
						<ul class="list-social">
							<?php 
								if($address){ ?>
									<li class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-location.svg">
										<span><?php echo $address; ?></span>
									</li>
								<?php }

								if($phone){ ?>
									<li class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/bxs_phone.svg">
										<span><?php echo $phone; ?></span>
									</li>
								<?php }

								if($email){ ?>
									<li class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/mail.svg">
										<span><?php echo $email; ?></span>
									</li>
								<?php }

								if($web){ ?>
									<li class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-web.svg">
										<span><?php echo $web; ?></span>
									</li>
								<?php }
							?>
						</ul>

						<ul class="list-social-bottom">
							<?php 
								if($link_facebook){ ?> 
									<li class="item">
										<a href="" target="_blank">
											<img src="<?php bloginfo('template_url'); ?>/asset/images/fb.svg">
										</a>
									</li>									
								<?php }

								if($link_facebook){ ?> 
									<li class="item">
										<a href="" target="_blank">
											<img src="<?php bloginfo('template_url'); ?>/asset/images/istagram.svg">
										</a>
									</li>									
								<?php }

								if($link_facebook){ ?> 
									<li class="item">
										<a href="" target="_blank">
											<img src="<?php bloginfo('template_url'); ?>/asset/images/youtube.svg">
										</a>
									</li>									
								<?php }
							?>

						</ul>
					</div>
				</div>
				<div class="row footer-bottom">
					<div class="content-copyright">
						<div class="left-copy">
							<span><?php echo $coppy_right; ?></span>
						</div>
						<div class="menu-copy">
							<nav class="copy-navigation">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer_menu_coppy_right',
										'menu_id'        => 'copy-menu',
									)
								);
								?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
