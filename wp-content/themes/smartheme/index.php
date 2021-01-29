<?php get_header(); ?>
    <div class="container">
      <div class="content">

      <?php
        if(have_posts()) :
          while(have_posts()) : the_post();
          //Articoli?>
            <article>
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title();?></h3>
              </a>
              <p><em>Articolo creato da: <?php the_author();?></em> | <?php the_time('d F Y'); ?></p>
              <p><?php the_tags(); ?></p>
              <?php
                if(has_post_thumbnail()) :?>
                <div class="img_thumb">
                  <?php the_post_thumbnail('thumbnail');?>
                </div>
                <?php endif; ?>
              <p><?php the_excerpt();?></p>
              <a class="btn" href="<?php the_permalink(); ?>">Leggi tutto... </a>
            </article>
          <?php endwhile;
          else : echo wpautop("Messaggio presonalizzato");
        endif;
       ?>
    </div>

<div class="widget">
  <?php
  get_sidebar(); ?>
</div>
</div>
    <?php

    get_footer(); ?>
  </body>
</html>
