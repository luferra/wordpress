<!DOCTYPE html>
<html>
  <head>
    <meta charset='<?php bloginfo('charset');?>'>
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <h2><?php bloginfo('name'); ?></h2>
        <span><?php bloginfo('description');?></span>
      </div>
    </header>
    <!-- Ci mettiamo il menu -->
<nav class="main_menu">
  <div class="container">
      <?php
        $args = array(
          'theme_location' => 'primary'
        );

        wp_nav_menu( $args );
      ?>
  </div>
</nav>
