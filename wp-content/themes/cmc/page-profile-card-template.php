<?php
/*
Template Name: Profile Card Template
*/
get_header();
?>
<style>
    .border-right:before{
        content:none;
    }
</style>
<section class="py-5 profile-card-sec">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <?php if (have_rows('profile_card')) :
                while (have_rows('profile_card')) : the_row(); ?>
                    <?php if (get_sub_field('show_modal')) : ?>
                        <div class="col-md-3">
                            <div class="card h-100" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo get_row_index(); ?>">
                                <picture>
                                    <img src="<?php the_sub_field('image'); ?>" class="img-fluid card-img" alt="<?php the_sub_field('heading'); ?>">
                                </picture>
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php the_sub_field('heading'); ?></h5>
                                    <p class="card-text"><?php the_sub_field('designation'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <picture>
                                    <img src="<?php the_sub_field('image'); ?>" class="img-fluid card-img" alt="<?php the_sub_field('heading'); ?>">
                                </picture>
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php the_sub_field('heading'); ?></h5>
                                    <p class="card-text"><?php the_sub_field('designation'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php if (have_rows('profile_card')) :
    while (have_rows('profile_card')) : the_row(); ?>
        <?php if (get_sub_field('show_modal')) : ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo get_row_index(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-md-4">
                            <?php the_sub_field('popup_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
<?php endwhile;
endif; ?>
<?php if (have_rows('contact_info')) : ?>
    <!-- Contact Information Section Start Here -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-headings">
                        <h2><?php the_field('contact_info_heading'); ?></h2>
                    </div>
                    <div class="row g-5">
                        <?php
                        // Loop through rows.
                        while (have_rows('contact_info')) : the_row();
                        ?>
                            <div class="col-md-4 position-relative">
                                <div class="border-right">
                                    <span><?php echo get_sub_field('heading'); ?></span>
                                    <?php echo get_sub_field('content'); ?>
                                </div>
                            </div>
                        <?php
                        // End loop.
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Information Section End Here -->
<?php endif; ?>
<?php
get_footer();
?>
<script>
    // Wait for the document to finish loading
    jQuery(document).ready(function($) {
        // Find all card elements
        $('.card[data-show-modal="true"]').each(function() {
            // Get the modal ID
            var modalId = $(this).data('bs-target');
            // Show the modal
            $(modalId).modal('show');
        });
        // When a card element is clicked
        $('.card[data-show-modal="true"]').click(function() {
            // Get the modal ID
            var modalId = $(this).data('bs-target');
            // Show the modal
            $(modalId).modal('show');
        });
    });
</script>