<?php get_header(); ?>
    <div class="container">
      <?php
        if(have_posts()) :
          while(have_posts()) : the_post();
          //Articoli?>
            <article>
                <h3><?php the_title();?></h3>

              <p><em>Articolo creato da: <?php the_author();?></em> | <?php the_time('d F Y'); ?></p>
              <?php
                if(has_post_thumbnail()) :?>
                <div class="img_post">
                  <?php the_post_thumbnail();?>
                </div>
                <?php endif; ?>
              <p><?php the_content();?></p>
            </article>
          <?php endwhile;
          else : echo wpautop("Messaggio presonalizzato");
        endif;



       ?>
       <?php comments_template(); ?>
    </div>

    <?php get_footer(); ?>
  </body>
</html>
