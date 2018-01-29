<?php

function test_script_enqueue() {

		wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'test_script_enqueue' );

// add_theme_support( 'post-thumbnails' );


add_theme_support( 'menus' );



function register_theme_menus(){
  register_nav_menus(
      array (
          'footer' => __( 'footer-menu' ),
          'primary' => __('header-menu')
        )
    );
}


add_action('init', 'register_theme_menus');
