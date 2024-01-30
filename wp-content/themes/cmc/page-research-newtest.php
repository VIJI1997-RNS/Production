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
<div class="col-12">
<!-- Banner Section End Here -->
<!-- Breadcrumb Section Start Here -->
<?php get_template_part("templates-part/breadcrumb"); ?>
</div>

<!-- Tabs section Start Here-->
 <section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-12 main-headings">
                    <h2><?php the_field('course_heading'); ?></h2>
                </div>
                <div class="col-12" >
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
                <div class="col-md-12" id="service-slider">
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
		<div>

<!-- Tab section Ends here-->
<?php
get_footer();
?>
