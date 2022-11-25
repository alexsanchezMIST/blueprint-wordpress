<section id="cta" class="section">
    <div class="container">
        <div class="cta">
            <div class="cta--inner">
                <div class="cta--left">
                    <?php if( get_field('cta_heading')): ?>
                        <h2 class="cta--heading"><?php the_field('cta_heading'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('cta_subheading')): ?>
                        <p class="cta--subheading"><?php the_field('cta_subheading'); ?></p>
                    <?php endif; ?>
                    <a href="<?php the_field('cta_button_link'); ?>" target="_blank" class="btn btn--primary"><?php the_field('cta_button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>