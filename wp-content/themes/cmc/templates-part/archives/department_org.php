<section class="departments-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
		<h2><?php echo get_field("page_title", "option"); ?></h2>
</br>
	    </div>

	    <?php
                    $args = [
                            "taxonomy" => "departments-category",
                            "order" => "ASC",
		    ];
		    
                    $categories = get_terms($args);
                    $i = 1;

                    $clinical=array();
                    $generalService=array();
                    $others=array();
		    foreach ($categories as $category) {
		    
                    $checkOthers=array("academic office","anatomy","biochemistry college","bioengineering","bioethics","biomedical informatics unit","biostatistics","continuing Medical Education","cytogenetics","distance education","medical education","medical records","neurochemistry","pharmacology","pharmacy","physiology");
                    $checkGeneralService=array("alumni house","big bungalow","biomedical engineering","c.s.s.d","chaplaincy","chips","dietary","dodd library","engineering ac and refrigeration","engineering civil","engineering electrical","engineering planning","environment engineering","finance & accounts","hospital management studies","internal audit","library","missions","personnel department","quality management cell office","transport");
                    if(in_array(strtolower($category->name),$checkOthers)){
                    array_push($others,$category);
                    }
                    elseif(in_array(strtolower($category->name),$checkGeneralService)){
                    array_push($generalService,$category);
                    }
                    else{
                    array_push($clinical,$category);
		    }}
?>


<div class="col-12 col-sm">
<h2><?php echo "<font color=#012068>Clinical</font> "?></h2>
<div class="accordion" id="accordionPanelsStayOpenExample">                    
<?php 
       			foreach ($clinical as $category) {
                        $args = [
                            'posts_per_page'       => -1,
                            "post_type" => "departments",
                            "tax_query" => [
                                [
                                    "taxonomy" => "departments-category",
                                    "field" => "slug",
                                    "terms" => $category->slug,
                                ],
                            ],
			];
			$query = new WP_Query($args);	
                        if ($query->have_posts()) {
                            $nonce = wp_create_nonce("my_nonce"); ?>
			    <div class="accordion-item">
			    <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $i; ?>">

<?php if($category->count <=1): ?>
<a style="color: #FFFFFF" href="
<?php 
			    if($category->count <=1) {
				    while ($query->have_posts()){
					    $query->the_post();
					    echo the_permalink();
				    }
			    }else{
				    echo "";
				}

?> ">
<?php endif; ?>
			    <button class="accordion-button <?php if (
                                                                        $i > 1
                                                                    ) {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="<?php if($category->count >1) { echo "#panelsStayOpen-collapse".$i; }?>" aria-expanded="<?php if (
                                                                                                                                                                $i == 1
                                                                                                                                                            ) {
                                                                                                                                                                echo "true";
                                                                                                                                                            } else {
                                                                                                                                                                echo "false";
																			    } ?>" aria-controls="panelsStayOpen-collapse<?php echo $i; ?>">
<?php echo $category->name; ?>
                                    </button>
<?php if($category->count <=1): ?>
</a>
<?php endif; ?>
				</h2>


                                <div id="panelsStayOpen-collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if (
                                                                                                                            $i == 1 && $category->count > 1
                                                                                                                        ) {
                                                                                                                            echo "show";
															} 
?>" aria-labelledby="panelsStayOpen-heading<?php echo $i; ?>">
				    
<div class="accordion-body">
<?php
					
	                                                        
                                        while ($query->have_posts()) :
						$query->the_post(); ?>
                                            <ul>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        <?php
                                        endwhile;
                                        wp_reset_query();
?>
				    </div>
                                </div>
                            </div>
                    <?php $i++;
                        }
                    } ?>
</div>
</div>
<div class="col-12 col-sm">
<h2><?php echo "<font color=#012068>General Services</font> "?></h2>
<div class="accordion" id="accordionPanelsStayOpenExample">                    <?php
                    foreach ($generalService as $category) {
                        $args = [
                            'posts_per_page'       => -1,
                            "post_type" => "departments",
                            "tax_query" => [
                                [
                                    "taxonomy" => "departments-category",
                                    "field" => "slug",
                                    "terms" => $category->slug,
                                ],
                            ],
                        ];
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            $nonce = wp_create_nonce("my_nonce"); ?>
                            <div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $i; ?>">
<?php if($category->count <=1): ?>
<a href="
<?php
                            if($category->count <=1) {
                                    while ($query->have_posts()){
                                            $query->the_post();
                                            echo the_permalink();
                                    }
                            }else{
                                    echo "";
                                }

?> style= "text-decoration: none;" ">
<?php endif; ?>

                            <button class="accordion-button <?php if (
                                                                        $i > 1
                                                                    ) {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="<?php if($category->count >1) { echo "#panelsStayOpen-collapse".$i; }?>" aria-expanded="<?php if (

            $i == 1

        ) {

            echo "true";

        } else {

            echo "false";

        } ?>" aria-controls="panelsStayOpen-collapse<?php echo $i; ?>">
<?php echo $category->name; ?>
                                    </button>
<?php if($category->count <=1): ?>
</a>
<?php endif; ?>
                                
                                       
                                </h2>
                                <div id="panelsStayOpen-collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if (
                                                                                                                            $i == 1
                                                                                                                        ) {
                                                                                                                            echo "show";
                                                                                                                        } ?>" aria-labelledby="panelsStayOpen-heading<?php echo $i; ?>">
                                    <div class="accordion-body">
                                        <?php
                                        while ($query->have_posts()) :
                                            $query->the_post(); ?>
                                            <ul>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        <?php
			    endwhile;
			                                            wp_reset_query();
                                        ?>
                                    </div>
                                </div>
                            </div>
                    <?php $i++;
                        }
                    }
                    ?>
		</div>
</div>
<div class="col-12 col-sm">
<h2><?php echo "<font color=#012068>Others</font> "?></h2>
<div class="accordion" id="accordionPanelsStayOpenExample">                    <?php
                        foreach ($others as $category) {
                        $args = [
                            'posts_per_page'       => -1,
                            "post_type" => "departments",
                            "tax_query" => [
                                [
                                    "taxonomy" => "departments-category",
                                    "field" => "slug",
                                    "terms" => $category->slug,
                                ],
                            ],
                        ];
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            $nonce = wp_create_nonce("my_nonce"); ?>
                            <div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $i; ?>">
<?php if($category->count <=1): ?>
<a href="
<?php
                            if($category->count <=1) {
                                    while ($query->have_posts()){
                                            $query->the_post();
                                            echo the_permalink();
                                    }
                            }else{
                                    echo "";
                                }

?> style= "text-decoration: none;" ">
<?php endif; ?>

                            <button class="accordion-button <?php if (
                                                                        $i > 1
                                                                    ) {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="<?php if($category->count >1) { echo "#panelsStayOpen-collapse".$i; }?>" aria-expanded="<?php if (

            $i == 1

        ) {

            echo "true";

        } else {

            echo "false";

        } ?>" aria-controls="panelsStayOpen-collapse<?php echo $i; ?>">
<?php echo $category->name; ?>
                                    </button>
<?php if($category->count <=1): ?>
</a>
<?php endif; ?>
                                </h2>
                                <div id="panelsStayOpen-collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if (
                                                                                                                            $i == 1
                                                                                                                        ) {
                                                                                                                            echo "show";
                                                                                                                        } ?>" aria-labelledby="panelsStayOpen-heading<?php echo $i; ?>">
                                    <div class="accordion-body">
                                        <?php
                                        while ($query->have_posts()) :
                                            $query->the_post(); ?>
                                            <ul>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        <?php
                            endwhile;
                                                                    wp_reset_query();
                                        ?>
                                    </div>
                                </div>
                            </div>
                    <?php $i++;
                        }
                    }
                    ?>
                </div>
</div>
        </div>
    </div>
</section>
<!-- Contact Information Section Start Here -->
<section class="contact-info mt-4 mt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-headings">
                    <h2><?php the_field('contact_info_heading' , 'option'); ?></h2>
                </div>
                <div class="row g-5">
                    <?php
                    // Check rows existexists.
                    if (have_rows('contact_info', 'option')) :
                        // Loop through rows.
                        while (have_rows('contact_info' , 'option')) : the_row();
                    ?>
                            <div class="col-md-4 position-relative">
                                <div class="border-right">
                                    <span><?php echo get_sub_field('heading' , 'option'); ?></span>
                                    <?php echo get_sub_field('content' , 'option'); ?>
                                </div>
                            </div>
                    <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Information Section End Here -->
