<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Blueprint
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$s = get_search_query();
$args = array(
	's' => $s,
	'posts_per_page' => 9,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
);
$posts = new WP_Query($args);

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<section id="hero" class="section py-6">
            	<div class="container">
                	<div class="intro--wrapper">
                    	<h1 class="hero--heading mb-4"><?php printf( esc_html__( 'Search Results for: %s', 'blueprint' ), '<span class="span">' . get_search_query() . '</span>' );?></h1>
                    	<p class="hero--subheading">Can't find what you're looking for? Try another search.</p>
                	</div>
            	</div>
        	</section>

			<section id="search" class="section py-4">
            	<div class="container">
                	<div class="search--wrapper">
                    	<?php get_search_form(); ?>
                	</div>
            	</div>
        	</section>

			<section id="posts" class="section">
				<div class="container">
					<?php if($posts ->  have_posts()): ?>

                    <!-- Begin pagination -->
                    <div class="pagination--wrapper mb-4">
                        <div class="nav-previous"><?php previous_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination(); ?>
                        <div class="nav-next"><?php next_posts_link('Newer posts'); ?></div>
                    </div>
                    <!-- End pagination -->

						<div class="post--card--wrapper mb-4">
                        	<?php while ($posts -> have_posts()) : $posts -> the_post(); ?>
                            	<a href="<?php the_permalink(); ?>" class="post--card">
                                	<?php if(has_post_thumbnail()) : ?>
                                    	<img src="<?php the_post_thumbnail_url('post-thumbnail');?>" alt="<?php the_title();?>" class="post--thumbnail">
                                	<?php endif; ?>
                                	<div class="post--card--bottom">
                                    	<h5 class="post--card--heading"><?php the_title(); ?></h5>
                                    	<div class="post--card--excerpt"><?php the_excerpt(); ?></div>
                                	</div>
                            	</a>
                        	<?php endwhile; ?>
                    	</div>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

                    <!-- Begin pagination -->
                    <div class="pagination--wrapper mb-4">
                        <div class="nav-previous"><?php previous_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination(); ?>
                        <div class="nav-next"><?php next_posts_link('Newer posts'); ?></div>
                    </div>
                    <!-- End pagination -->

            	</div>
        	</section>
		
		<?php endif; ?>

		<?php get_template_part('blocks/cta/cta', 'page'); ?>

	</main><!-- #main -->

<?php
get_footer();