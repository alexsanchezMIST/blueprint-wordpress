<?php

get_header();

?>
<main id="primary" class="site-main">
    <section id="intro" class="section">
        <div class="container">
            <div class="columns--wrapper">
                <div class="column--left">
                    <?php if( get_field('about_heading')): ?>
                        <h1 class="services--heading mb-2"><?php the_field('about_heading'); ?></h1>
                    <?php endif; ?>
                    <?php if( get_field('about_subheading')): ?>
                        <p class="services--subheading mb-4"><?php the_field('about_subheading'); ?></p>
                    <?php endif; ?>
                    <div class="btn--wrapper">
                        <a href="https://go.oncehub.com/JeffPerryIntroCall" target="_blank" class="btn btn--primary"><span class="icon phone--icon"></span>Book a call</a>
                        <a href="#content" class="btn btn--secondary">Learn more →</a>
                    </div>
                </div>
                <div class="column--right"></div>
            </div>
        </div>
        <div class="section--wrapper">
            <?php if( get_field('about_image')): ?>
                <img src="<?php the_field('about_image'); ?>" alt="" class="hero--cutout small">
            <?php endif; ?>
            <div class="hero--background"></div>
        </div>
    </section>

    <div id="content" class="anchor"></div>
    <?php the_content(); ?>

</main> 

<?php
get_footer();