<?php

function lemlit_files()
{
  //style
  wp_enqueue_style('bootstrap_main', get_theme_file_uri('/css/bootstrap.css'));
  wp_enqueue_style('lemlit-main-styles', get_stylesheet_uri());
  //script
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
  wp_enqueue_script('popper-js', '//unpkg.com/@popperjs/core@2');
  wp_enqueue_script('bootstrap_js_main', get_theme_file_uri('/js/bootstrap.min.js'), null, false, true);
  wp_enqueue_script('lemlit-main-script', get_theme_file_uri('/js/main.js'), null, false, true);
}

add_action('wp_enqueue_scripts', 'lemlit_files');
