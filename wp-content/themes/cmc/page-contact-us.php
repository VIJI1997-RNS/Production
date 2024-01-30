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
<?php
//get_template_part('templates-part/archives/post');
?>
<section class="contact-form-section">
   <div class="container">
      <div class="row">
         <div class="col-md-5 contact-details text-start main-headings">
            <h2><?php the_field('contact_us_heading'); ?></h2>
            <?php the_field('contact_us_details'); ?>
         </div>
         <div class="col-md-7 text-start main-headings">
            <div class="text-start main-headings">
               <h2><?php the_field('quick_contact_heading'); ?></h2>
            </div>
            <form method="post" name="dreamjobform" id="dreamjobform">
               <div class="row" >
                  <div class="col-md-6">
                     <div class="footer-forms">
                        <label>First Name*</label>
                        <input type="text" name="first_name" placeholder="Enter" id="first_name">
                        <div class="error" id="fname_error">Please enter your first name.</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-forms">
                        <label>Last Name*</label>
                        <input type="text" name="last_name" placeholder="Enter" id="last_name">
                        <div class="error" id="lname_error">Please enter your Last name.</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-forms">
                        <label>Email ID*</label>
                        <input type="text" name="email_id" id="email_id" placeholder="Enter">
                        <div class="error" id="email_error">Please enter email address.</div>
                        <div class="error" id="email_error2">Please enter correct email address.</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-forms">
                        <label>Contact No.*</label>
                        <input type="" name="" value="+ 91" class="value-field">
                        <input type="text" name="phone_number" placeholder="9819023549" id="phone_number" class="contactnumber">
                        <div class="error" id="number_error">Please enter correct mobile number.</div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="footer-forms">
                        <label>Comments</label>
                        <textarea rows="4" placeholder="Enter Comments" name="message_cmc" id="message_cmc"></textarea>
                        <div class="error" id="message_error">Please enter message.</div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="gcaptcha footer-forms">
                        <div class="g-recaptcha" data-sitekey="6LciCM0kAAAAAFTcGDyqLdjaISzxsuQp6povVnzO"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="footer-forms-input">
                        <button type="submit" value="submit" class="btn btn-lg main-btn" id="subbtn">Submit </button>
                        	<span class="pleasewait"><img src="<?php echo home_url(); ?>/wp-content/themes/cmc/assets/images/pleasewait.gif" alt=""> Please wait... </span> 
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
<!-- thankyou popup -->
	<div class="thankyou-popup contact-popup" id="thankyou-popup-contact2" style="display: none;">
		<div class="thank-you-box">
			<div class="close-popup">
				<a href="#"><img src="<?php echo home_url(); ?>/wp-content/themes/cmc/assets/images/thank-pop-close.png" alt="closepop.png"></a>
			</div>
			<img src="<?php echo home_url(); ?>/wp-content/themes/cmc/assets/images/thumbs.png" alt="thumbs.png">
			<h5>Thank you for sharing your details! </h5>
			<p>Our team of experts will shortly contact you</p>

			<!--<h5>Please stay on website to read more about us</h5>-->
		<!--	<p>We sincerely appreciate your assistance and we will<br> revert back your enquiry soon</p>-->
			<!--<a href="#">Find More</a>-->
		</div>
	</div>
	<!-- end thankyou popup -->
   <div class="map">
      <?php the_field('contact_us_map'); ?>
   </div>
</section>
<script defer src="https://www.google.com/recaptcha/api.js"></script>
<?php get_footer(); ?>