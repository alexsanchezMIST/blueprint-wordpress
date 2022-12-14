<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blueprint
 */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
));

$categories = get_categories(array(
    'hide_empty' => true,
));

get_header();
?>

	<main id="primary" class="site-main">
        <section id="hero" class="section py-6">
            <div class="container">
                <div class="intro--wrapper">
                    <h1 class="hero--heading mb-4">Welcome to the <span class="span">blog!</span></h1>
                    <p class="hero--subheading">This blog will help you take your career and leadership challenges beyond the problems to find solutions. Come here not just to learn new ideas but to take action!</p>
                </div>
            </div>
        </section>

        <section id="categories" class="section py-0">
            <div class="container">
                <div class="categories--wrapper">
                    <?php foreach($categories as $category) {
                        echo '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
                    }
                    ;?>
                </div>
            </div>
        </section>

        <section id="search" class="section py-6">
            <div class="container">
                <div class="search--wrapper">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>


        <section id="posts" class="section py-4">
            <div class="container">
                <?php if($posts ->  have_posts()): ?>
                    <!-- Begin pagination -->
                    <div class="pagination--wrapper mb-4">
                        <div class="nav-previous"><?php previous_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination(); ?>
                        <div class="nav-next"><?php next_posts_link('Newer posts'); ?></div>
                    </div>
                    <!-- End pagination -->

                    <div class="post--card--wrapper mb-4">
                        <?php while ($posts -> have_posts()) : $posts -> the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="post--card">
                                <?php if(has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('post-thumbnail');?>" alt="<?php the_title();?>" class="post--thumbnail">
                                <?php endif; ?>
                                <div class="post--card--bottom">
                                    <h5 class="post--card--heading"><?php the_title(); ?></h5>
                                    <div class="post--card--excerpt"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                    <!-- Begin pagination -->
                    <div class="pagination--wrapper mb-4">
                        <div class="nav-previous"><?php previous_posts_link('Older posts'); ?></div>
                        <?php the_posts_pagination(); ?>
                        <div class="nav-next"><?php next_posts_link('Newer posts'); ?></div>
                    </div>
                    <!-- End pagination -->

            </div>
        </section>

        <?php
            if($page_id = get_option('page_for_posts')) {
                get_the_title($page_id);

                if($post = get_post($page_id)) {
                    setup_postdata($post);
                    the_content();
                    wp_reset_postdata();
                }

            }
        ;?>

	</main><!-- #main -->

<?php
get_footer();
