<?php 
//Template Name: Home
get_header();

$banner = get_field( "banner" );
$icon_title = get_field( "icon_title" );
$description = get_field( "description" );
$list_image_right_banner = get_field( "list_image_right_banner" );
$link_tu_van = get_field( "link_tu_van" );
$title_section_content = get_field( "title_section_content" );
$content_section_content = get_field( "content_section_content" );
$list_product = get_field( "list_product" );
$image_video = get_field( "image_video" );
$video = get_field( "video" );
$title_thuong_hieu = get_field( "title_thuong_hieu" );
$list_item_thuong_hieu = get_field( "list_item_thuong_hieu" );
$title_blog = get_field( "title_blog" );
$link_blog = get_field( "link_blog" );
$category_blog = get_field( "category_blog" );

$args_blog = array( 
    'posts_per_page' => 3,
    'post_status' => 'publish',
     'category' => $category_blog 
    );

$myposts_blog = get_posts( $args_blog );
?>

    <div class="template-home-custom">
        <div class="content-home">
        	<div id="banner" style="background-image: url(<?php echo $banner['url']; ?>);">
        		<div class="container">
        			<div class="row">
        				<div class="col-12 col-md-6"
									data-aos="fade-down"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in-sine"  data-aos-delay="50"
        				>
        					<div class="icon-title">
        						<div class="content-left">
        							<div class="icon-title">
        								<img src="<?php echo $icon_title['url']; ?>" alt="">
        							</div>
        							<div class="des-title">
        								<?php echo $description; ?>
        							</div>
        							<a class="link-dart" href="<?php echo $link_tu_van; ?>">
        								Đặt lịch tư vấn 
        								<svg width="15" height="15" viewBox="0 0 15 15" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0.77 1C0.77 0.585786 1.10579 0.25 1.52 0.25H14C14.4142 0.25 14.75 0.585786 14.75 1V13.48C14.75 13.8942 14.4142 14.23 14 14.23C13.5858 14.23 13.25 13.8942 13.25 13.48V2.81066L1.53033 14.5303C1.23744 14.8232 0.762563 14.8232 0.46967 14.5303C0.176777 14.2374 0.176777 13.7626 0.46967 13.4697L12.1893 1.75H1.52C1.10579 1.75 0.77 1.41421 0.77 1Z" fill=""/>
										</svg>
        							</a>
        						</div>
        					</div>
        				</div>
        				<div class="col-12 col-md-6">
        					<div class="item-img-animation">
        						<?php 
        							if($list_image_right_banner){
        								$run = 0;
        								foreach ($list_image_right_banner as $item) {
        									$run += 300;
        								 ?>
        									<img 
        									data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="<?php echo $run; ?>"
        									src="<?php echo $item['thumbnail']['url']?>" alt="">
        								<?php }
        							}
        						?>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>

        	<div id="content-bottom-banner">
        		<div class="container">
        			<div class="row" 
							data-aos="fade-down"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50"
        			>
        				<div class="content-bt-banner">
			        		<h3 class="title-font"><?php echo $title_section_content; ?></h3>
			        		<div class="des"><?php echo $content_section_content; ?></div>
			        		<div class="icon-gn">
			        			<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-3-nuoc.svg" alt="">
			        		</div>
        				</div>
        			</div>
        		</div>
        	</div>

        	<?php 
        		if($list_product){ ?> 
		        	<div id="product">
		        		<div class="list-product">
		        			<?php 
		        				foreach ($list_product as $value) { ?>
				        			<div class="item-product" style="background-image: url(<?php echo $value['background']['url']; ?>);">
				        				<div class="left-product item">
				        					<div class="content-left"
									data-aos="fade-down"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in-sine"  data-aos-delay="50"
				        					>
				        						<div class="icon-product">
				        							<img src="<?php echo $value['icon_tiltle']['url']; ?>" alt="">
				        						</div>
				        						<div class="des">
				        							<?php echo $value['description']; ?>
				        						</div>
				        						<a class="read-more-light" href="<?php echo $value['link'];?>"><?php echo $value['title_link']; ?>
				        						<svg width="15" height="15" viewBox="0 0 15 15" fill="#324894" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M0.77 1C0.77 0.585786 1.10579 0.25 1.52 0.25H14C14.4142 0.25 14.75 0.585786 14.75 1V13.48C14.75 13.8942 14.4142 14.23 14 14.23C13.5858 14.23 13.25 13.8942 13.25 13.48V2.81066L1.53033 14.5303C1.23744 14.8232 0.762563 14.8232 0.46967 14.5303C0.176777 14.2374 0.176777 13.7626 0.46967 13.4697L12.1893 1.75H1.52C1.10579 1.75 0.77 1.41421 0.77 1Z" fill=""/>
												</svg>
				        						</a>
				        					</div>
				        				</div>
				        				<div class="right-product item">
				        					<div class="list-img-thuoc">
				        						<?php 
				        							if($value['image_1']){ ?> 
				        								<img 
				        								data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300"
				        								src="<?php echo $value['image_1']['url']; ?>" alt="">
				        							<?php }

				        							if($value['image_2']){ ?> 
				        								<img 
				        								data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="600"
				        								src="<?php echo $value['image_2']['url']; ?>" alt="">
				        							<?php }
				        						?>
				        						
				        					</div>
				        				</div>
				        			</div>
		        				<?php }
		        			?>
		        		</div>
		        	</div>
        		<?php }
        	?>


        	<div id="video-home" 
        	data-aos="fade-down" data-aos-duration="1000" >
<!--        		<div class="icon-play text-center">-->
<!--        			<img src="--><?php //bloginfo('template_url'); ?><!--/asset/images/play.svg" alt="">-->
<!--        		</div>-->
        		<video width="100%" height="100%" controls autoplay muted loop class="video-home" poster="<?php echo $image_video['url']; ?>">
			        <source src="<?php echo $video['url']; ?>" type="video/mp4">   
			    </video>
        	</div>
        	<div id="thuong_hieu">
        		<div class="container">
        			<div class="row">
        				<div class="col-12">
        					<div class="content-th">
	        					<h3 
	        						data-aos="fade-down"
		                            data-aos-duration="1000"
		                            data-aos-easing="ease-in-sine"  data-aos-delay="50"
	        					class="title-font text-center"><?php echo $title_thuong_hieu; ?></h3>
	        					<?php 
	        						if($list_item_thuong_hieu){ ?> 
	        							<ul class="list-thuong-hieu"
	        								data-aos="fade-down"
				                            data-aos-duration="1000"
				                            data-aos-easing="ease-in-sine"  data-aos-delay="50"
	        							>
	        								<?php 
	        								$i = 0;
	        									foreach ($list_item_thuong_hieu as $value) {
	        										$i++;
	        									 ?>
	        										<li class="item <?php if($i == 2){ echo 'active'; } ?>">
	        											<div class="ct-branch">
	        												<h4>
	        													<span><?php echo $value['title']; ?></span>
	        												</h4>
	        												<p><?php echo $value['description']; ?></p>
	        											</div>
	        										</li>
	        									<?php }
	        								?>
	        							</ul>
	        						<?php }
	        					?>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>

        	<div id="blog-home">
        		<div class="container">
        			<div class="row">
        				<div class="col-12">
	        				<div class="blog-top"
	        						data-aos="fade-down"
		                            data-aos-duration="1000"
		                            data-aos-easing="ease-in-sine"  data-aos-delay="50"
	        				>
	        					<h3 class="title-font"><?php echo $title_blog; ?></h3>
	        					<a class="read-more-light" href="<?php echo $link_blog; ?>">Xem thêm bài viết
									<svg width="15" height="15" viewBox="0 0 15 15" fill="#324894" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0.77 1C0.77 0.585786 1.10579 0.25 1.52 0.25H14C14.4142 0.25 14.75 0.585786 14.75 1V13.48C14.75 13.8942 14.4142 14.23 14 14.23C13.5858 14.23 13.25 13.8942 13.25 13.48V2.81066L1.53033 14.5303C1.23744 14.8232 0.762563 14.8232 0.46967 14.5303C0.176777 14.2374 0.176777 13.7626 0.46967 13.4697L12.1893 1.75H1.52C1.10579 1.75 0.77 1.41421 0.77 1Z" fill=""/>
									</svg>
	        					</a>
	        				</div>
        				</div>
        			</div>
        			 <?php 
        					if($myposts_blog){ ?>
        						<div class="row swiper slide-mobile-home"
	        						data-aos="fade-down"
		                            data-aos-duration="1000"
		                            data-aos-easing="ease-in-sine"  data-aos-delay="50"
        						>
									<div class="swiper-wrapper">
										<?php
											foreach ($myposts_blog as $item) { ?>
												<div class="col-md-4 item swiper-slide">
													<div class="item-blog">
														<div class="thumbnail">
															<a href="<?php echo get_permalink($item->ID); ?>">
																<?php
																echo get_the_post_thumbnail($item->ID,'blog-thumbnail');
																?>

															</a>

														</div>
														<div class="content-item-blog">
															<a href="<?php echo get_permalink($item->ID); ?>">
																<h4 class='post-title'><?php echo get_the_title($item->ID); ?></h4>
															</a>

															<a class="read-more" href="<?php echo get_permalink($item->ID); ?>">Đọc thêm</a>
														</div>
													</div>
												</div>
											<?php }
										?>
									</div>
        						</div>
								<div class="blog-pagination"></div>
								<div class="text-center link-more-mobile">
									<a class="read-more-light" href="<?php echo $link_blog; ?>">Xem thêm bài viết<svg width="15" height="15" viewBox="0 0 15 15" fill="#324894" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M0.77 1C0.77 0.585786 1.10579 0.25 1.52 0.25H14C14.4142 0.25 14.75 0.585786 14.75 1V13.48C14.75 13.8942 14.4142 14.23 14 14.23C13.5858 14.23 13.25 13.8942 13.25 13.48V2.81066L1.53033 14.5303C1.23744 14.8232 0.762563 14.8232 0.46967 14.5303C0.176777 14.2374 0.176777 13.7626 0.46967 13.4697L12.1893 1.75H1.52C1.10579 1.75 0.77 1.41421 0.77 1Z" fill=""></path>
										</svg>
									</a>
								</div>

        					 <?php }
        				?>
        		</div>
        	</div>
        </div>
    </div>
<?php get_footer();