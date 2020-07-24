<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
  $parenthandle = 'twentytwenty-style';
  $theme = wp_get_theme();
  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
  wp_enqueue_style( 'child-style', get_stylesheet_uri(), array($parenthandle), $theme->get('Version'));
}

// run_video

// add_action('wp_body_open', 'run_video');

function run_video() {
  if (is_page(6)) {
    echo "<h1 class='video-opening'>VIDEO TO RUN</h1>";
  }
}
