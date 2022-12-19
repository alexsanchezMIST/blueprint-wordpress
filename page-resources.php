
<?php

$downloads = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'download',
    'post_status' => 'published',
));

get_header();
?>

<main id="primary" class="site-main">
    <section id="intro" class="section">
        <div class="container">
            <div class="intro--wrapper">
                <h1 class="resource--heading mb-2">Check out some free <span class="span">resources</span></h1>
                <p class="resource--subheading">Get access to career-enhancing resources that can help you level-up your leadership and career growth starting right now! Perfect for engineers at all levels!</p>
            </div>
        </div>
    </section>

    <section id="resources" class="section">
        <div class="container">
            <?php if($downloads ->  have_posts()): ?>
            <div class="downloads--wrapper">
                <?php while ($downloads -> have_posts()) : $downloads -> the_post(); ?>
                    <div class="download--card">
                        <?php if(has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('post-thumbnail');?>" alt="<?php the_title();?>" class="download--img">
                        <?php endif; ?>
                        <div class="download--right">
                            <div class="download--badge mb-2">Download</div>
                            <h3 class="download--heading"><?php the_title(); ?></h3>
                            <div class="download--content"><?php the_content(); ?></div>
                            <a href="<?php the_field('resource_link'); ?>" target="_blank" class="btn btn--secondary">
                                <span class="download--icon"></span>Download now
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