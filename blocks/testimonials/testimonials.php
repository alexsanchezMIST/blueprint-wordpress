<?php 

$testimonials = new WP_Query(array(
    'numberposts' => -1,
    'post_type' => 'testimonial',
    'post_status' => 'published',
));
?>

<section id="testimonials" class="section">
    <div class="container">
        <?php if($testimonials -> have_posts()): ?>
            <ul class="testimonial--wrapper">
                <?php while ($testimonials -> have_posts()) : $testimonials -> the_post(); ?>
                    <li class="testimonial">
                        <p class="testimonial--content"><?php the_content(); ?></p>
                        <div class="testimonial--bottom">
                            <h6 class="testimonial--author"><?php the_title(); ?></h6>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>