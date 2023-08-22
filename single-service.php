<?php
get_header();
$icon_title = get_field( "icon_title", get_the_ID());
$cure = get_field( "cure", get_the_ID());
$shortcode_form = get_field( "shortcode_form", get_the_ID());
$tab_ingredient = get_field( "tab_ingredient", get_the_ID());
$tab_impact = get_field( "tab_impact", get_the_ID());
$tab_effective_img = get_field( "tab_effective_img", get_the_ID());
$tab_effective_content = get_field( "tab_effective_content", get_the_ID());
$tab_user_manual = get_field( "tab_user_manual", get_the_ID());
$tab_production_process = get_field( "tab_production_process", get_the_ID());
$link_detail = get_field( "link_detail", get_the_ID());
$list_content_after_use_product = get_field( "list_content_after_use_product", get_the_ID());
$tab_production_process_left = get_field( "tab_production_process_left", get_the_ID());
$tab_production_process_right = get_field( "tab_production_process_right", get_the_ID());
$tab_production_process_mobile = get_field( "tab_production_process_mobile", get_the_ID());
$title_tab_hieu_qua = get_field( "title_tab_hieu_qua", get_the_ID());
?>
	<div class="product-box">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="top-box">
						<div class="thumbnail">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="des">
							<div class="title-icon">
								<img src="<?php echo $icon_title['url']; ?>">
							</div>
							<div class="ct-p">
								<?php the_content(); ?>
							</div>
							<?php
								if($cure){ ?>
									<div class="cure">
										<h5>Điều trị</h5>
										<?php
										echo $cure;
										?>
									</div>
								<?php }
							?>
						</div>
					</div>
					<div class="tab-product">
						<div class="head-tab">
							<ul id="tab-product-head">
								<li class="active" data-id="thanhphan"><a href="#">Thành phần</a></li>
								<li data-id="tacdong"><a href="#">Tác động</a></li>
								<li data-id="hieuqua"><a href="#">Hiệu quả</a></li>
								<li data-id="huongdan"><a href="#">Hướng dẫn sử dụng</a></li>
								<li data-id="quytrinh"><a href="#">Quy trình sản xuất</a></li>
							</ul>
						</div>
						<div class="content-tab-product">
							<div id="thanhphan" class="item">
								<?php
								if($tab_ingredient){ ?>
									<div class="content-tp content-ttab">
										<h4>Thành phần hoạt chất tăng trưởng</h4>
										<div class="list-tp">
											<?php
											foreach ($tab_ingredient as $item){ ?>
												<div class="item-tp">
													<img src="<?php echo $item['thumbnail']['url']; ?>">
													<h6><?php echo $item['title']; ?></h6>
												</div>
											<?php }
											?>
										</div>
									</div>
								<?php }
								?>
							</div>
							<div id="tacdong" class="item" style="display: none">
								<?php
								if($tab_impact){ ?>
									<div class="content-td content-ttab">
										<h4>Tác động của <?php echo the_title(); ?> lên da</h4>
										<div class="list-td">
											<?php
											foreach ($tab_impact as $item){ ?>
												<div class="item-td">
													<img src="<?php echo $item['thumbnail']['url']; ?>">
													<h6><?php echo $item['title']; ?></h6>
												</div>
											<?php }
											?>
										</div>

									</div>
								<?php }
								?>
							</div>
							<div id="hieuqua" class="item" style="display: none">
								<div class="content-hq content-ttab">
									<h4><?php echo $title_tab_hieu_qua; ?></h4>
									<div class="box-hq">
										<div class="thumbnail-animation">
											<div class="wrapper">
												<?php
												if($tab_effective_img){?>
													<div class="images">
														<div class="img-1" style="background-image: url(<?php echo $tab_effective_img[1]['thumbnail']['url']?>);"></div>
														<div class="img-2" style="width: 53%;background-image: url(<?php echo $tab_effective_img[0]['thumbnail']['url']?>);"></div>
													</div>
												<?php }
												?>
												<div class="slider">
													<div class="drag-line" style="left: 53%;">
														<span></span>
													</div>
													<input type="range" min="0" max="100" value="50">
												</div>
											</div>
										</div>
										<div class="right-box">
											<div class="text-right-hq">
												<?php
													echo $tab_effective_content;
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="huongdan" class="item" style="display: none">
								<div class="content-ttab content-hd">
									<h4 class="title-hd">Hướng dẫn sử dụng <?php echo the_title(); ?></h4>
									<?php
										if($tab_user_manual){ ?>
											<div class="list-user-manual clearfix">
												<?php
												$step = 0;
													foreach ($tab_user_manual as $item){
														$step++;
														?>
														<div class="item-manual">
															<div class="thumbnail">
																<img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
															</div>
															<div class="step">
																Bước <?php echo $step ?>
															</div>
															<div class="title">
																<?php echo $item['title']; ?>
															</div>
															<div class="attention">
																<?php echo $item['attention'] ?>
															</div>
														</div>
													<?php }
												?>
											</div>
										<?php }
									?>
									<div class="link-detail-hd text-center">
										<a target="_blank" class="read-more-light" href="<?php echo $link_detail; ?>">CHI TIẾT VỀ Hướng dẫn sử dụng <?php echo the_title() ?></a>
									</div>
									<?php
										if($list_content_after_use_product){ ?>
											<div class="content-after-use-product">
												<h4>Hướng dẫn chăm sóc da sau khi sử dụng sản phẩm</h4>
												<div class="list-item-after">
													<?php
													foreach ($list_content_after_use_product as $item){ ?>
														<div class="item-after">
															<div class="title">
																<?php echo $item['title']; ?>
															</div>
															<div class="content-after">
																<?php echo $item['content']; ?>
															</div>
														</div>
													<?php }
													?>
												</div>
											</div>
										<?php }
									?>
								</div>
							</div>
							<div id="quytrinh" class="item" style="display: none">
								<div class="content-ttab content-qt">
									<div class="list-production">
										<?php
											if($tab_production_process_left){ ?>
												<div class="left-production">
													<?php
														foreach ($tab_production_process_left as $item ){
															?>
															<div class="item-production">
																<div class="thumbnail">
																	<img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
																</div>
																<div class="step">
																	<?php echo $item['step']; ?>
																</div>
																<div class="title">
																	<?php echo $item['title']; ?>
																</div>
															</div>
														<?php }
													?>
												</div>
											<?php }

										if($tab_production_process_right){ ?>
											<div class="right-production">
												<?php
												foreach ($tab_production_process_right as $item ){
													?>
													<div class="item-production">
														<div class="thumbnail">
															<img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
														</div>
														<div class="step">
															<?php echo $item['step']; ?>
														</div>
														<div class="title">
															<?php echo $item['title']; ?>
														</div>
													</div>
												<?php }
												?>
											</div>
										<?php }
										?>
									</div>
									<?php
									$step_mb = 0;
										if($tab_production_process_mobile){
											?>
											<div class="list-production-mobile">
												<?php
													foreach ($tab_production_process_mobile as $item){
														$step_mb++;
														?>
														<div class="item-production">
															<div class="thumbnail">
																<img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
															</div>
															<div class="step">
																Bước <?php echo $step_mb; ?>
															</div>
															<div class="title">
																<?php echo $item['title']; ?>
															</div>
														</div>
													<?php }
												?>
											</div>
										<?php }
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		if($shortcode_form){ ?>
			<div class="shortcode-form-single">
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
<?php
get_footer()
?>

<script>
	const slider = document.querySelector(".slider input");
	const img = document.querySelector(".images .img-2");
	const dragLine = document.querySelector(".slider .drag-line");
	slider.oninput = () => {
		let sliderVal = slider.value;
		dragLine.style.left = sliderVal + "%";
		img.style.width = sliderVal + "%";
	};
</script>