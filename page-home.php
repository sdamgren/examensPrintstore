<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland|Over+the+Rainbow|Rock+Salt" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<?php

/*
Template Name: Home Page
*/

get_header(); ?>



<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">The perfect prints <br> for your walls!</h1>
            <br>
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, est nec malesuada ullamcorper, mauris metus tempus mi, vel volutpat libero enim quis ante. Aenean commodo sapien eu nunc molestie auctor. Suspendisse non pellentesque enim, id maximus ante. Nulla facilisi.</p>
        </div>
    </section>

</main>

<hr>
<br>
<br>

<div id="portfolio" class="container-fluid text-center bg-grey">

    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="<?php bloginfo('template_url'); ?>/img/bedroom.jpg">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="<?php bloginfo('template_url'); ?>/img/wall.jpg">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="<?php bloginfo('template_url'); ?>/img/livingroom.jpg">
            </div>
        </div>
    </div><br>


    <?php get_sidebar(); ?> <!-- Hämtar sidebar -->

<?php get_footer(); ?> <!-- Hämtar sidfot -->