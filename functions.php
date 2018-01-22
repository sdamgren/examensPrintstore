<?php

//Lägger till scripts
function printstore_script_enqueue() {

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all'); //Inkluderar bootstrap
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/printstoretheme.css', array(), '1.0.0', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/printstoretheme.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);//Inkluderar bootstrap

}

add_action('wp_enqueue_scripts', 'printstore_script_enqueue');


//Lägger till meny

function printstore_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation'); //Lägger till meny för header
    register_nav_menu('secondary', 'Footer Navigation'); //Lägger till meny för footer
}

add_action('init', 'printstore_theme_setup');


//Lägger till theme support funktioner

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));



//Sidebar funktioner

function printstore_widget_setup() {

    register_sidebar(array(
        'name'  => 'Sidebar',
        'id'    =>  'sidebar-1',
        'class' =>  'custom',
        'description' => 'Standard Sidebar',
        'before_widget'  => '<aside id="%1$s class="widget %2$s">',
        'after_widget'   => '</aside>',
        'before_title'  =>  '<h1 class="widget-title">',
        'after_title'   =>  '</h1>',

    ));

}
add_action('widgets_init', 'printstore_widget_setup'); //Aktiverar sidebaren


//Början av Woocommerce

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

add_theme_support('woocommerce');
//Slutet av Woocommerec



add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs)
{
    unset($tabs['reviews']);
    return $tabs;
}

function woocommerce_template_product_description() {
    wc_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['reviews'] );            // Remove the reviews tab
    unset( $tabs['additional_information'] );      // Remove the additional information tab

    return $tabs;
}


