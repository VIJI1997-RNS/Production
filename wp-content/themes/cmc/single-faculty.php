<?php
get_header(); ?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
    <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="card text-bg-dark rounded-0">
                    <img src="<?php echo get_field(
                                    "faculty_banner_image"
                                ); ?>" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php echo get_field(
                                                                                                        "faculty_banner_alt"
                                                                                                    ); ?>">
                    <img src="<?php echo get_field(
                                    "faculty_banner_image_mobile"
                                ); ?>" class="card-img img-fluid rounded-0 d-block d-md-none" alt="<?php echo get_field(
                                                                                                        "faculty_banner_alt"
                                                                                                    ); ?>">
                    <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                        <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                            <h1 class="card-title ms-md-5"><?php echo get_field(
                                                                "faculty_banner_heading"
                                                            ); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Banner Section End Here -->
<!-- Breadcrumb Section Start Here -->
<?php get_template_part("templates-part/breadcrumb"); ?>
<!-- Breadcrumb Section End Here -->
<section class="faculty-inner-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-4">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-md-3">
                <img src="<?php the_field('post_image'); ?>" class="img-fluid" alt="<?php the_field('post_image_alt'); ?>" />
            </div>
            <div class="col-md-8 ms-md-3">
                <div class="main-headings text-start">
                    <h2><?php the_field('post_heading'); ?></h2>
                </div>
                <p><?php the_field('post_sub_heading'); ?></p>
                <?php
                // Check rows existexists.
                if (have_rows('post_contact_info')) :
                    // Loop through rows.
                    while (have_rows('post_contact_info')) : the_row();
                        // Load sub field value.
                ?>
                        <div class="post-info">
                            <ul class="list-unstyled">
                                <li>
                                    <span>
                                        <?php the_sub_field('heading'); ?>
                                    </span>
                                    <?php the_sub_field('content'); ?>
                                </li>
                            </ul>
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
            <div class="col-12">
                <div class="post-content py-3 py-md-5">
                    <?php the_field('post_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faculty-slider mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="education-box">
                    <h2><?php the_field('education_slider_heading') ?></h2>
                    <div class="education-slider owl-carousel owl-theme position-relative">
                        <?php
                        // Check rows existexists.
                        if (have_rows('education_slider')) :
                            // Loop through rows.
                            while (have_rows('education_slider')) : the_row();
                        ?>
                                <div class="education-slider-item item">
                                    <div class="row g-md-0">
                                        <div class="col-md-2">
                                            <img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="<?php the_sub_field('alt'); ?>" />
                                        </div>
                                        <div class="col-md-10">
                                            <?php
                                            // Check rows existexists.
                                            if (have_rows('education_details')) :
                                                // Loop through rows.
                                                while (have_rows('education_details')) : the_row();
                                            ?>
                                                    <div class="education-details">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <span>
                                                                    <?php the_sub_field('heading'); ?>
                                                                </span>
                                                                <?php the_sub_field('sub_heading'); ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            <?php
                                                // End loop.
                                                endwhile;
                                            // No value.
                                            else :
                                            // Do something...
                                            endif;
                                            ?>
                                            <hr>
                                            <div class="education-content">
                                                <?php the_sub_field('content'); ?>
                                            </div>
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
            <div class="col-md-6">
                <div class="education-box">
                    <h2><?php the_field('research_slider_heading') ?></h2>
                    <div class="education-slider owl-carousel owl-theme position-relative">
                        <?php
                        // Check rows existexists.
                        if (have_rows('research_slider')) :
                            // Loop through rows.
                            while (have_rows('research_slider')) : the_row();
                        ?>
                                <div class="education-slider-item item">
                                    <div class="row g-md-0">
                                        <div class="col-md-2">
                                            <img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="<?php the_sub_field('alt'); ?>" />
                                        </div>
                                        <div class="col-md-10">
                                            <?php
                                            // Check rows existexists.
                                            if (have_rows('research__details')) :
                                                // Loop through rows.
                                                while (have_rows('research__details')) : the_row();
                                            ?>
                                                    <div class="education-details">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <span>
                                                                    <?php the_sub_field('heading'); ?>
                                                                </span>
                                                                <?php the_sub_field('sub_heading'); ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            <?php
                                                // End loop.
                                                endwhile;
                                            // No value.
                                            else :
                                            // Do something...
                                            endif;
                                            ?>
                                            <hr>
                                            <div class="education-content">
                                                <?php the_sub_field('content'); ?>
                                            </div>
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
        </div>
    </div>
</section>
<section class="publication" style="background: url('<?php the_field('publications_background'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h2><?php the_field('publications_heading'); ?></h2>
            </div>
        </div>
        <div class="row g-4 publication-slider owl-carousel owl-theme">
            <?php
            // Check rows existexists.
            if (have_rows('publications_box')) :
                // Loop through rows.
                while (have_rows('publications_box')) : the_row();
            ?>
                    <div class="col-12 item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="<?php the_sub_field('image'); ?>" class="img-fluid">
                            </div>
                            <div class="col-md-10">
                                <h3><?php the_sub_field('heading'); ?></h3>
                            </div>
                            <hr>
                            <?php the_sub_field('content'); ?>
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
</section>
<section class="awards-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 main-headings text-start ">
                <h2><?php the_field('awards_heading'); ?></h2>
            </div>
            <?php
            // Check rows existexists.
            if (have_rows('awards')) :
                // Loop through rows.
                while (have_rows('awards')) : the_row();
            ?>
                    <div class="col-md-6 award-box">
                        <div class="row g-0">
                            <div class="col-md-2 p-0">
                                <picture>
                                    <img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="">
                                </picture>
                            </div>
                            <div class="col-md-10">
                                <h5><?php the_sub_field('heading'); ?></h5>
                                <Span><?php the_sub_field('year'); ?></Span>
                                <?php the_sub_field('content'); ?>
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
</section>
<?php get_footer();
?>