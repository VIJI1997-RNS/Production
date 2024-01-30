<form class="header-search" role="search" method="get" action="<?php echo home_url('/'); ?>">
    <button class="btn" type="submit"><img src="<?php bloginfo('template_url'); ?>/assets/images/search.png"></button>
    <input class="form-control me-2 search-field" type="search" aria-label="Search" name="s" placeholder="Type & Search..." value="<?php echo get_search_query(); ?>">
    <input type="hidden" name="post_type" value="any"> <!-- Search all post types -->
</form>


