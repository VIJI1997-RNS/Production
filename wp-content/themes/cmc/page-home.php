<?php
get_header();
?>
<!-- Banner Section Start Here -->
<section>
    <div class="container-fluid m-0 p-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="banner-slider owl-carousel owl-theme">
                    <?php
                    // Check rows existexists.
                    if (have_rows('banner_slider')) :
                        // Loop through rows.
                        while (have_rows('banner_slider')) : the_row();
                    ?>
                            <div class="banner-item item">
                                <picture>
                                    <img src="<?php the_sub_field('banner_image'); ?>" class="d-none d-md-block w-100 img-fluid" alt="<?php the_sub_field('banner_image_alt'); ?>">
                                </picture>
                                <picture>
                                    <img src="<?php the_sub_field('banner_image_mobile'); ?>" class="d-block d-md-none w-100 img-fluid" alt="<?php the_sub_field('banner_image_alt'); ?>">
                                </picture>
                                <div class="carousel-caption d-md-block">
                                    <div class="slider-text">
                                        <div class="wow fadeInDown" data-wow-duration="900ms" data-wow-delay="1000ms">
                                            <?php the_sub_field('heading'); ?>
                                        </div>
                                        <a class="wow fadeInUp blue-btn-hover" data-wow-duration="1100ms" data-wow-delay="1600ms" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_label'); ?></a>
                                    </div>
                                </div>
                                <div class="download-app d-none d-lg-block">
                                    <h6><?php the_sub_field('qr_code_heading'); ?></h6>
                                    <picture>
                                        <img src="<?php the_sub_field('qr_code_image'); ?>" class="img-fluid" alt="<?php the_sub_field('qr_code_alt'); ?>">
                                    </picture>
                                    <div class="download-btn">
                                        <a href="<?php the_sub_field('android_download_button_link'); ?>"> <img src="<?php the_sub_field('android_download_button'); ?>" class="img-fluid" alt="<?php the_sub_field('android_download_button_alt'); ?>"></a>
                                        <a href="<?php the_sub_field('ios_download_button_link'); ?>"> <img src="<?php the_sub_field('ios_download_button'); ?>" class="img-fluid" alt="<?php the_sub_field('ios_download_button_alt'); ?>"></a>
                                    </div>
                                </div>
                                <div class="download-app d-block d-lg-none">
                                    <h6><?php the_sub_field('qr_code_heading'); ?></h6>
                                    <div class="row align-items-center">
                                        <div class="col-6 qr-code">
                                            <picture>
                                                <img src="<?php the_sub_field('qr_code_image'); ?>" class="img-fluid" alt="<?php the_sub_field('qr_code_alt'); ?>">
                                            </picture>
                                        </div>
                                        <div class="col-6">
                                            <div class="download-btn">
                                                <a href="<?php the_sub_field('android_download_button_link'); ?>"> <img src="<?php the_sub_field('android_download_button'); ?>" class="img-fluid" alt="<?php the_sub_field('android_download_button_alt'); ?>">
                                                </a>
                                                <a href="<?php the_sub_field('ios_download_button_link'); ?>"> <img src="<?php the_sub_field('ios_download_button'); ?>" class="img-fluid" alt="<?php the_sub_field('ios_download_button_alt'); ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
        <?php
                        // Do something...
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
        ?>
            </div>
        </div>
    </div>
    </div>
</section>
</div>
<!-- Banner Section End Here -->
<!-- Quote Section Start Here -->
<section class="quote">
    <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class="col-12 p-0 text-center">
                <?php the_field('quote'); ?>
            </div>
            <!-- <div class="col-12 close-icon">
                <img src="<?php //bloginfo('template_url'); 
                            ?>/assets/images/close-icon.png" class="img-fluid">
            </div> -->
        </div>
    </div>
</section>
<!-- Quote Section End Here -->
<!-- News Section Start Here -->
<section class="speeker-section">
    <div class="container">
        <?php
        $category_name = 'featured-news'; // replace with the slug of the desired category
        $args = array(
            'numberposts' => 3,
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => $category_name
        );
        $resource_posts = get_posts($args);
        if ($resource_posts) :
        ?>
            <div class="row g-4">
                <?php
                foreach ($resource_posts as $post) :
                    setup_postdata($post);
                    $related_posts = get_field('featured_news');
                ?>
                    <div class="col-md-4">
                        <div class="speeker-box ">
                            <a href="<?php the_field('third_party_link'); ?>" target="_blank">
                                <img src="<?php the_field('icon'); ?>" class="img-fluid">
                                <div class="speeker-para">
                                    <p><?php the_title(); ?></p>
                                    <?php
                                    if ($related_posts) :
                                        foreach ($related_posts as $related_post) :
                                            setup_postdata($related_post);
                                    ?>
                                            <p><?php the_title(); ?></p>
                                    <?php
                                            wp_reset_postdata();
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
<!-- News Section End Here -->
<!-- Service Section Start Here -->
<section class="service-section">
    <div class="container">
        <div class="main-headings">
            <h2><?php the_field('our_service_heading'); ?></h2>
        </div>
        <?php
        $args = array(
            'numberposts' => 4,
            'post_type' => 'services',
            'post_status' => 'publish',
        );
        $resource_posts = get_posts($args);
        if ($resource_posts) :
        ?>
            <div class="row align-items-center g-3">
                <?php
                foreach ($resource_posts as $post) :
                    setup_postdata($post);
                ?>
                    <div class="col-md-3 col-6">
                        <a href="<?php the_permalink(); ?>">
                            <div class="service-box">
                                <?php $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full', '_wp_attachment_image_alt', true); ?>
                                <div class="service-image">
                                    <img src="<?php echo $img; ?>" width="100%">
                                </div>
                                <div class="service-text-icon">
                                    <div class="service-icon">
                                        <img src="<?php the_field('icon'); ?>" class="img-fluid">
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-right.png"></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
<!-- Service Section End Here -->
<!-- Story Section Start Here -->
<section class="cmc-story-section">
    <div class="cmc-story-img d-none d-md-block">
        <img src="<?php the_field('story_background'); ?>" width="100%">
    </div>
    <div class="cmc-story-img d-block d-md-none">
        <img src="<?php the_field('story_background_mobile'); ?>" width="100%">
    </div>
    <div class="container">
        <div class="row cmc-story-row">
            <div class="col-md-6">
                <div class="cmc-story-text">
                    <h2><?php the_field('story_heading'); ?></h2>
                    <?php the_field('story_content'); ?>
                    <a class="blue-btn-hover" href="<?php the_field('story_button_link'); ?>"><?php the_field('story_button_label'); ?></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 cmc-icon-column">
                <div class="row cmc-icon-row">
                    <?php
                    // Check rows existexists.
                    if (have_rows('story_features')) :
                        // Loop through rows.
                        while (have_rows('story_features')) : the_row();
                    ?>
                            <div class="col-4 col-md-4">
                                <div class="cmc-icon-box">
                                    <img src="<?php the_Sub_field('icon'); ?>">
                                    <h2><?php the_Sub_field('heading'); ?></h2>
                                </div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Story Section End Here -->
<!-- CTA Start Here -->
<section class="apply-now-section">
    <div class="container">
        <div class="apply-now-image-text">
            <div class="apply-now-img d-none d-md-block">
                <img src="<?php the_field('cta_background'); ?>" width="100%">
            </div>
            <div class="apply-now-img d-block d-md-none">
                <img src="<?php the_field('cta_background_mobile'); ?>" width="100%">
            </div>
            <div class="apply-now-text">
                <h2><?php the_field('cta_heading'); ?></h2>
                <?php the_field('cta_content'); ?>
                <a class="blue-btn-hover" href="<?php the_field('cta_button_link'); ?>"><?php the_field('cta_button_label'); ?></a>
            </div>
        </div>
    </div>
</section>
<!-- CTA End Here -->
<!-- News Section Start Here -->
<section class="news-events-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="news-events-head">
                    <h2><?php the_field('news_heading'); ?></h2>
                </div>
                <?php
                $args = array(
                    'numberposts' => 3,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                );
                $resource_posts = get_posts($args);
                if ($resource_posts) :
                ?>
                    <div class="list-news-events">
                        <?php
                        foreach ($resource_posts as $post) :
                            setup_postdata($post);
                        ?>
                            <div class="inner-list">
                                <a href="<?php the_field('third_party_link'); ?>" target="_blank">
                                    <picture>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news-icon.png">
                                    </picture>
                                    <div class="news-events-text">
                                        <span><?php echo get_the_date('d-m-Y'); ?></span>
                                        <h2><?php the_title(); ?></h2>
                                        <span>Read</span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                        <div class="readall-btn-news">
                            <a class="red-btn-hover" href="<?php the_field('news_button_link'); ?>">
                                <?php the_field('news_button_label'); ?>
                            </a>
                        </div>
                    </div>
                <?php
                endif;
                ?>
            </div>
            <div class="col-md-6 explore-events-mobile">
                <div class="news-events-head">
                    <h2><?php the_field('events_heading'); ?></h2>
                </div>
                <?php
                $args = array(
                    'numberposts' => 3,
                    'post_type' => 'events',
                    'post_status' => 'publish',
                );
                $resource_posts = get_posts($args);
                if ($resource_posts) :
                ?>
                    <div class="list-news-events">
                        <?php
                        foreach ($resource_posts as $post) :
                            setup_postdata($post);
                        ?>
                            <div class="inner-list">
                                <a href="<?php the_field('third_party_link'); ?>" class="home-events-img" target="_blank">
                                    <picture>
                                        <img src="<?php the_field('events_home_page_image_icon'); ?>" class="img-fluid">
                                    </picture>
                                    <div class="news-events-text events-text">
                                        <span>Events</span>
                                        <h2><?php the_title(); ?></h2>
                                        <span>Read</span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                        <div class="readall-btn-events">
                            <a class="blue-btn-hover" href="<?php the_field('events_button_link'); ?>"><?php the_field('events_button_label'); ?></a>
                        </div>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- News Section End Here -->
<!-- Notable Alumni Section start Here -->
<section class="three-box-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="notable">
                    <h2><?php the_field('notable_alumni_heading'); ?></h2>
                    <div class="carousel-inner notable-alumni-slider owl-carousel owl-theme" >
                        <?php
                        // Check rows existexists.
                        if (have_rows('notable_alumni_slider')) :
                            // Loop through rows.
                            while (have_rows('notable_alumni_slider')) : the_row();
                        ?>
                                <div class="item">
                                    <picture>
                                        <img src="<?php the_sub_field('notable_alumni_image'); ?>" class="d-block w-100" alt="...">
                                    </picture>
                                    <div class="notable-carousel-caption d-none d-md-block">
                                        <div class="notable-name">
                                            <h5><?php the_sub_field('heading'); ?><span><?php the_sub_field('designation'); ?></span></h5>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            // End loop.
                            endwhile;
                        // No value.
                        else :
                        // Do something...
                        endif;
                        ?>
                    </div>
                    <div class="view-all-text">
                        <a href="<?php the_field('notable_alumni_button_link'); ?>"><?php the_field('notable_alumni_button_label'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="admissions">
                    <h2><?php the_field('admissions_heading'); ?></h2>
                    <img src="<?php the_field('admissions_image'); ?>" width="100%">
                    <div class="online-admission">
                        <?php the_field('admissions_content'); ?>
                        <a class="blue-btn-hover" href="<?php the_field('admissions_button_link'); ?>" target="_blank"><?php the_field('admissions_button_label'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="give-to-cmc">
                    <div class="give-to-cmc-text">
                        <h2><?php the_field('give_to_cmc_heading'); ?></h2>
                        <?php the_field('give_to_cmc_content'); ?>
                        <a class="blue-btn-hover" href="<?php the_field('give_to_cmc_button_link'); ?>" target="_blank">
                            <?php the_field('give_to_cmc_button_label'); ?>
                        </a>
                    </div>
                    <picture>
                        <img src="<?php the_field('give_to_cmc_image'); ?>" width="100%">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notable Alumni Section End Here -->
<!-- Our Accolades Section Start Here -->
<section class="our-accolades-section">
    <div class="container-fluid">
        <div class="main-headings">
            <h2><?php the_field('our_accolades_heading'); ?></h2>
        </div>
        <div class="our-accolades-slider owl-carousel owl-theme" id="accolades">
            <?php
            // Check rows existexists.
            if (have_rows('our_accolades_slider')) :
                // Loop through rows.
                while (have_rows('our_accolades_slider')) : the_row();
            ?>
                    <div class="item">
                        <a href="<?php the_sub_field('our_accolades_link'); ?>" target="_blank">
                            <div class="accolades-slide">
                                <picture>
                                    <img src="<?php the_sub_field('our_accolades_image'); ?>" class="img-fluid" alt="">
                                </picture>
                            </div>
                        </a>
                    </div>
            <?php
                // End loop.
                endwhile;
            // No value.
            else :
            // Do something...
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Our Accolades Section End Here -->
<?php
get_footer();
?>


 <script>
    $(document).ready(function(){
        $(".notable-alumni-slider").owlCarousel({
            loop: true,
            nav:true,
            dots:true,
            autoplay: true, // Enable auto-play
	    autoplayTimeout: 3000, // Set auto-play timeout in milliseconds
	    margin : 30,
            responsiveClass: true,
            responsive: {
                                0: {
                                  items: 1,
                                  margin:0,
                                },
                                600: {
                                  items: 2,
                                  margin:0,
                                },
                                1000: {
                                  items: 4,
                                },
            },
            // Add more options as needed
        });
    });
</script>
