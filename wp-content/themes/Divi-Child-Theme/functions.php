<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kacey-portfolio-child-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Raleway:wght@400;500&display=swap');
}
    add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );
 
 
//you can add custom functions below this line:
