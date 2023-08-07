<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anonymous
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 
$logo = get_field('logo', 'option');
$logo_transparent = get_field('logo_transparent', 'option');
?>
<div class="menu-responsive">
	<svg class="icon-close-res-menu" width="32" height="32" viewBox="0 0 32 32" fill="#324894" xmlns="http://www.w3.org/2000/svg">
		<path d="M18.4948 16L25.478 9.01684C25.8094 8.68601 25.9958 8.23707 25.9962 7.76879C25.9967 7.3005 25.811 6.85123 25.4802 6.51981C25.1494 6.18839 24.7004 6.00197 24.2321 6.00156C23.7638 6.00115 23.3146 6.18677 22.9832 6.51761L16 13.5008L9.01684 6.51761C8.68542 6.18619 8.23592 6 7.76723 6C7.29853 6 6.84903 6.18619 6.51761 6.51761C6.18619 6.84903 6 7.29853 6 7.76723C6 8.23592 6.18619 8.68542 6.51761 9.01684L13.5008 16L6.51761 22.9832C6.18619 23.3146 6 23.7641 6 24.2328C6 24.7015 6.18619 25.151 6.51761 25.4824C6.84903 25.8138 7.29853 26 7.76723 26C8.23592 26 8.68542 25.8138 9.01684 25.4824L16 18.4992L22.9832 25.4824C23.3146 25.8138 23.7641 26 24.2328 26C24.7015 26 25.151 25.8138 25.4824 25.4824C25.8138 25.151 26 24.7015 26 24.2328C26 23.7641 25.8138 23.3146 25.4824 22.9832L18.4948 16Z" fill=""/>
	</svg>

	<div class="content-menu-mobile">
		<nav id="site-navigation-mobile" class="main-navigation-mobile">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary_menu',
					'menu_id'        => 'primary-menu-mobile',
				)
			);
			?>
		</nav>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'anonymous' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content-header d-flex justify-content-between align-items-center">
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo $logo['url'] ?>" alt="">
									<img class="logo-transparent" src="<?php echo $logo_transparent['url'] ?>" alt="">
								</a>
							</h1>
							<?php
						else :
							?>
							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo $logo['url'] ?>" alt="">
									<img class="logo-transparent" src="<?php echo $logo_transparent['url'] ?>" alt="">
								</a>
							</p>
							<?php
						endif;
						?>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary_menu',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav>
					<div class='head-right'>
						<div class="header-search d-flex align-items-center justify-content-end">
							<div class="icon-search">
								<!-- <img src="<?php bloginfo('template_url'); ?>/asset/images/icon-search.svg" alt=""> -->
								<svg width="22" height="22" viewBox="0 0 22 22" fill="#324894" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.5527 0.870728C10.5901 0.870728 12.544 1.68008 13.9847 3.12072C15.4253 4.56137 16.2347 6.51531 16.2347 8.5527C16.2347 10.4555 15.5374 12.2046 14.391 13.5519L14.7101 13.871H15.6437L21.553 19.7802L19.7802 21.553L13.871 15.6437V14.7101L13.5519 14.391C12.158 15.5808 10.3854 16.2346 8.5527 16.2347C6.51531 16.2347 4.56137 15.4253 3.12072 13.9847C1.68008 12.544 0.870728 10.5901 0.870728 8.5527C0.870728 6.51531 1.68008 4.56137 3.12072 3.12072C4.56137 1.68008 6.51531 0.870728 8.5527 0.870728ZM8.5527 3.23441C5.59809 3.23441 3.23441 5.59809 3.23441 8.5527C3.23441 11.5073 5.59809 13.871 8.5527 13.871C11.5073 13.871 13.871 11.5073 13.871 8.5527C13.871 5.59809 11.5073 3.23441 8.5527 3.23441Z"/>
								</svg>

							</div>
							<div class="form-search-header">
							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
									<input type="search" class="search-field"
										placeholder="<?php echo esc_attr_x( 'Bạn đang cần tìm kiếm gì?', 'placeholder' ) ?>"
										value="<?php echo get_search_query() ?>" name="s"
										title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</form>
							</div>
						</div>
						<div class="icon-bar">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="#324894" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.19995 12.8C3.19995 12.3757 3.36852 11.9687 3.66858 11.6687C3.96864 11.3686 4.3756 11.2 4.79995 11.2H21.2928C21.7171 11.2 22.1241 11.3686 22.4241 11.6687C22.7242 11.9687 22.8928 12.3757 22.8928 12.8C22.8928 13.2244 22.7242 13.6314 22.4241 13.9314C22.1241 14.2315 21.7171 14.4 21.2928 14.4H4.79995C4.3756 14.4 3.96864 14.2315 3.66858 13.9314C3.36852 13.6314 3.19995 13.2244 3.19995 12.8ZM3.19995 6.40005C3.19995 5.9757 3.36852 5.56874 3.66858 5.26868C3.96864 4.96862 4.3756 4.80005 4.79995 4.80005H27.2C27.6243 4.80005 28.0313 4.96862 28.3313 5.26868C28.6314 5.56874 28.8 5.9757 28.8 6.40005C28.8 6.8244 28.6314 7.23136 28.3313 7.53142C28.0313 7.83148 27.6243 8.00005 27.2 8.00005H4.79995C4.3756 8.00005 3.96864 7.83148 3.66858 7.53142C3.36852 7.23136 3.19995 6.8244 3.19995 6.40005ZM3.19995 19.2C3.19995 18.7757 3.36852 18.3687 3.66858 18.0687C3.96864 17.7686 4.3756 17.6 4.79995 17.6H27.2C27.6243 17.6 28.0313 17.7686 28.3313 18.0687C28.6314 18.3687 28.8 18.7757 28.8 19.2C28.8 19.6244 28.6314 20.0314 28.3313 20.3314C28.0313 20.6315 27.6243 20.8 27.2 20.8H4.79995C4.3756 20.8 3.96864 20.6315 3.66858 20.3314C3.36852 20.0314 3.19995 19.6244 3.19995 19.2ZM3.19995 25.6C3.19995 25.1757 3.36852 24.7687 3.66858 24.4687C3.96864 24.1686 4.3756 24 4.79995 24H21.2928C21.7171 24 22.1241 24.1686 22.4241 24.4687C22.7242 24.7687 22.8928 25.1757 22.8928 25.6C22.8928 26.0244 22.7242 26.4314 22.4241 26.7314C22.1241 27.0315 21.7171 27.2 21.2928 27.2H4.79995C4.3756 27.2 3.96864 27.0315 3.66858 26.7314C3.36852 26.4314 3.19995 26.0244 3.19995 25.6Z" fill=""/>
							</svg>

						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- #site-navigation -->
	</header><!-- #masthead -->
