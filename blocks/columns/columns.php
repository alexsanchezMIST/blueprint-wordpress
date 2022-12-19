<section id="columns" class="section">
    <div class="container">
        <div class="columns--wrapper">
            <div class="columns--left">
                <?php if( get_field('columns_heading')): ?>
                    <h2 class="columns--heading mb-2"><?php the_field('columns_heading'); ?></h2>
                <?php endif; ?>

                <?php if( get_field('columns_subheading')): ?>
                    <div class="columns--subheading mb-4"><?php the_field('columns_subheading'); ?></div>
                <?php endif; ?>

                <?php if(get_field('has_button')): ?>
                    <a href="<?php the_field('columns_button_link'); ?>" class="btn btn--secondary">
                        <?php the_field('columns_button_text'); ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Icon" class="icon"/>
                    </a>
                <?php endif; ?>

            </div>
            <div class="columns--right">
                <?php if( get_field('columns_image')): ?>
                    <img src="<?php the_field('columns_image'); ?>" class="columns--image"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>