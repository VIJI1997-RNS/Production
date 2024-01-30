<?php get_header(); ?>
<section class="search-result-section">
  <div class="container">
    <?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    ?>
    <div class="result-count">
      <p>Result 1-<?php echo min($wp_query->post_count, get_query_var('posts_per_page')); ?> of <?php echo $total_results; ?></p>
    </div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="content search-box-result">
          <a href="<?php the_permalink(); ?>" class="text-decoration-none">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <div class="date-time">
              <p><?php the_time('j M, Y, g:i a'); ?></p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <a href="#" id="loadMore" class="loadmore btn btn-lg main-btn">Load More</a>
    <?php else : ?>
      <p>No search results found.</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".content").slice(0, 4).show();
    $("#loadMore").on("click", function(e) {
      e.preventDefault();
      $(".content:hidden").slice(0, 4).slideDown();
      if ($(".content:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
      }
    });
  });
</script>