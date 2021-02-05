<?php
  get_header();
?>
<?php

if(have_posts()) :
  while(have_posts()) : the_post();
 ?>
<!-- embeddo una parte di codice html presa da un file esterno. Lo poso fare in ogni punto del codice -->
<?php
  get_template_part('includes/top-single');
?>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        
          <?php the_content();?>

          <p><?php the_author();?></p>
        </div>
      </div>
      <div id="btnTop" class="btn-large red">
        <a href="#topSection">
          <i class="fa fa-arrow-up"></i>
        </a>
      </div>
    </div>
    <?php comments_template( $file = '/comments.php', $separate_comments = false ) ?>
  </article>
<?php endwhile;
else : echo wpautop("No post found");
endif;



?>

  <hr>
  <!-- Importo footer -->
  <?php
    get_footer();
  ?>
