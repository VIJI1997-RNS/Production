<section class="our-campuses-content">
    <div class="container">
        <div class="row">
            <div class="col-12 main-headings text-start">
                <h2>Our <span>Campuses</span></h2>
            </div>
            <div class="col-12">
                <?php the_field('our_campuses_content', 'option'); ?>
            </div>
        </div>
    </div>
</section>
<section class="our-campuses py-4">
    <div class="container">
        <?php
        if (get_query_var('paged')) $paged = get_query_var('paged');
        if (get_query_var('page')) $paged = get_query_var('page');
        $wp_query = new WP_Query(array(
            'posts_per_page'      => -1,
            'post_type' => 'our-campuses',
            'paged' => $paged,
        ));
        if ($wp_query->have_posts()) : ?>
            <div class="row g-5">
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <picture>
                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="featured-image">
                                        <?php
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                        $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                                        ?>
                                        <img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr($alt_text); ?>" class="img-fluid" />
                                    </div>
                                <?php } ?>
                            </picture>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php the_title(); ?>
                                </h5>
                                <a href="<?php echo get_permalink() ?>" class="btn btn-lg main-btn">
                                    Discover
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <!-- show 404 error here -->
        <?php endif; ?>
    </div>
</section>