<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blueprint
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="intro" class="section py-6">
			<div class="container">
				<div class="post--heading--wrapper">
					<h1 class="post--heading"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blueprint' ); ?></h1>
					<p class="hero--subheading"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'blueprint' ); ?></p>
				</div>
			</div>
		</section>

		<section id="search" class="section py-2">
            <div class="container">
                <div class="search--wrapper">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>

	</main>

<?php
get_footer();
