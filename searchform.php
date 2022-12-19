<?php
    global $post;
    $post_slug = $post->post_name;
;?>

<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <label>
        <span class="screen-reader-text">
            <?php echo _x('Search for:', 'label'); ?>
        </span>
        <input type="search" class="search-field" placeholder="Search ..." value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label'); ?>">
    </label>
    <input type="submit" cleass="search-submit" value="Search">
    <?php if($post_slug == 'podcasts') {
        echo '<input type="hidden" value="podcast" name="post_type" id="post_type" />';
    } else {
        echo '<input type="hidden" value="post" name="post_type" id="post_type" />';
    }; ?>
    <input type="hidden" value="1" name="sentence" />
</form>