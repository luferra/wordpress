<?php

  /**
  *Template Name: Pagina custom
  */

  get_header();
?>
<?php

if(have_posts()) :
  while(have_posts()) : the_post();
 ?>
<!-- embeddo una parte di codice html presa da un file esterno. Lo poso fare in ogni punto del codice -->
<?php
  get_template_part('includes/top-page');
?>

  <!-- Post Content -->
  <article>
    <div class="container">

      <div class="row">

        <div class="col-md-10 mx-auto">
          <!-- Breadcrumbs -->
          <?php get_template_part('includes/breadcrumbs'); ?>
          <div class="card-body">
            <p class="card-text single"><?php the_content();?></p>

          </div>
          <p><?php the_author();?></p>
          <div id="btnTop" class="btn-large">
            <a href="#topSection">
              <i class="fa fa-arrow-up"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
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
