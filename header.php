<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container">

    <div class="row">

        <div class="col-xs-12">

            <header class="header-container background-image text-center" style="background-image: url(<?php header_image(); ?>);">

                <div class="header-content table">
                    <div class="table-cell">
                        <h1 class="site-title"><?php //bloginfo( 'name' ); ?></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div><!-- stänger table-cell -->
                </div><!-- stänger header-content -->

                <div class="nav-container">

                    <nav class="navbar navbar-default navbar-printstoretheme">
                        <div class="container-fluid">
                            <!-- Gör en "hamburgare" för mobilversionen -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="http://localhost/printstore/localwp.dev/">printStore</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php
                                wp_nav_menu(array( //Hämtar menyn.
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav navbar-right'
                                    )
                                );
                                ?>
                            </div>
                        </div><!-- Stänger container-fluid -->
                    </nav>

                </div><!-- stänger container -->
            </header>

        </div>

    </div>

    <?php get_sidebar(); ?>

