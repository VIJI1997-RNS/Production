<section class="news-sec pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 news-content">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
                            <?php
                            /**
                             * Get Categories list with sub category
                             */
                            $exclude_categories = get_field('exclude_category'); // assuming the ACF field is a checkbox field and its name is 'exclude_category'
                            if ($exclude_categories) {
                                $terms = get_terms(array(
                                    'taxonomy' => 'category',
                                    'orderby' => 'ID',
                                    'hide_empty' => false,
                                    'exclude' => $exclude_categories
                                ));
                            } else {
                                $terms = get_terms(array(
                                    'taxonomy' => 'category',
                                    'orderby' => 'ID',
                                    'hide_empty' => false
                                ));
                            }
                            $i = 0;
                            foreach ($terms as $term) {
                            ?>
                                <li class="nav-item" role="presentation">
                                    <button  onclick="getClickedValue(this)" aria-controls="pills-<?php echo $term->slug; ?>" <?php echo $i == 0 ? 'aria-selected="true"' : 'aria-selected="false"'; ?> <?php echo $i == 0 ? 'class="cat-class nav-link active"' : 'class="cat-class nav-link"'; ?> data-bs-toggle="pill" data-bs-target="#pills-<?php echo $term->slug; ?>" id="pills-<?php echo $term->slug; ?>-tab" role="tab" type="button"><?php if (get_field('category_image', 'term_' . $term->term_id) != '') : ?>
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
                    <div class="col-md-6">
                        <div class="row justify-content-end g-3">
                            <div class="form-group col-6 col-md-4">
			    <select id="category-filter" class="form-select" aria-label="Default select example" onchange="getSelectedValue()">
                                    <option selected>Select Category</option>
                                    <?php
                                    $proyecto_cat = get_terms(array(
                                        'taxonomy' => 'category',
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
                                <select id="year-filter" class="form-select" aria-label="Default select example" onchange="getSelectedValueYear(this,'year-filter')">
                                    <option value="">Select Year</option>
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
                                <select id="month-filter" class="form-select" aria-label="Default select example" onchange="getSelectedValueYear(this,'month-filter')">
                                    <option value="">Select Month</option>
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
                        <div aria-labelledby="pills-<?php echo $term_1->slug; ?>-tab" <?php echo $j == 0 ? 'class="tab-pane fade show active"' : 'class="tab-pane fade"'; ?> id="pills-<?php echo $term_1->slug; ?>" role="tabpanel">
                            <?php
                            $args = array(
                                'posts_per_page'       => -1,
                                'post_type' => 'post', // or 'post', 'page'
                                'orderby' => 'date', // or 'date', 'rand'
                                'order' => 'DSEC', // or 'DESC'
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'term_id',
					'terms' => $term_1->term_id,
		
                                    )
                                )
                            );
                            $testimonials = new WP_Query($args);
                            ?>
                            <div class="col-12">
                                <h3><?php echo $term_1->name; ?></h3>
                            </div>
                            <!-- All news -->
                            <div class="row g-5 list-news-events" id="filter-section">
                                <?php
                                if ($testimonials->have_posts()) :
                                    while ($testimonials->have_posts()) :
                                        $testimonials->the_post();
                                ?>
                                        <div class="col-md-6 filter-item news-item <?php echo explode(' ',get_the_date())[0]; ?> <?php echo explode(',',get_the_date())[1]; ?>" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                            <div class="inner-list">
                                                <a href="<?php the_field('third_party_link'); ?>" target="_blank">
                                                    <picture>
                                                        <?php $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full', '_wp_attachment_image_alt', true); ?>
                                                        <img src="<?php echo $img; ?>">
                                                    </picture>
						    <div class="news-events-text events-text">
                                                        <span><?php echo get_the_date(); ?></span>
                                                        <h2><?php the_title(); ?></h2>
                                                        <span>Read</span>
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
                                    <button id="show-more-news" class="btn btn btn-outline-primary">Show More </button>
                                    <button id="show-less-news" style="display: none;" class="btn btn btn-outline-primary"> Show Less </button>
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
			myDiv.className = "tab-pane fade show active";
	      }else{
      			var myDiv = document.getElementById("pills-".concat(termArray[i].slug));
			myDiv.className = "tab-pane fade";
	      }
}
}

    
function getClickedValue(clickedButton) {

	var clickedButtonId = clickedButton.id;	
	var clickedButton = document.getElementById("clickedButtonId");
	var termArray = <?php echo json_encode($terms); ?>;
	console.log(clickedButtonId);
	var splitArray = clickedButtonId.split('-');
	console.log(splitArray[1]);
	for (let i = 0; i < termArray.length; i++) {
		var upperPanal = document.getElementById("pills-".concat(termArray[i].slug+"-tab"));
		var lowerPanal =  document.getElementById("pills-".concat(termArray[i].slug));
		if(clickedButtonId === "pills-"+termArray[i].slug+"-tab"){
			upperPanal.className = "nav-link active";
			lowerPanal.className = "tab-pane fade show active";
		}else{
			upperPanal.className = "nav-link";
			lowerPanal.className = "tab-pane fade";
                }
	}
}

function getSelectedValueYear(selectedValue, filterValue) {
	//arg2 = typeof arg2 !== 'undefined' ? arg2 : 'defaultArg2';
      console.log(filterValue);
      var selectElement = document.getElementById(filterValue);
      if(filterValue === 'month-filter'){
	          var selectedOption = selectElement.options[selectElement.selectedIndex];
		  var searchString = selectedOption.textContent.trim();
		  var splitArray = searchString.split(' ');
        	  var month = splitArray[0];
        	  var year = splitArray[1];
      }else{
	      var year = selectElement.value;
	      var month = selectElement.value;
      }
      var elements = document.getElementsByClassName('news-item');
      var elementsArray = Array.from(elements);
      elementsArray.forEach(function(element) {

        if (element.classList.contains(year) && element.classList.contains(month)) {
		element.classList.add("tab-pane");
		element.classList.add("fade");
		element.classList.add("show");
                element.classList.add("active");
	}else
	{
		element.classList.add("tab-pane");
		element.classList.add("fade");
		if (element.classList.contains('active')) {
			element.classList.remove('show');
			element.classList.remove('active');
    		}
	}
      });
}
/*
// Display only the filtered elements
filteredElements.forEach(function(element) {
    document.body.appendChild(element.cloneNode(true));
});

var container = document.createElement('div');

// Display only the filtered elements by appending them to the container
filteredElements.forEach(function(element) {
    container.appendChild(element.cloneNode(true));
});

// Append the container to the document body
document.body.appendChild(container);
 */

      /*
      for (let i = 0; i < termArray.length; i++) {
              if(selectedValue === termArray[i].slug){
                        var myDiv = document.getElementById("pills-".concat(selectedValue));
                        myDiv.className = "tab-pane fade show active";
              }else{
                        var myDiv = document.getElementById("pills-".concat(termArray[i].slug));
                        myDiv.className = "tab-pane fade";
              }
}
       */

</script>
