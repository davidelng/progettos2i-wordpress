<?php
get_header(); ?>

<div class="wrapper">
    <article class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <div class="col-12 col-md-8 p-5 m-auto">
                <?php
                the_title('<h1 class="entry-title text-primary mb-5">', '</h1>');
                the_content();
                ?>
                <a class="btn btn-custom-primary" href="/blog">Torna al blog</a>
            </div>
        </div>
    </article>
</div>


<?php
get_footer();
