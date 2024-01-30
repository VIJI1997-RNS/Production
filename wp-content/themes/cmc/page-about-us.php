<?php
get_header();
?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
   <div class="container-fluid p-0 m-0">
      <div class="row g-0">
         <div class="col-12 p-0">
            <div class="card text-bg-dark rounded-0">
               <img src="<?php the_field('about_us_banner_image'); ?>" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php the_field('about_us_banner_alt'); ?>">
               <img src="<?php the_field('about_us__image_mobile'); ?>" class="card-img img-fluid rounded-0 d-block d-md-none" alt="<?php the_field('about_us_banner_alt'); ?>">
               <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                  <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                     <h1 class="card-title ms-md-5"><?php the_field('about_us_banner_heading'); ?></h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<!-- Banner Section End Here -->
<div class="grey-bg">
   <!-- Breadcrumb Section Start Here -->
   <?php
   get_template_part('templates-part/breadcrumb');
   ?>
   <?php
   //get_template_part('templates-part/archives/post');
   ?>
   <section class="medical-services-section">
      <div class="container">
         <div class="row who-we-are-para">
            <div class="col-md-6 text-start main-headings">
               <h2><?php the_field('who_we_are_heading'); ?></h2>
               <?php the_field('who_we_are_content_one'); ?>
            </div>
            <div class="col-md-6">
               <?php the_field('who_we_are_content_two'); ?>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="our-campus-section">
   <div class="container">
      <div class="row g-5">
         <div class="col-md-6 campus-image">
            <img src="<?php the_field('our_campus_image'); ?>" alt="Our Campus" width="100%">
         </div>
         <div class="col-md-6 text-start main-headings who-we-are-para">
            <h2><?php the_field('our_campus_heading'); ?></h2>
            <?php the_field('our_campus_content'); ?>
         </div>
      </div>
   </div>
</section>
<section class="his-vis-section" style="background-image: url('<?php the_field("history_vision_background"); ?>');">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="his-vis-box">
               <h2><?php the_field('history_heading'); ?></h2>
               <div class="his-vis-list elective-list">
                  <?php if (have_rows('history_content')) : ?>
                     <?php while (have_rows('history_content')) : the_row(); ?>
                        <ul>
                           <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('heading'); ?></a></li>
                        </ul>
                     <?php endwhile; ?>
                  <?php else : ?>
                     <?php // No rows found 
                     ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="his-vis-box">
               <h2><?php the_field('vision_heading'); ?></h2>
               <div class="his-vis-list elective-list">
                  <?php if (have_rows('vision_content')) : ?>
                     <?php while (have_rows('vision_content')) : the_row(); ?>
                        <ul>
                           <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('heading'); ?></a></li>
                        </ul>
                     <?php endwhile; ?>
                  <?php else : ?>
                     <?php // No rows found 
                     ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="green-initiatives">
   <div class="container">
      <div class="row g-5">
         <div class="col-md-6 campus-image">
            <img src="<?php the_field('green_initiatives_image'); ?>" alt="Our Campus" width="100%">
         </div>
         <div class="col-md-6 text-start main-headings green-initiatives-para">
            <h2><?php the_field('green_initiatives_heading'); ?></h2>
            <?php the_field('green_initiatives_content'); ?>
            <a href="<?php the_field('green_initiatives_button_link'); ?>" class="btn btn-lg main-btn"><?php the_field('green_initiatives_button_label'); ?></a>
         </div>
      </div>
   </div>
</section>
<section class="three-boxes-section">
   <div class="container">
      <div class="row ">
         <?php if (have_rows('alumni_content_box')) : ?>
            <?php while (have_rows('alumni_content_box')) : the_row(); ?>
               <div class="col-md-4">
                  <div class="text-start main-headings same-height-box">
                     <h2><?php the_sub_field('heading'); ?> </h2>
                     <?php the_sub_field('content'); ?>
                     <?php if (have_rows('button')) : ?>
                        <?php while (have_rows('button')) : the_row(); ?>
                           <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-lg main-btn"> <?php the_sub_field('button_label'); ?>
                           </a>
                        <?php endwhile; ?>
                     <?php else : ?>
                        <?php // No rows found 
                        ?>
                     <?php endif; ?>
                  </div>
               </div>
            <?php endwhile; ?>
         <?php else : ?>
            <?php // No rows found 
            ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php get_footer(); ?>