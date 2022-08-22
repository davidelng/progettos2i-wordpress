<?php

/**
 * Template Name: Homepage
 */

get_header();
?>

<section class="hero-section vh-100 d-flex align-items-center" aria-labelledby="hero-title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-background.jpg')">
    <div class="hero-content px-5 text-light">
        <h1 id="hero-title">Il primo servizio di ristorazione plant-based nella tua città</h1>
        <p>Selezionamo minuziosamente i prodotti migliori a km0, per stupirti con ricette sfizione e innovative aiutando i produttori locali. Il nostro motto è vegetale, etico e sostenibile</span>.</p>
        <a class="btn btn-custom-primary me-3" href="#contacts">Vieni a trovarci</a>
        <a class="btn btn-secondary" href="#about-us">Scoprici</a>
    </div>
</section>
<section id="reviews" class="container-fluid">
    <div class="row">
        <div class="col-12 px-5 text-center">
            <h2 id="reviews-title">Cosa dicono di noi</h2>
        </div>
    </div>
    <div class="row reviews-content p-3 pb-5 justify-content-center">
        <div class="col-12 col-lg-6 col-xl-3">
            <div class="card shadow m-3">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Ogni volta che sono in città Wegan è una tappa obbligatoria</p>
                        <footer class="blockquote-footer">Lola, <cite title="Testata">Plantsy</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
            <div class="card shadow m-3">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Un locale vibrante dove tornerò sicuramente, menu intrigante a prezzi competitivi</p>
                        <footer class="blockquote-footer">Andrea, <cite title="Testata">Greenleaf</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
            <div class="card shadow m-3">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Invito chiunque di passaggio a fermasi da Wegan</p>
                        <footer class="blockquote-footer">Monica, <cite title="Testata">Zerowasted</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-primary text-light" id="about-us" aria-labelledby="about-us-title">
    <div class="row">
        <div class="col-12 col-lg-6 px-5">
            <div class="about-content py-5">
                <h2 id="about-us-title">La nostra storia</h2>
                <p>Abbiamo ben pensato di "veganizzare" il territorio, proponendo ricette innovative o rielaborando i classici, scegliendo con cura gli ingredienti, rigorosamente a km0. Vogliamo proporre uno stile di vita più sano e sostenibile.</p>
            </div>
        </div>
        <div class="col-12 col-lg-6 px-0">
            <div class="grid-picture" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/alt-background.jpg')"></div>
        </div>
    </div>
</section>
<section class="container-fluid bg-dark text-light" id="lates-posts">
    <div class="row">
        <div class="col-12 col-lg-6 px-0 swap">
            <div class="grid-picture" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/single-dish.jpg')"></div>
        </div>
        <div class="col-12 col-lg-6 p-5">
            <h2>Esplora gli ultimi articoli del nostro blog</h2>
            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 3
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                echo '<ul class="flex-column align-items-start">';
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    echo '<li><a style="font-size:1.2rem" class="text-light" href="' . esc_url(get_permalink()) . '" a>' . get_the_title() . '</a></li>';
                }
                echo '</ul>';
            }
            wp_reset_postdata();
            ?>
            <a class="btn btn-secondary" href="/index.php/blog">Vai al blog</a>
        </div>
    </div>
</section>
<section class="container-fluid" id="contacts" aria-labelledby="contacts-title">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="text-center p-2" id="contacts-title">Contattaci o vieni a trovarci!</h2>
            <div class="m-3 p-3">
                <?php echo do_shortcode('[contact-form-7 id="10" title="Modulo di contatto 1"]'); ?>
            </div>
        </div>
        <div class="col-12 col-lg-6 px-0">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96570.18653497381!2d14.176562388647703!3d40.85391226906785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b0866db7afaeb%3A0xd23a43cc658cb87e!2sNapoli%20NA!5e0!3m2!1sit!2sit!4v1654545001909!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php
get_footer();
