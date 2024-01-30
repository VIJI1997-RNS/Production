<?php
get_header();
?>

   <!-- Breadcrumb Section Start Here -->
   <?php
   get_template_part('templates-part/breadcrumb');
   ?>
   <?php
//get_template_part('templates-part/archives/post');
   ?>
   <section class="whats-new-section">
      <div class="container">
         <div class="text-start main-headings">
            <h2><?php the_field( 'whats_new_heading' ); ?></h2>
         </div>
         <div class="row">
            <?php if ( have_rows( 'whats_new' ) ) : ?>
               <?php while ( have_rows( 'whats_new' ) ) : the_row(); ?>
                     <div class="col-md-4">
                        <div class="whats-new-box">
                           <a href="<?php the_sub_field( 'btn_link' ); ?>">
                              <?php if ( get_sub_field( 'whats_new_icon' ) ) : ?>
                                 <img src="<?php the_sub_field( 'whats_new_icon' ); ?>" />
                              <?php endif ?>
                              <?php the_sub_field( 'whats_new_paragraph' ); ?>
                              <span><?php the_sub_field( 'btn_label' ); ?></span>
                           </a>
                        </div>
                     </div>
               <?php endwhile; ?>
               <?php else : ?>
                  <?php // No rows found ?>
               <?php endif; ?>
         </div>
      </div>
   </section>


   <?php get_footer(); ?>