<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Blueprint
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php if (have_posts()) : ?>
		<section id="intro" class="section">
			<div class="container">
				<div class="post--heading--wrapper">
					<h1 class="post--heading"><?php the_title(); ?></h1>
				</div>
			</div>
		</section>
		<section id="image" class="section py-0">
			<?php if(has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('post-thumbnail');?>" alt="<?php the_title();?>" class="post--cover">
            <?php endif; ?>
		</section>
		<section id="post" class="section">
			<div class="container">
				<article class="prose article--wrapper">
					<?php the_content(); ?>
					<div class="social--share--wrapper py-4">
						<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
					</div>
				</article>
			</div>
		</section>
		<section id="related" class="section">
			<div class="container">
				<?php if ( function_exists( 'echo_crp' ) ) { echo_crp(); } ?>
			</div>
		</section>
	<?php endif; ?>


</main><!-- #main -->

<?php
get_footer();
