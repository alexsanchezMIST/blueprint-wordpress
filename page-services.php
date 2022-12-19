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

    <?php the_content(); ?>
</main>

<?php
get_footer();