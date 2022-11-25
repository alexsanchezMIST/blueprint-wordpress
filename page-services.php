<?php

$services = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'service',
    'post_status' => 'published',
));

get_header();

?>

<section id="intro" class="section">
    <div class="container">
        <div class="columns--wrapper">
            <div class="column--left">
                <h1 class="services--heading"><?php the_title(); ?></h1>
                <p class="services--subheading"><?php the_content(); ?></p>
                <div class="btn--wrapper">
                    <a href="https://go.oncehub.com/JeffPerryIntroCall" target="_blank" class="btn btn--primary"><span class="icon phone--icon"></span>Book a call</a>
                    <a href="#" class="btn btn--secondary">Learn more →</a>
                </div>
            </div>
            <div class="column--right"></div>
        </div>
    </div>
</section>

<?php get_template_part('blocks/services/services', 'page'); ?>

<section id="services-detail" class="section">
    <div class="container">
        <?php if($services ->  have_posts()): ?>
            <div class="services--card--wrapper">
                <?php while ($services -> have_posts()) : $services -> the_post(); ?>
                    <div class="services--card">
                        <img src="<?php the_post_thumbnail(); ?>" alt="" class="services--card--image">
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
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('blocks/cta/cta', 'page'); ?>