<?php
get_header();
?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
    <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="card text-bg-dark rounded-0">
                    <img src="<?php the_field('banner_image'); ?>" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php the_field('banner_alt'); ?>">
                    <img src="<?php the_field('banner_image_mobile'); ?>" class="card-img img-fluid rounded-0 d-block d-md-none" alt="<?php the_field('banner_alt'); ?>">
                    <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                        <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                            <h1 class="card-title ms-md-5"><?php the_field('banner_heading'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Banner Section End Here -->
<!-- Courses Section Start Here -->
<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-12 main-headings">
                    <h2><?php the_field('course_heading'); ?></h2>
                </div>
                <div class="col-12 courses-slider  owl-carousel owl-theme" id="service-slider">
                    <?php
                    // Check rows existexists.
                    if (have_rows('courses')) :
                        // Loop through rows.
                        while (have_rows('courses')) : the_row();
                    ?>
                            <div class="item">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="<?php the_sub_field('link'); ?>">
                                            <img src="<?php the_sub_field('icon'); ?>" class="img-fluid" alt="<?php the_sub_field('icon_alt'); ?>">
                                            <h5 class="card-title"><?php the_sub_field('heading'); ?></h5>
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
                <div class="col-md-12 courses-link service-link">
                    <ul class="d-flex justify-content-between w-50 align-center mt-4 ps-0">
                        <?php
                        // Check rows existexists.
                        if (have_rows('courses_links')) :
                            // Loop through rows.
                            while (have_rows('courses_links')) : the_row();
                        ?>
                                <li>
                                    <img src="<?php the_sub_field('icon'); ?>" class="img-fluid me-3" alt="icon">
                                    <a href="<?php the_sub_field('link'); ?>">
                                        <?php the_sub_field('heading'); ?>
                                    </a>
                                </li>
                        <?php
                            // End loop.
                            endwhile;
                        // No value.
                        else :
                        // Do something...
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 align-self-center">
                <div class="download-app d-none d-lg-block patient-download-app">
                    <h6><?php the_field('qr_code_heading'); ?></h6>
                    <picture>
                        <img src="<?php the_field('qr_code_image'); ?>" class="img-fluid" alt="<?php the_field('qr_code_alt'); ?>">
                    </picture>
                    <div class="download-btn">
                        <a href="<?php the_field('android_download_button_link'); ?>"> <img src="<?php the_field('android_download_button'); ?>" class="img-fluid" alt="<?php the_field('android_download_button_alt'); ?>"></a>
                        <a href="<?php the_field('ios_download_button_link'); ?>"> <img src="<?php the_field('ios_download_button'); ?>" class="img-fluid" alt="<?php the_field('ios_download_button_alt'); ?>"></a>
                    </div>
                </div>
                <div class="download-app d-block d-lg-none patient-download-app">
                    <h6><?php the_field('qr_code_heading'); ?></h6>
                    <div class="row align-items-center">
                        <div class="col-6 qr-code">
                            <picture>
                                <img src="<?php the_field('qr_code_image'); ?>" class="img-fluid" alt="<?php the_field('qr_code_alt'); ?>">
                            </picture>
                        </div>
                        <div class="col-6">
                            <div class="download-btn">
                                <a href="<?php the_field('android_download_button_link'); ?>"> <img src="<?php the_field('android_download_button'); ?>" class="img-fluid" alt="<?php the_field('android_download_button_alt'); ?>">
                                </a>
                                <a href="<?php the_field('ios_download_button_link'); ?>"> <img src="<?php the_field('ios_download_button'); ?>" class="img-fluid" alt="<?php the_field('ios_download_button_alt'); ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses Section End Here -->
<!-- Quick Information Start Here -->
<section class="quick-information">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php the_field('quick_information_image'); ?>" class="img-fluid" alt="<?php the_field('quick_information_alt'); ?>" />
            </div>
            <div class="col-md-6">
                <div class="main-headings">
                    <h2><?php the_field('quick_information_heading'); ?></h2>
                </div>
                <?php
                // Check rows existexists.
                if (have_rows('quick_information_services')) :
                    // Loop through rows.
                    while (have_rows('quick_information_services')) : the_row();
                ?>
                        <a href="<?php the_sub_field('link'); ?>">
                            <div class="row quick-information-box">
                                <div class="col-6 col-md-8">
                                    <h3><?php the_sub_field('heading'); ?></h3>
                                </div>
                                <div class="col-6 col-md-4">
                                    <img src="<?php the_sub_field('icon'); ?>" class="img-fluid" alt="<?php the_sub_field('alt'); ?>" />
                                </div>
                            </div>
                        </a>
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
<!-- Quick Information Start Here -->
<!-- Feedback Section Start Here -->
<section class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2><?php the_field('feedback_heading'); ?></h2>
                <div class="row">
                    <div class="col-4 col-md-2">
                        <img src="<?php the_field('feedback_icon'); ?>" class="img-fluid" alt="<?php the_field('feedback_icon_alt'); ?>">
                    </div>
                    <div class="col-8 col-md-10">
                        <a href="<?php the_field('ip_feedback_button_link'); ?>" class="btn feedback-btn blue-btn-hover"><?php the_field('ip_feedback_button_label'); ?></a>
                        <a href="<?php the_field('op_feedback_button_link'); ?>" class="btn feedback-btn blue-btn-hover"><?php the_field('op_feedback_button_label'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 contact-us-wrapper">
                <div class="main-headings">
                    <h2><?php the_field('contact_us_heading'); ?></h2>
                </div>
                <div class="row">
                    <div class="col-4 col-md-2">
                        <img src="<?php the_field('contact_us_icon'); ?>" class="img-fluid" alt="<?php the_field('contact_us_icon_alt'); ?>">
                    </div>
                    <?php
                    // Check rows existexists.
                    if (have_rows('contact_us')) :
                        // Loop through rows.
                        while (have_rows('contact_us')) : the_row();
                    ?>
                            <div class="col-8 col-md-5">
                                <?php the_sub_field('contact_us_content'); ?>
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
<!-- Feedback Section End Here -->
<!-- Covid 19 Section Start Here -->
<section class="covid-19">
    <div class="container">
        <div class="row">
            <div class="col-12 main-headings ps-0 text-start">
                <h2><?php the_field('covid_19_heading'); ?></h2>
            </div>
            <div class="col-md-12 courses-link">
                <ul class="covid-ul mt-3 ps-md-2">
                    <?php
                    // Check rows existexists.
                    if (have_rows('covid_19')) :
                        // Loop through rows.
                        while (have_rows('covid_19')) : the_row();
                    ?>
                            <li>
                                <a href="<?php the_sub_field('link'); ?>">
                                    <?php the_sub_field('heading'); ?>
                                </a>
                            </li>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Covid 19 Section End Here -->
<?php
get_footer();
?>
