<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="/wp-includes/sitetheme/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="/wp-includes/sitetheme/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/wp-includes/sitetheme/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/wp-includes/sitetheme/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/wp-includes/sitetheme/plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="/wp-includes/sitetheme/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/wp-includes/sitetheme/styles/responsive.css">
<style media="screen">
	.content-area {
		margin-top: 100px;
	}
</style>
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	<!-- Header -->

	<header class="header">

		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="/wp-includes/sitetheme/images/phone-call.svg" alt=""></div>
						<span>+546 990221 123</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="/wp-includes/sitetheme/images/placeholder.svg" alt=""></div>
						<span>Main Str, no 23, New York</span>
					</li>
					<!-- Email -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="/wp-includes/sitetheme/images/envelope.svg" alt=""></div>
						<span>hosting@contact.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="#">Login</a></li>
						<li><a href="#">Register</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php endif; ?>

					<?php
				} else {
					the_custom_logo();
				}
				?>
				<!-- end custom logo -->

			</div>
			<nav class="main_nav">
				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'd-flex flex-row align-items-start justify-content-start',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

			</nav>
			<div class="submit ml-auto"><a href="#">submit listing</a></div>
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>

	</header>

	<!-- Menu -->
