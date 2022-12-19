<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blueprint
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section id="posts" class="section">
                <h1>This is the archive page</h1>
            <div class="container">
                <?php if($posts ->  have_posts()): ?>
                    <div class="post--card--wrapper">
                        <?php while ($posts -> have_posts()) : $posts -> the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="post--card">
                                <img src="<?php the_post_thumbnail(); ?>" alt="" class="post--thumbnail" />
                                <div class="post--card--bottom">
                                    <h5 class="post--card--heading"><?php the_title(); ?></h5>
                                    <div class="post--card--excerpt"><?php the_excerpt(); ?></div>
                                </div>
                        <?php endwhile; ?>
                    </div>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif ;?>

	</main><!-- #main -->

<?php
get_footer();
