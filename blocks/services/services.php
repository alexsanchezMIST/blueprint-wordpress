<?php

$services = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'service',
    'post_status' => 'published',
));
?>

<section id="services" class="section">
    <div class="container">
        <?php if($services ->  have_posts()): ?>
            <div class="card--wrapper">
                <?php while ($services -> have_posts()) : $services -> the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="card">
                        <img src="<?php the_field('services_icon'); ?>" alt="Icon" class="card--icon">
                        <h5 class="card--heading"><?php the_title(); ?></h5>
                        <div class="card--content"><?php the_excerpt(); ?></div>
                        <p class="card--link">Learn more →</p>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>