<?php 

$logos = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'logo',
    'post_status' => 'published',
));

?>

<section id="carousel" class="section">
    <div class="container">
        <h5 class="carousel--heading">Clients are building their careers at top companies like:</h5>
        <?php if($logos -> have_posts()): ?>
            <div class="logos--wrapper">
                <?php while ($logos -> have_posts()) : $logos -> the_post(); ?>
                    <div class="logo--wrapper">
                        <img src="<?php the_post_thumbnail(); ?>" alt="" class="logo">
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>