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
<!-- Breadcrumb Section Start Here -->
<?php
get_template_part('templates-part/breadcrumb');
?>
<!-- Breadcrumb Section End Here -->
<?php
get_template_part('templates-part/archives/post');
?>
<?php
get_footer();
?>