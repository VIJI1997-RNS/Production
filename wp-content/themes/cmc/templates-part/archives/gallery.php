<section class="news-sec pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 news-content gallery-content">
                <div class="row">
                    <div class="col-md-5">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
                            <?php
                            /**
                             * Get Categories list with sub category
                             */
                            $terms = get_terms(array(
                                'taxonomy' => 'gallery-tag',
                                'orderby' => 'ID',
                                'hide_empty' => false
                            ));
                            $i = 0;
                            foreach ($terms as $term) {
                            ?>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="pills-<?php echo $term->slug; ?>" <?php echo $i == 0 ? 'aria-selected="true"' : 'aria-selected="false"'; ?> <?php echo $i == 0 ? 'class="nav-link active"' : 'class="nav-link"'; ?> data-bs-toggle="pill" data-bs-target="#pills-<?php echo $term->slug; ?>" id="pills-<?php echo $term->slug; ?>-tab" role="tab" type="button"><?php if (get_field('category_image', 'term_' . $term->term_id) != '') : ?>
                                            <?php endif; ?><?php echo $term->name; ?>
                                    </button>
                                </li>
                            <?php
                                if ($i === 0)
                                    $i++;
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-end g-3">
                            <div class="form-group col-6 col-md-4">
                                <select id="month-filter" class="form-select" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <?php
                                    $proyecto_cat = get_terms(array(
                                        'taxonomy' => 'gallery-category',
                                        'hide_empty' => false,
                                        'orderby'   => 'name',
                                        'order'    => 'DESC'
                                    ));
                                    foreach ($proyecto_cat as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value->term_id; ?>"><?php echo $value->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <select id="year-filter" class="form-select" aria-label="Default select example">
                                    <option selected>Select Year</option>
                                    <?php
                                    function get_years()
                                    {
                                        $years = range(date('Y'), date('Y') - 10);
                                        return $years;
                                    }
                                    $years = get_years();
                                    foreach ($years as $year) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <select id="month-filter" class="form-select" aria-label="Default select example">
                                    <option selected>Select Month</option>
                                    <?php wp_get_archives(array(
                                        'type' => 'monthly',
                                        'format' => 'option'
                                    )); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <?php
                    $j = 0;
                    foreach ($terms as $term_1) {
                    ?>
                        <div aria-labelledby="pills-<?php echo $term_1->slug; ?>-tab" <?php echo $j == 0 ? 'class="tab-pane fade show active hide-content"' : 'class="tab-pane fade"'; ?> id="pills-<?php echo $term_1->slug; ?>" role="tabpanel">
                            <?php
                            $args = array(
                                'posts_per_page'       => -1,
                                'post_type' => 'gallery', // or 'post', 'page'
                                'orderby' => 'date', // or 'date', 'rand'
                                'order' => 'DESC', // or 'DESC'
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'gallery-tag',
                                        'field' => 'term_id',
                                        'terms' => $term_1->term_id,
                                        'orderby' => 'date', // change the order by namechange the order to ascending
                                    )
                                )
                            );
                            $testimonials = new WP_Query($args);
                            ?>
                            <div class="col-12">
                                <h3><?php echo $term_1->name; ?> <span>Events</span></h3>
                            </div>
                            <!-- All news -->
                            <div class="row" id="filter-section">
                                <?php
                                $testimonials = new WP_Query($args);
                                if ($testimonials->have_posts()) :
                                    while ($testimonials->have_posts()) :
                                        $testimonials->the_post();
                                ?>
                                        <div class="col-md-4 gallery-blocks filter-item">
                                            <?php if (have_rows('gallery')) : ?>
                                                <?php while (have_rows('gallery')) : the_row(); ?>
                                                    <?php if (get_row_layout() == 'images_content') : ?>
                                                        <?php if (have_rows('gallery_images')) : ?>
                                                            <?php
                                                            $album = [];
                                                            while (have_rows('gallery_images')) : the_row();
                                                                $album[] = ['src' => get_sub_field('album_gallery_images')];
                                                            endwhile;
                                                            ?>
                                                            <a href="<?php echo $album[0]['src']; ?>" data-fancybox="album" class="position-relative">
                                                                <picture>
                                                                    <img src="<?php echo $album[0]['src']; ?>" class="img-fluid" />
                                                                </picture>
                                                                <div class="gallery-icon">
                                                                    <picture>
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-icon.png" class="img-fluid" />
                                                                    </picture>
                                                                </div>
                                                                <h3><?php the_title(); ?></h3>
                                                                <span>View</span>
                                                            </a>
                                                            <div style="display: none;">
                                                                <?php foreach ($album as $image) : ?>
                                                                    <a href="<?php echo $image['src']; ?>" data-fancybox="album">
                                                                        <picture>
                                                                            <img src="<?php echo $image['src']; ?>" class="img-fluid" />
                                                                        </picture>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php else : ?>
                                                            <!-- No rows found -->
                                                        <?php endif; ?>
                                                    <?php elseif (get_row_layout() == 'videos_content') : ?>
                                                        <?php if (get_sub_field('thumbnail_image')) : ?>
                                                            <a href=" <?php the_sub_field('video_link'); ?>" data-fancybox class="position-relative">
                                                                <picture>
                                                                    <img src="<?php the_sub_field('thumbnail_image'); ?>" />
                                                                </picture>
                                                                <div class="gallery-icon">
                                                                    <picture>
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/video-icon.png" class="img-fluid" />
                                                                    </picture>
                                                                </div>
                                                                <h3><?php the_title(); ?></h3>
                                                                <span>View</span>
                                                            </a>
                                                        <?php endif ?>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <!-- No layouts found -->
                                            <?php endif; ?>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                                <div class="text-center py-5 list-news-events">
                                    <button id="show-more" class="btn btn btn-outline-primary">Show More </button>
                                    <button id="show-less" style="display: none;" class="btn btn btn-outline-primary"> Show Less </button>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($j === 0)
                            $j++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>