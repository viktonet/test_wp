<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_about">
							<div class="footer_logo"><a href="#">my<span>home</span></a></div>
							<div class="footer_text">
								<?php understrap_site_info(); ?>

							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="footer_submit"><a href="#">submit listing</a></div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Information</div>
							<div class="footer_info">
								<ul>
									<!-- Phone -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/phone-call.svg" alt=""></div>
										<span>+546 990221 123</span>
									</li>
									<!-- Address -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/placeholder.svg" alt=""></div>
										<span>Main Str, no 23, New York</span>
									</li>
									<!-- Email -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/envelope.svg" alt=""></div>
										<span>hosting@contact.com</span>
									</li>
								</ul>
							</div>
							<div class="footer_links usefull_links">
								<div class="footer_title">Usefull Links</div>
								<ul>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Listings</a></li>
									<li><a href="#">Featured Properties</a></li>
									<li><a href="#">Contact Agents</a></li>
									<li><a href="#">About us</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_links">
							<div class="footer_title">Properties Types</div>
							<ul>
								<li><a href="#">Properties for rent</a></li>
								<li><a href="#">Properties for sale</a></li>
								<li><a href="#">Commercial</a></li>
								<li><a href="#">Homes</a></li>
								<li><a href="#">Villas</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Residential</a></li>
								<li><a href="#">Appartments</a></li>
								<li><a href="#">Off plan</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<nav class="footer_nav order-md-2 order-1 ml-md-auto">
								<ul class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="listings.html">Listings</a></li>
									<li><a href="blog.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="/wp-includes/sitetheme/js/jquery-3.3.1.min.js"></script>
<script src="/wp-includes/sitetheme/styles/bootstrap-4.1.2/popper.js"></script>
<script src="/wp-includes/sitetheme/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/greensock/TweenMax.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/greensock/TimelineMax.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/greensock/animation.gsap.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="/wp-includes/sitetheme/plugins/easing/easing.js"></script>
<script src="/wp-includes/sitetheme/plugins/progressbar/progressbar.min.js"></script>
<script src="/wp-includes/sitetheme/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="/wp-includes/sitetheme/js/custom.js"></script>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<?php wp_footer(); ?>
</body>
