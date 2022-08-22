<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="border-bottom pb-2">
        <h2 class="mb-3"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <small class="mb-2 text-muted"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

        <div class="entry">
            <?php the_excerpt(); ?>
        </div>
    </div>

</article>