<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blueprint
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
));

get_header();
?>

    <main id="primary" class="site-main">
        <section id="hero" class="section py-6">
            <div class="container">
                <div class="intro--wrapper">
                    <h1 class="hero--heading mb-4">Read all posts related to 
                        <span class="span is-lowercase"><?php single_cat_title();?></span>
                    </h1>
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

        <section id="posts" class="section py-4">
            <div class="container">
                <?php if($posts ->  have_posts()): ?>
                    <!-- Begin pagination -->
                    <div class="pagination--wrapper mb-4">
                        <div class="nav-previous"><?php next_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination(); ?>
                        <div class="nav-next"><?php previous_posts_link('Newer posts'); ?></div>
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
                    <div class="pagination--wrapper">
                        <div class="nav-previous"><?php next_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination(); ?>
                        <div class="nav-next"><?php previous_posts_link('Newer posts'); ?></div>
                    </div>
                    <!-- End pagination -->

            </div>
        </section>

        <?php get_template_part('blocks/cta/cta', 'page'); ?>

	</main><!-- #main -->

<?php
get_footer();
