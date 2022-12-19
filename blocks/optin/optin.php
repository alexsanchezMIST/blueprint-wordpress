<section id="optin" class="section">
    <div class="container">
        <div class="columns--wrapper">
            <div class="optin--left">
                <?php if( get_field('optin_tagline')): ?>
                    <p class="optin--tagline mb-4"><?php the_field('optin_tagline'); ?></p>
                <?php endif; ?>
                <?php if( get_field('optin_heading')): ?>
                    <h1 class="optin--heading mb-6"><?php the_field('optin_heading'); ?></h1>
                <?php endif; ?>
                <div class="btn--wrapper">
                    <a href="<?php the_field('optin_button_link'); ?>" target="_blank" class="btn btn--primary">
                        <?php if( get_field('optin_button_icon')): ?>
                            <img src="<?php the_field('optin_button_icon'); ?>" alt="" class="icon">
                        <?php endif; ?>
                        <?php the_field('optin_button_text'); ?>
                    </a>
                    <a href="#content" class="btn btn--secondary">Learn more →</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section--wrapper">
        <?php if( get_field('optin_image')): ?>
            <img src="<?php the_field('optin_image'); ?>" alt="" class="hero--cutout">
        <?php endif; ?>
        <div class="hero--background"></div>
    </div>
</section>