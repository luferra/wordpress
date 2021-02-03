<?php

//import delle librerie
require_once('bs4navwalker.php');
//aggiungo il supporto per i menu in pagina
add_theme_support( 'menus' );

//funzione per l'importazione di tutti i file di stile e dei font
function clean_style() {
  wp_enqueue_style('clean-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  wp_enqueue_style('clean-fonts2', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
  //wp_enqueue_style('clean-style', get_stylesheet_uri(), NULL, microtime());
  wp_enqueue_style('clean-style', get_template_directory_uri().'/style.css');
  wp_enqueue_style('clean-bs', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.css');
  wp_enqueue_style('clean-fa', get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css');
}
add_action( 'wp_enqueue_scripts', 'clean_style' );


//funzione per l'importazione di tutti gli script, file compresi
function clean_scripts() {
  wp_enqueue_script('clean-bs-js', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array ( 'jquery' ), 5.0, true);
  wp_enqueue_script('clean-js', get_template_directory_uri().'/js/clean-blog.min.js', array ( 'jquery' ), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'clean_scripts' );

//funzione per nascondere la barra di admin in fase di preview - c'è un overlay con il menu in testa
show_admin_bar(false);

//importazione / registrazione di tutti i menu presenti nel sito - principali, nel footer ecc
register_nav_menus( array(
            'main_menu' => __('Main Menu'),
            'footer_left_menu' => __('Footer left'),
            'footer_right_menu' => __('Footer right'),
) );

//attivazione immagine in evidenza
add_theme_support('post-thumbnails');

?>
