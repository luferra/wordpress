<?php get_header(); ?>
    <div class="container">
      <?php
        if(have_posts()) :
          while(have_posts()) : the_post();
          //pagine
          ?>
            <article>
                <h3><?php the_title();?></h3>
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
    </div>

    <?php get_footer(); ?>
  </body>
</html>
