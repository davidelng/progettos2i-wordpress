<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="site" id="page">
        <header id="wrapper-navbar">
            <nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-light shadow position-fixed top-0 start-0 w-100">
                <div class="container">
                    <!-- Your site title as branding in the menu -->
                    <?php if (!has_custom_logo()) { ?>

                        <?php if (is_front_page() && is_home()) : ?>

                            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

                        <?php else : ?>

                            <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

                        <?php endif; ?>

                    <?php
                    } else {
                        the_custom_logo();
                    }
                    ?>
                    <!-- end custom logo -->

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- The WordPress Menu goes here -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ms-auto',
                            'menu_id'         => 'main-menu',
                            'depth'           => 3,
                            'walker'          => new bootstrap_5_wp_nav_menu_walker()
                        )
                    );
                    ?>
                </div>
            </nav>
        </header>

        <main class="site-main pt-5" id="main" role="main">