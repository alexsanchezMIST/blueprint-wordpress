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
        <section id="hero" class="section py-6">
            <div class="container">
                <div class="intro--wrapper">
                    <h1 class="hero--heading mb-4">Listen to the <span class="span">podcasts!</span></h1>
                    <p class="hero--subheading">Tune in to The Engineering Career Coach Podcast, where Jeff is the primary host. You’ll also be able to see and listen to other podcasts across the industry that Jeff has been a guest on where he shares career-upgrading content!</p>
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
                <?php if($podcasts ->  have_posts()): ?>
                    <!-- Begin pagination -->
                    <div class="pagination--wrapper mb-4">
                        <?php $GLOBALS['wp_query']->max_num_pages = $podcasts->max_num_pages; ?>
                        <div class="nav-previous"><?php next_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination( array(
                            'mid_size' => 1,
                        )); ?>
                        <div class="nav-next"><?php previous_posts_link('Newer posts'); ?></div>
                    </div>
                    <!-- End pagination -->

                    <div class="post--card--wrapper">
                        <?php while ($podcasts -> have_posts()) : $podcasts -> the_post(); ?>
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
