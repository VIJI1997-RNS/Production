<?php
/*
Template Name: Research Template
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
                        <h1 class="card-title ms-md-5"><?php the_field('banner_heading'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End Here -->
<!-- Research content Section Start Here -->
<section class="research-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_field('research_heading'); ?></h2>
                <div class="research-content-para">
                    <?php the_field('research_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Research content Section End Here -->
<!-- Our Story Section Start Here -->
<section class="our-story">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-12 main-headings">
                <h2><?php the_field('our_story_heading'); ?></h2>
            </div>
            <?php
            // Check rows existexists.
            if (have_rows('our_story')) :
                // Loop through rows.
                while (have_rows('our_story')) : the_row();
            ?>
                    <div class="col-md-5 position-relative pt-md-0 mt-md-0">
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
<!-- About Research Section start Here -->
<section class="about-research">
    <div class="container about-research-bg">
        <div class="row align-items-center g-4 g-md-0">
            <div class="col-md-3">
                <div class="main-headings text-start">
                    <h2><?php the_field('about_research_heading'); ?></h2>
                </div>
                <img src="<?php the_field('about_research_image'); ?>" alt="<?php the_field('about_research_alt_tag'); ?>" class="img-fluid d-none d-md-block" />
                <img src="<?php the_field('about_research_image_mobile'); ?>" alt="<?php the_field('about_research_alt_tag'); ?>" class="img-fluid d-block d-md-none" />
            </div>
            <div class="col-md-9 align-self-center">
                <?php the_field('about_research_content'); ?>
            </div>
        </div>
    </div>
</section>
<!-- About Research Section End Here -->
<section>
<div class="container">
<div class="row">
 <div class="col-md-6 mt-md-3 mb-md-5 our-story-wrapper">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="<?php the_field('our_story_cta_image'); ?>" class="img-fluid" alt="<?php the_field('our_story_cta_image_alt'); ?>">
                    </div>
                    <div class="col-md-8">
                        <?php the_field('our_story_cta_heading'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-3 mb-md-5">
                <div class="cta-btn">
                    <?php
                    // Check rows existexists.
                    if (have_rows('our_story_cta')) :
                        // Loop through rows.
                        while (have_rows('our_story_cta')) : the_row();
                    ?>
                            <a href="<?php echo get_sub_field('link'); ?>" class="red-btn" >
                                <?php echo get_sub_field('heading'); ?>
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
</div>
</section>
<?php
get_footer();
?>