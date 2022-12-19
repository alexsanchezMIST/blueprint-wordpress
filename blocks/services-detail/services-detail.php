<?php

$services = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'service',
    'post_status' => 'published',
));
?>

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