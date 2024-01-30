<?php
get_header();
?>
<!-- Banner Section Start Here -->
<section class="inner-banner">
   <div class="container-fluid p-0 m-0">
      <div class="row g-0">
         <div class="col-12 p-0">
            <div class="card text-bg-dark rounded-0">
               <img src="https://cmc.tonicww.in/wp-content/uploads/2023/03/campus-banner.png" class="card-img img-fluid rounded-0 d-none d-md-block" alt="<?php the_field('banner_alt'); ?>">
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
<?php
//get_template_part('templates-part/archives/post');
?>
<section class="work-life-section">
   <div class="container">
      <div class="row g-5">
         <div class="col-md-6 work-life-img">
            <?php if (get_field('work_life_image')) : ?>
               <img src="<?php the_field('work_life_image'); ?>" alt="Work Life" width="100%">
            <?php endif ?>
         </div>
         <div class="col-md-6 text-start main-headings work-life-text">
            <h2><?php the_field('work_life_heading'); ?></h2>
            <?php the_field('work_life_content'); ?>
         </div>
      </div>
   </div>
</section>
<section class="current-openings-section">
   <div class="container">
      <div class="heading-select">
         <div class="text-start main-headings">
            <h2><?php the_field('current_openings_heading'); ?></h2>
         </div>
         <div class="select-box">
            <select class="forms-select">
               <option selected>Department</option>
               <option value="IT">IT</option>
            </select>
         </div>
      </div>
      <div class="opning-acordion">
         <div class="accordion" id="myAccordion">
            <?php if (have_rows('current_openings')) : ?>
               <?php while (have_rows('current_openings')) : the_row(); ?>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="heading<?php the_row_index(); ?>">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?php the_row_index(); ?>">
                           <h3><?php the_sub_field('job_title'); ?></h3>
                           <h5><?php the_sub_field('job_location'); ?></h5>
                        </button>
                     </h2>
                     <div id="collapse<?php the_row_index(); ?>" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                           <h4>Job Description</h4>
                           <?php the_sub_field('job_description'); ?>
                           <a href="#" class="btn btn-lg main-btn">Apply Now</a>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
      <div class="dreamjob">
         <div class="text-start main-headings">
            <h2>Apply for <span>Dream Job</span></h2>
         </div>
         <form name="dreamjobform" id="dreamjobform">
            <div class="row">
               <div class="col-md-4">
                  <div class="footer-forms">
                     <label>First Name*</label>
                     <input type="text" name="first-name" placeholder="Enter" id="first-name">
                     <div class="error" id="fname_error">Please enter your first name.</div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-forms">
                     <label>Last Name*</label>
                     <input type="text" name="last-name" placeholder="Enter" id="last-name">
                     <div class="error" id="lname_error">Please enter your Last name.</div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-forms">
                     <label>Email ID*</label>
                     <input type="text" name="email" id="email" placeholder="Enter">
                     <div class="error" id="email_error">Please enter email address.</div>
                     <div class="error" id="email_error2">Please enter correct email address.</div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-forms">
                     <label>Contact No.*</label>
                     <input type="" name="" value="+ 91" class="value-field">
                     <input type="text" name="number" placeholder="9819023549" id="number" class="contactnumber">
                     <div class="error" id="number_error">Please enter correct mobile number.</div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-forms">
                     <label>Job Role*</label>
                     <select class="forms-select">
                        <option selected>Job Role</option>
                        <option value="Designer">Designer</option>
                     </select>
                     <div class="error" id="job_error">Please Select</div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-forms">
                     <label>Upload your CV here*</label>
                     <input type="file" name="cv" placeholder="Doc/Pdf fromat only" id="last-name">
                     <div class="error" id="lname_error">Please Upload file</div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="footer-forms">
                     <label>Additional Information</label>
                     <textarea rows="4" placeholder="Enter Comments" name="message" id="message"></textarea>
                     <div class="error" id="message_error">Please enter message.</div>
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="gcaptcha footer-forms">
                        <div class="g-recaptcha" data-sitekey="6LciCM0kAAAAAFTcGDyqLdjaISzxsuQp6povVnzO"></div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="footer-forms-input">
                     <button type="submit" value="submit" class="btn btn-lg main-btn" id="subbtn">Submit </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="testimonials">
         <div class="text-start main-headings">
            <h2><?php the_field('testimonials_heading');?></h2>
         </div>
         <div class="owl-carousel owl-theme" id="testimonials-slider">
            <?php if (have_rows('testimonials')) :
               while (have_rows('testimonials')) : the_row();
            ?>
                  <div class="item">
                     <div class="testimonials-slide">
                        <img src="<?php the_sub_field('testimonials_icon'); ?>">
                        <p><?php the_sub_field('testimonials_content'); ?></p>
                        <h3><?php the_sub_field('testimonials_name'); ?></h3>
                        <h4><?php the_sub_field('testimonials_city'); ?></h4>
                     </div>
                  </div>
            <?php endwhile;
            endif; ?>
         </div>
      </div>
   </div>
</section>
<script defer src="https://www.google.com/recaptcha/api.js"></script>
<?php get_footer(); ?>