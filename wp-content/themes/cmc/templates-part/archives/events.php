<section class="news-sec pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 news-content events-content">
                <div class="row">
                    <div class="col-md-5">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
                            <?php
                            /**
                             * Get Categories list with sub category
                             */
                            $terms = get_terms(array(
                                'taxonomy' => 'events-tag',
                                'orderby' => 'ID',
                                'hide_empty' => false
                            ));
                            $i = 0;
                            foreach ($terms as $term) {
                            ?>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="pills-<?php echo $term->slug; ?>" <?php echo $i == 0 ? 'aria-selected="true"' : 'aria-selected="false"'; ?> <?php echo $i == 0 ? 'class="nav-link active"' : 'class="nav-link"'; ?> data-bs-toggle="pill" data-bs-target="#pills-<?php echo $term->slug; ?>" id="pills-<?php echo $term->slug; ?>-tab" role="tab" type="button"><?php if (get_field('category_image', 'term_' . $term->term_id) != '') : ?>
                                            <?php endif; ?><?php echo $term->name; ?>
                                    </button>
                                </li>
                            <?php
                                if ($i === 0)
                                    $i++;
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-end g-3">
                            <div class="form-group col-6 col-md-4">
                                <select id="category-filter" class="form-select" aria-label="Default select example" onchange="getSelectedValue()">
                                    <option value="">Select Category</option>
                                    <?php
                                    $proyecto_cat = get_terms(array(
                                        'taxonomy' => 'events-category',
                                        'hide_empty' => false,
                                        'orderby'   => 'name',
                                        'order'    => 'DESC'
                                    ));
                                    foreach ($proyecto_cat as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value->slug; ?>"><?php echo $value->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <select id="year-filter" class="form-select" aria-label="Default select example" >
                                    <option selected>Select Year</option>
                                    <?php
                                    function get_years()
                                    {
                                        $years = range(date('Y'), date('Y') - 10);
                                        return $years;
                                    }
                                    $years = get_years();
                                    foreach ($years as $year) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <select id="month-filter" class="form-select" aria-label="Default select example">
                                    <option selected>Select Month</option>
                                    <?php wp_get_archives(array(
                                        'type' => 'monthly',
                                        'format' => 'option'
                                    )); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <?php
                    $j = 0;
                    foreach ($terms as $term_1) {
                    ?>
                        <div aria-labelledby="pills-<?php echo $term_1->slug; ?>-tab" <?php echo $j == 0 ? 'class="tab-pane fade show active hide-content"' : 'class="tab-pane fade"'; ?> id="pills-<?php echo $term_1->slug; ?>" role="tabpanel">
                            <?php
                            $args = array(
                                'posts_per_page'       => -1,
                                'post_type' => 'events', // or 'post', 'page'
                                'orderby' => 'date', // or 'date', 'rand'
                                'order' => 'DESC', // or 'DESC'
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'events-tag',
                                        'field' => 'term_id',
                                        'terms' => $term_1->term_id,
                                        'orderby' => 'date', // change the order by namechange the order to ascending
                                    )
                                )
                            );
                            $testimonials = new WP_Query($args);
                            ?>
                            <div class="col-12">
                                <h3><?php echo $term_1->name; ?> <span>Events</span></h3>
                            </div>
                            <!-- All news -->
                            <div class="row g-5 list-news-events" id="filter-section">
                                <?php
                                if ($testimonials->have_posts()) :
                                    while ($testimonials->have_posts()) :
                                        $testimonials->the_post();
                                ?>
                                        <div class="col-md-4 filter-item" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                            <div class="inner-list">
                                                <a href="<?php the_field('third_party_link'); ?>">
                                                    <picture>
                                                        <?php $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full', '_wp_attachment_image_alt', true); ?>
                                                        <img src="<?php echo $img; ?>">
                                                    </picture>
                                                    <div class="news-events-text events-text">
                                                        <?php
                                                        $taxonomy = 'events-category';
                                                        $terms = get_the_terms($post->ID, $taxonomy);
                                                        if ($terms && !is_wp_error($terms)) :
                                                            foreach ($terms as $term) {
                                                                echo '<a class="event-cat" href="' . get_term_link($term->slug, $taxonomy) . '">' . $term->name . '</a>';
                                                            }
                                                        endif;
                                                        ?>
                                                        <h2><?php the_title(); ?></h2>
                                                        <span class="text-decoration-underline">
                                                            <a href="<?php the_field('third_party_link'); ?>">
                                                                Discover
                                                            </a>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                                <div class="text-center">
                                    <button id="show-more" class="btn btn btn-outline-primary">Show More </button>
                                    <button id="show-less" style="display: none;" class="btn btn btn-outline-primary"> Show Less </button>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($j === 0)
                            $j++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function getSelectedValue() {
      //arg2 = typeof arg2 !== 'undefined' ? arg2 : 'defaultArg2';
      var selectElement = document.getElementById("category-filter");
      var selectedValue = selectElement.value;
      var termArray = <?php echo json_encode($terms); ?>;
      console.log(selectedValue);
      for (let i = 0; i < termArray.length; i++) {
	      console.log(termArray[i].slug);
		if(selectedValue === termArray[i].slug){
      			var myDiv = document.getElementById("pills-".concat(selectedValue));
			myDiv.className = "tab-pane fade show active hide-content";
	      }else{
      			var myDiv = document.getElementById("pills-".concat(termArray[i].slug));
			myDiv.className = "tab-pane fade";
	      }
} 
}
</script>
