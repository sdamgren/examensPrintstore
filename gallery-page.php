<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland|Over+the+Rainbow|Rock+Salt" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body>
<?php

/*
Template Name: Gallery Page
*/

get_header(); ?>

<h2 class="gallery-h2">Welcome to the Gallery!</h2>

<p class="gallery-p">We created a gallery for you with some ideas for your walls. With different colors and prints you can see
    how you can make your walls perfect! Take a look and get inspired! </p>

<div class="container">

    <div class="gallery">

        <a href="<?php bloginfo('template_url'); ?>/img/inspo2.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo2-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo3.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo3-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo4.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo4-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo5.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo5-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo6.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo6-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo7.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo7-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo8.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo8-thumb.jpg"></a>

        <a href="<?php bloginfo('template_url'); ?>/img/inspo9.jpg" data-lightbox="printstore-gallery">
            <img src="<?php bloginfo('template_url'); ?>/img/inspo9-thumb.jpg"></a>





    </div>
    </div>

</body>

<?php get_footer(); ?> <!-- Hämtar sidfot -->
