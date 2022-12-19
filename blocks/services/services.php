<?php if( have_rows('services')) : ?>
<section id="services" class="section">
    <div class="container">
        <div class="card--wrapper">
            <?php while( have_rows('services')) : the_row(); ?>
            <a href="<?php site_url(); ?>/services#<?php the_sub_field('services_heading'); ?>" class="card">
                <?php if (get_sub_field('services_icon')): ?>
                    <img src="<?php the_sub_field('services_icon'); ?>" alt="Icon" class="card--icon" />
                <?php endif; ?>
                    <h5 class="card--heading"><?php the_sub_field('services_heading'); ?></h5>
                <?php if (get_sub_field('services_description')): ?>
                    <div class="card--content"><?php the_sub_field('services_description'); ?></div>
                <?php endif; ?>
                <p class="card--link">Learn more →</p>
            </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif;?>