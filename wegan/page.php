<?php

/**
 * Template Name: Blank page
 */

get_header();
?>

<div class="wrapper">
    <article class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <div class="col-12 col-md-8 p-3 m-auto">
                <?php
                the_title('<h1 class="entry-title">', '</h1>');
                the_content();
                ?>
            </div>
        </div>
    </article>
</div>

<?php
get_footer();
