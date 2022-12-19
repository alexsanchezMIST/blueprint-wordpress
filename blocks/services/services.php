<section id="services" class="section">
    <div class="container">
        <div class="card--wrapper">
            <a href="<?php site_url(); ?>/services#<?php the_field('services_heading'); ?>" class="card">
                <?php if (get_field('services_icon')): ?>
                    <img src="<?php the_field('services_icon'); ?>" alt="Icon" class="card--icon" />
                <?php endif; ?>
                    <h5 class="card--heading"><?php the_field('services_heading'); ?></h5>
                <?php if (get_field('services_description')): ?>
                    <div class="card--content"><?php the_field('services_description'); ?></div>
                <?php endif; ?>
                <p class="card--link">Learn more →</p>
            </a>
        </div>
    </div>
</section>