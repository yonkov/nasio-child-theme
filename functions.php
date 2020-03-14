<?php

function fabian_hediger_enqueue_theme_styles() {
    //Register parent theme's styles
   wp_enqueue_style( 'nasio-css', get_template_directory_uri().'/style.min.css' );
   //Register child theme's styles
   wp_enqueue_style('fabian-theme', get_stylesheet_directory_uri() .'/style.css');
}
add_action( 'wp_enqueue_scripts', 'fabian_hediger_enqueue_theme_styles' );

/* Add your child theme's code snippets below */