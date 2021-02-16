<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<!-- import elementi header - css, ecc -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- creazione/importazione menu principale -->

        <?php
          wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'menu_id' => false,
                'container' => false,
                'depth' => 2,
                'menu_class' => 'navbar-nav ml-auto',
                'walker' => new bs4navwalker(), //mi serve questa libreria per creare automaticamente lo stile dei menu in bootstrap
                'fallback_cb' => 'bs4navwalker::fallback' //gestione della navbar quando non ci sono voci di menu
          ));

         ?>
         <?php get_search_form(); ?>

      </div>
    </div>
  </nav>
