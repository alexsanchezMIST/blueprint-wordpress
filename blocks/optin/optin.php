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
                    <a href="<?php the_field('optin_button_link'); ?>" target="_blank" class="btn btn--primary"><?php the_field('optin_button_text'); ?></a>
                    <a href="#intro" class="btn btn--secondary">Learn more →</a>
                </div>

            </div>
        </div>
    </div>
</section>