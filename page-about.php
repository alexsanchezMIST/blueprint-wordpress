<?php

get_header();

?>

<section id="intro" class="section">
    <div class="container">
        <div class="columns--wrapper">
            <div class="column--left">
                <h1 class="services--heading"><?php the_title(); ?></h1>
                <p class="services--subheading"><?php the_excerpt(); ?></p>
                <div class="btn--wrapper">
                    <a href="https://go.oncehub.com/JeffPerryIntroCall" target="_blank" class="btn btn--primary"><span class="icon phone--icon"></span>Book a call</a>
                    <a href="#" class="btn btn--secondary">Learn more →</a>
                </div>
            </div>
            <div class="column--right"></div>
        </div>
    </div>
</section>

<?php the_content(); ?>

<?php get_template_part('blocks/cta/cta', 'page'); ?>