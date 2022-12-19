<?php

$services = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'service',
    'post_status' => 'published',
));

get_header();

?>

<main id="primary" class="site-main">
    <section id="intro" class="section">
        <div class="container">
            <div class="columns--wrapper">
                <div class="column--left">
                    <h1 class="services--heading mb-2"><?php the_title(); ?></h1>
                    <p class="services--subheading mb-4">Helping engineering and technology individuals and teams unleash their potential and take their careers and lives to the next level.</p>
                    <div class="btn--wrapper">
                        <a href="https://go.oncehub.com/JeffPerryIntroCall" target="_blank" class="btn btn--primary"><span class="icon phone--icon"></span>Book a call</a>
                        <a href="#content" class="btn btn--secondary">Learn more →</a>
                    </div>
                </div>
                <div class="column--right"></div>
            </div>
        </div>
        <div class="section--wrapper">
            <?php if( get_field('services_image')): ?>
                <img src="<?php the_field('services_image'); ?>" alt="" class="hero--cutout small">
            <?php endif; ?>
            <div class="hero--background"></div>
        </div>
    </section>

    <div id="content" class="anchor"></div>

    <?php get_template_part('blocks/services/services', 'page'); ?>

    <section id="services-detail" class="section">
        <div class="container">
            <?php if($services ->  have_posts()): ?>
                <div class="services--card--wrapper">
                    <?php while ($services -> have_posts()) : $services -> the_post(); ?>
                        <div id="<?php the_title(); ?>" class="services--card">
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('post-thumbnail');?>" alt="<?php the_title();?>" class="services--card--image">
                            <?php endif; ?>
                            <div class="services--card--bottom">
                                <h3 class="services--card--title"><?php the_title(); ?></h3>
                                <div class="services--description--wrapper"><?php the_content(); ?></div>
                                <a href="https://go.oncehub.com/JeffPerryIntroCall" target="_blank" class="btn btn--primary">
                                    <span class="icon phone--icon"></span>Book a Call
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <?php the_content(); ?>
</main>

<?php
get_footer();