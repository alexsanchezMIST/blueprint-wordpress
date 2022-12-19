<?php get_header(); ?>

<main id="primary" class="site-main">
	<section id="intro" class="section">
		<div class="container">
			<div class="post--heading--wrapper">
				<h1 class="post--heading"><?php the_title(); ?></h1>
			</div>
		</div>
	</section>
	<section id="content" class="section">
		<div class="container">
			<article class="prose article--wrapper">
				<?php the_content(); ?>
			</article>
		</div>
	</section>

	<?php get_template_part('blocks/cta/cta', 'page'); ?>
</main>

<?php
get_footer();
