<?php

/**
 * theme functions 
 */

define('KEL_VERSION', '1.0.0');

function kel_scripts() {
     
    wp_enqueue_style('kel_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), KEL_VERSION, 'all');
    wp_enqueue_style('kel_custom', get_template_directory_uri() . '/style.css', array('kel_bootstrap-core'), KEL_VERSION, 'all');
    // wp_enqueue_script( 'kel_custom', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
    

}

add_action('wp_enqueue_scripts', 'kel_scripts');

register_nav_menus( array(
    'menu-principal' => 'Menu principal'
) );
