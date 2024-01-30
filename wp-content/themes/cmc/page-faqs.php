<?php
get_header();
?>
<!-- Breadcrumb Section Start Here -->
<?php
get_template_part('templates-part/breadcrumb');
?>
<style type="text/css">
  .accordion-button::after {
    background-image: url("https://cmc.tonicww.in/wp-content/uploads/2023/03/plus-icon.png");
    transform: scale(.7) !important;
  }
  .accordion-button:not(.collapsed)::after {
    background-image: url("https://cmc.tonicww.in/wp-content/uploads/2023/03/minus-icon.png");
  }
  .faq-section li strong {
    font-size: 1.2rem;
    display: block;
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

.faq-section li br {
    display: none;
}

.faq-section li {
    margin-bottom: 1.6rem;
    line-height: 1.5;
    font-size: 1rem;
}

.faq-section li::marker {
    font-size: 1.4rem;
    font-weight: 700;
}
</style>
<section class="sitemap-section faq-section">
  <div class="container">
    <div class="text-start main-headings">
      <h2><?php the_field('faq_heading'); ?></h2>
      <p><?php the_field('faq_content'); ?></p>
    </div>
    <div class="accordion faqs-acord" id="myAccordion">
      <?php if (have_rows('faq')) : $counter = 1; ?>
        <?php while (have_rows('faq')) : the_row(); ?>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo get_row_index(); ?>"><?php the_sub_field('heading'); ?></button>
            </h2>
            <div id="collapse-<?php echo get_row_index(); ?>" class="accordion-collapse collapse<?php if ($counter == 1) { echo ' show'; } ?>" data-bs-parent="#myAccordion">
              <div class="card-body">
                <?php the_sub_field('content'); ?>
                <!-- <div class="read-more">
                  <a href="<?php the_sub_field('read_more_button_link'); ?>"><?php the_sub_field('read_more_button_label'); ?></a>
                </div> -->
              </div>
            </div>
          </div>
        <?php $counter++; endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>