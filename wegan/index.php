<?php

/**
 * Template Name: Blog
 */

get_header();
?>

<section class="blog-hero text-light p-3 d-flex align-items-center justify-content-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/single-dish.jpg')">
    <h2>Il nostro blog, dove condividiamo con voi ogni nostra crescita</h2>
</section>
<section class="container-fluid blog-content py-5 px-2 blog-content">
    <div class="row">
        <div class="col px-5">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('content');
                }
            }
            ?>

        </div>
    </div>
</section>


<?php
get_footer();
