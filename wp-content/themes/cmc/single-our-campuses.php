<?php
get_header();
?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
    <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="card text-bg-dark rounded-0">
                    <img src="<?php the_field('our_campuses_banner_image'); ?>" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php the_field('banner_alt'); ?>">
                    <img src="<?php the_field('our_campuses_banner_image_mobile'); ?>" class="card-img img-fluid rounded-0 d-block d-md-none" alt="<?php the_field('our_campuses_banner_alt'); ?>">
                    <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                        <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                            <h1 class="card-title ms-md-5"><?php the_field('our_campuses_banner_heading'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Banner Section End Here -->
<!-- Breadcrumb Section Start Here -->
<?php
get_template_part('templates-part/breadcrumb');
?>
<!-- Breadcrumb Section End Here -->
<section class="our-campuses-inner">
    <div class="container">
        <div class="row">
            <div class="col-12 campus-content">
                <?php the_field('campus_content'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Courses Section Start Here -->
<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-12 main-headings">
                <h2><?php the_field('facilities_heading'); ?></h2>
            </div>
            <div class="col-12 courses-slider  owl-carousel owl-theme" id="facilities-slider">
                <?php
                // Check rows existexists.
                if (have_rows('facilities')) :
                    // Loop through rows.
                    while (have_rows('facilities')) : the_row();
                ?>
                        <div class="item">
                            <div class="card h-100">
                                <div class="card-body">
                                    <a href="<?php echo get_sub_field('link'); ?>">
                                        <img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid" alt="<?php echo get_sub_field('icon_alt'); ?>">
                                        <h5 class="card-title"><?php echo get_sub_field('heading'); ?></h5>
                                    </a>
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
        </div>
    </div>
</section>
<!-- Courses Section End Here -->
<!-- Our Story Section Start Here -->
<section class="our-story py-md-5 pt-5 pb-3">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-12 main-headings mb-4">
                <h2><?php the_field('our_campus_experience_heading'); ?></h2>
            </div>
            <?php
            // Check rows existexists.
            if (have_rows('our_campus_experience')) :
                // Loop through rows.
                while (have_rows('our_campus_experience')) : the_row();
            ?>
                    <div class="col-md-5 position-relative pt-md-0 mt-md-0 mb-4 mb-md-0">
                        <a href="<?php echo get_Sub_field('video_link'); ?>" data-fancybox class="fancy-box">
                            <img src="<?php echo get_Sub_field('image'); ?>" class="img-fluid" alt="<?php echo get_Sub_field('image_alt'); ?>">
                            <div class="play-btn">
                                <img src="<?php echo get_Sub_field('video_icon'); ?>" class="img-fluid" alt="<?php echo get_Sub_field('video_icon_alt'); ?>">
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
<!-- Our Story Section End Here -->
<section class="our-direction py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 main-headings">
                <h2><?php the_field('direction_heading'); ?></h2>
            </div>
            <div class="col-12">
            <?php the_field( 'direction_map' ); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>