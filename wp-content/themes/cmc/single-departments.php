<?php
get_header(); ?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
    <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="card text-bg-dark rounded-0">
                    <img src="<?php echo get_field(
                                    "departments_banner_image"
                                ); ?>" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php echo get_field(
                                                                                                        "departments_banner_alt"
                                                                                                    ); ?>">
                    <img src="<?php echo get_field(
                                    "departments_banner_image_mobile"
                                ); ?>" class="card-img img-fluid rounded-0 d-block d-md-none" alt="<?php echo get_field(
                                                                                                        "departments_banner_alt"
                                                                                                    ); ?>">
                    <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                        <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                            <h1 class="card-title ms-md-5"><?php echo get_field(
                                                                "departments_banner_heading"
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
<section class="departments-inner-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php
                    $i = 0;
                    while (have_rows('tabs')) {
                        the_row();
                        $label = get_sub_field('label');
                    ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $i === 0 ? 'active' : ''; ?>" id="pills-<?php echo sanitize_title($label); ?>-tab" data-bs-toggle="pill" data-bs-target="#tab-<?php echo $i; ?>" type="button" role="tab" aria-controls="tab-<?php echo $i; ?>" aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"><?php echo $label; ?></button>
                        </li>
                    <?php
                        $i++;
                    }
                    ?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <?php
                    $i = 0;
                    while (have_rows('tabs')) {
                        the_row();
                    ?>
                        <div class="tab-pane fade <?php echo $i === 0 ? 'show active' : ''; ?>" id="tab-<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-<?php echo sanitize_title($label); ?>-tab" tabindex="0">
                            <?php
                            // Check if the repeater field exists.
                            if (have_rows('departments_inner_tab_content')) {
                                // Loop through the rows of the repeater field.
                                while (have_rows('departments_inner_tab_content')) {
                                    the_row();
                                    // Check the layout type.
                                    if (get_row_layout() === 'departments_inner_tab_content_one') {
                            ?>
                                        <div class="row  g-4 my-4">
                                            <div class="col-md-6">
                                                <img src="<?php echo esc_url(get_sub_field('image')); ?>" class="img-fluid" alt="" />
                                            </div>
                                            <div class="col-md-6">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <div class="col-12">
                                                <?php the_sub_field('more_content'); ?>
                                            </div>
                                        </div>
                                    <?php
                                    } elseif (get_row_layout() === 'departments_inner_tab_content_two') {
                                    ?>
                                        <ul class="faculty-row">
                                            <?php $post_objects = get_sub_field('select_custom_post_type');
                                            foreach ($post_objects as $post_object) { ?>
                                                <li><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></li>
                                            <?php } ?>
                                        </ul>
                            <?php
                                    }
                                }
                            } else {
                                // No value.
                                // Do something...
                            }
                            ?>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section Start Here -->
<section class="contact-info mt-4 mt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-headings">
                    <h2><?php the_field("contact_info_heading"); ?></h2>
                </div>
                <div class="row g-5">
                    <?php // Check rows existexists.
                    if (have_rows("contact_info")) :
                        // Loop through rows.
                        while (have_rows("contact_info")) :
                            the_row(); ?>
                            <div class="col-md-4 position-relative">
                                <div class="border-right">
                                    <span><?php echo get_sub_field(
                                                "heading"
                                            ); ?></span>
                                    <?php echo get_sub_field("content"); ?>
                                </div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Information Section End Here -->
<?php get_footer();
?>