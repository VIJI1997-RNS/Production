<?php
get_header();
?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
   <div class="container-fluid p-0 m-0">
      <div class="row g-0">
         <div class="col-12 p-0">
            <div class="card text-bg-dark rounded-0">
               <img src="<?php the_field('government_orders_banner_image'); ?>" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php the_field('government_orders_banner_alt'); ?>">
               <img src="<?php the_field('government_orders_image_mobile'); ?>" class="card-img img-fluid rounded-0 d-block d-md-none" alt="<?php the_field('government_orders_banner_alt'); ?>">
               <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                  <div class="card-img-overlay text-left d-flex flex-column justify-content-center ms-md-5 ps-md-5">
                     <h1 class="card-title ms-md-5"><?php the_field('page_title'); ?></h1>
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
<?php
//get_template_part('templates-part/archives/post');
?>
<section class="medical-services-section">
   <div class="container">
      <div class="row ">
         <div class="col-md-6 text-start main-headings">
            <h2><?php the_field('government_orders_heading'); ?></h2>
            <?php the_field('government_orders_content'); ?>
         </div>
         <div class="col-md-6">
            <div class="elective-list">
               <ul>
                  <?php if (have_rows('government_orders_listing')) : ?>
                     <?php while (have_rows('government_orders_listing')) : the_row(); ?>
                              <a href="<?php the_sub_field( 'btn_link' ); ?>">
                              <li><?php the_sub_field('heading'); ?></li>
                     <?php endwhile; ?>
                  <?php else : ?>
                     <?php // No rows found 
                     ?>
                  <?php endif; ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<div style="height: 100px;"></div>
<?php get_footer(); ?>
