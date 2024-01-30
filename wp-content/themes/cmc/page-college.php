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
<div class="grey-bg">
   <?php
   get_template_part('templates-part/breadcrumb');
   ?>
   <?php
   //get_template_part('templates-part/archives/post');
   ?>
   <section class="medical-services-section">
      <div class="container">
         <div class="row text-start main-headings">
            <h2><?php the_field('medical_services_heading'); ?></h2>
            <?php the_field('medical_services_content'); ?>
         </div>
      </div>
   </section>
</div>
<section class="facilities-section">
   <div class="container facilities-boxes">
      <div class="text-start main-headings">
         <h2><?php the_field('facilities_&_services_heading'); ?></h2>
      </div>
      <?php if (have_rows('facilities_&_services')) : ?>
         <?php while (have_rows('facilities_&_services')) : the_row(); ?>
            <div class="facilities-box">
               <a href="#">
                  <img src="<?php the_sub_field('icon'); ?>" alt="	<?php the_sub_field('heading'); ?>">
                  <h2><?php the_sub_field('heading'); ?></h2>
               </a>
            </div>
         <?php endwhile; ?>
      <?php else : ?>
         <?php // No rows found 
         ?>
      <?php endif; ?>
   </div>
</section>
<?php get_footer(); ?>