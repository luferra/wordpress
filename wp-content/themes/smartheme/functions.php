<?php


//attivazione immagini in evidenza articoli, setup menu
function smart_setup(){
  add_theme_support('post-thumbnails');
  register_nav_menus( array(
    'primary' => __('Primary')
  ) );
}
add_action('after_setup_theme', 'smart_setup');


//include foglio di stile e altri link/file
function smart_files(){
  wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900');
  wp_enqueue_style('smart_style', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'smart_files');

//set lunghezza abstract articoli
function set_excerpt_length() {
  return 20;
}

add_filter('excerpt_length','set_excerpt_length', 999);


//widget
function init_widget() {
  register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class=\'main_sidebar\'>',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
}
add_action('widgets_init', 'init_widget' );

 ?>
