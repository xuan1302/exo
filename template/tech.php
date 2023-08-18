<?php
//Template Name: Công nghệ
get_header();
$title = get_field( "title" );
$desciption = get_field( "desciption" );
$shortcode_form = get_field( "shortcode_form" );
$list_item_tech = get_field( "list_item_tech" );
?>
	<div class="container-tech">
		<div class="head-tech">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $desciption; ?></p>
		</div>
	</div>
	<?php
		if($list_item_tech){ ?>
			<div class="container-list-tech">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="box-tech-list">
								<?php
								foreach ($list_item_tech as $item){ ?>
									<div class="item-tech">
										<div class="thumbnail">
											<img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
										</div>
										<div class="des"><span><?php echo $item['description'] ?></span></div>
									</div>
								<?php }
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }
	?>

	<div class="form-tech">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php echo do_shortcode($shortcode_form) ?>
				</div>

			</div>
		</div>

	</div>
<?php
get_footer();
