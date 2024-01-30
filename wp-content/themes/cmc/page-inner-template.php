<?php
/*
Template Name: Inner Page Template
*/
get_header();
?>
<?php
while (have_posts()) : the_post();
?>
    <style>
        h2 {
            font-size: 1.5rem;
        }
    </style>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php
endwhile;
get_footer();
?>