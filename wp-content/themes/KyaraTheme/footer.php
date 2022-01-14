    <!-- Footer -->
    <div class="footer block">
        <div class="row footer-items">
            <div class="col">
                <h5>Menu</h5>
                <hr>
                <p>Home</p>
                <p>Blogs</p>
                <p>Over mij</p>
                <p>Contact</p>
            </div>
            <div class="col">
                <h5>Contact</h5>
                <hr>
                <p><i class="fas fa-at" style="margin-right: 1rem;"></i><a href="mailto:kyaradewinter@gmail.com" style="color: white;">Stuur mij een email</a></p>
                <p><i class="fab fa-linkedin-in" style="margin-right: 1rem;"></i><a href="https://www.linkedin.com/in/kyara-de-winter-7919071b0/" target="_blank" style="color: white;">Maak een connectie op LinkedIn</a></p>
                <p><i class="fab fa-instagram" style="margin-right: 1rem;"></i><a href="https://www.instagram.com/xdewinter/" target="_blank" style="color: white;">Volg mij op Instagram</a></p>
            </div>
        </div>
    </div>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
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

						<?php // understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

