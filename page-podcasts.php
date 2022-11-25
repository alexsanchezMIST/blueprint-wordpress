<?php

$podcasts = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'podcast',
    'post_status' => 'published',
));

$categories = get_categories(array(
    'hide_empty' => true,
));

get_header();
?>

	<main id="primary" class="site-main">
        <section id="hero" class="section py-6">
            <div class="container">
                <div class="intro--wrapper">
                    <h1 class="hero--heading">Listen to the <span class="span">podcasts!</span></h1>
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
                    <div class="post--card--wrapper">
                        <?php while ($podcasts -> have_posts()) : $podcasts -> the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="post--card">
                                <img src="<?php the_post_thumbnail(); ?>" alt="" class="post--thumbnail" />
                                <div class="post--card--bottom">
                                    <h5 class="post--card--heading"><?php the_title(); ?></h5>
                                    <div class="post--card--excerpt"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>

        <?php get_template_part('blocks/cta/cta', 'page'); ?>

	</main><!-- #main -->

<?php
get_footer();
