<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blueprint
 */

$year = date('Y');

?>

	<footer class="site-footer">
		<section id="footer" class="footer">
			<div class="container">
				<div class="footer--grid">
					<div class="footer--col">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jeff-perry-logo.svg" alt="Logo" class="logo">
						<p class="footer--copy">Hi, I'm Jeff Perry, a leadership and career coach for engineers. I LOVE seeing my clients upgrade their mindsets, lives, and careers as we take a holistic approach to personal development.</p>
					</div>
					<div class="footer--col">
						<h6 class="footer--heading">Links</h6>
						<?php wp_nav_menu( array('theme_location' => 'footer-links-menu')); ?>
					</div>
					<div class="footer--col">
						<h6 class="footer--heading">Resources</h6>
						<?php wp_nav_menu( array('theme_location' => 'footer-resources-menu')); ?>
					</div>
					<div class="footer--col">
						<h6 class="footer--heading">Legal</h6>
						<?php wp_nav_menu( array('theme_location' => 'footer-legal-menu')); ?>
					</div>
					<div class="footer--col"></div>
				</div>
			</div>
		</section>
		<div class="footer--bottom">
			<p class="footer--copyright">© <?php echo $year ;?> More Than Engineering. All rights reserved.</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
