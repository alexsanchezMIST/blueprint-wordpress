
<?php

$downloads = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'download',
    'post_status' => 'published',
));

get_header();
?>

<section id="intro" class="section">
    <div class="container">
        <div class="intro--wrapper">
            <h1 class="resource--heading"><?php the_title(); ?></h1>
            <p class="resource--subheading"><?php the_content(); ?></p>
        </div>
    </div>
</section>

<section id="resources" class="section">
    <div class="container">
        <?php if($downloads ->  have_posts()): ?>
        <div class="downloads--wrapper">
            <?php while ($downloads -> have_posts()) : $downloads -> the_post(); ?>
                <div class="download--card">
                    <img src="<?php the_post_thumbnail(); ?>" alt="" class="download--img" />
                    <div class="download--right">
                        <div class="download--badge">Download</div>
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

<?php get_template_part('blocks/cta/cta', 'page'); ?>