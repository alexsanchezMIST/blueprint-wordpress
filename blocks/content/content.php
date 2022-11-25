<section id="about" class="section">
    <div class="container">
        <div class="heading--wrapper">
            <?php if( get_field('content_heading')): ?>
                <h2 class="content--heading mb-4"><?php the_field('content_heading'); ?></h2>
            <?php endif; ?>
        </div>
        <?php if( get_field('content_content')): ?>
            <article class="prose"><?php the_field('content_content'); ?></article>
        <?php endif; ?>
    </div>
</section>