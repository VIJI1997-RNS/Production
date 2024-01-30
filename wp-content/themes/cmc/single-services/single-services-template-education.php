<?php
/*
Template Name: Education Template
Template Post Type: services
*/
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
</section>
<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-12 main-headings">
                <h2><?php the_field('course_heading'); ?></h2>
            </div>
            <div class="col-12 owl-carousel courses-slider owl-theme">
                <?php
                // Check rows exist.
                if (have_rows('courses')) :
                    // Loop through rows.
                    while (have_rows('courses')) : the_row();
                        // Get the value of the "Open link in new tab" field for this course.
                        $open_in_new_tab = get_sub_field('open_link_in_new_tab');
                ?>
                        <div class="item card h-100 card-body">
                                    <a href="<?php echo get_sub_field('link'); ?>" <?php if ($open_in_new_tab) {
                                                                                        echo 'target="_blank"';
                                                                                    } ?>>
                                        <img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid" alt="<?php echo get_sub_field('icon_alt'); ?>">
                                	  <h5 class="card-title"><?php echo get_sub_field('heading'); ?></h5>
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
            <div class="col-12 courses-link">
                <ul class="d-flex justify-content-between w-50 align-center mt-4">
                    <?php
                    // Check rows exist.
                    if (have_rows('courses_links')) :
                        // Loop through rows.
                        while (have_rows('courses_links')) : the_row();
                            // Get the value of the "Open link in new tab" field for this link.
                            $open_in_new_tab = get_sub_field('open_link_in_new_tab');
                    ?>
                            <li>
                                <a href="<?php echo get_sub_field('link'); ?>" <?php if ($open_in_new_tab) {
                                                                                    echo 'target="_blank"';
                                                                                } ?>>
                                    <?php echo get_sub_field('heading'); ?>
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
<!-- Courses Section End Here -->
<!-- Elective Section Start Here -->
<section class="elective">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-12">
                    <div class="main-headings text-start">
                        <h2><?php the_field('elective_heading'); ?></h2>
                    </div>
                    <div class="elective-list">
                        <ul>
                            <?php
                            // Check rows existexists.
                            if (have_rows('elective')) :
                                // Loop through rows.
                                while (have_rows('elective')) : the_row();
                            ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none">
                                            <?php echo get_sub_field('heading'); ?>
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
            <div class="col-md-6">
                <div class="col-12 guide-wrapper">
                    <h2><?php the_field('guide_heading'); ?></h2>
                    <div class="elective-list">
                        <ul>
                            <?php
                            // Check rows existexists.
                            if (have_rows('guide')) :
                                // Loop through rows.
                                while (have_rows('guide')) : the_row();
                            ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none">
                                            <?php echo get_sub_field('heading'); ?>
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
        </div>
    </div>
</section>
<!-- Elective Section End Here -->
<!-- Contact Information Section Start Here -->
<section class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-headings">
                    <h2><?php the_field('contact_info_heading'); ?></h2>
                </div>
                <div class="row g-5">
                    <?php
                    // Check rows existexists.
                    if (have_rows('contact_info')) :
                        // Loop through rows.
                        while (have_rows('contact_info')) : the_row();
                    ?>
                            <div class="col-md-4 position-relative">
                                <div class="border-right">
                                    <span><?php echo get_sub_field('heading'); ?></span>
                                    <?php echo get_sub_field('content'); ?>
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
<!-- Contact Information Section End Here -->
<?php
get_footer();
?>
 <script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 3,
	    loop: true,
            nav:true,
            navText: [
              '<i class="fas fa-arrow-left"></i>',
              '<i class="fas fa-arrow-right"></i>',
            ],
            autoplay: true, // Enable auto-play
            autoplayTimeout: 3000, // Set auto-play timeout in milliseconds
	    margin: 30,
	    responsiveClass: true,
	    responsive: {
				0: {
				  items: 1,
				  margin: 0,
				},
				600: {
				  items: 1,
				  margin: 0,
				},
				1000: {
				  items: 4,
				},
	    },
            // Add more options as needed
        });
    });
</script>
