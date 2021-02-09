<?php
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

        <!-- Navigazione parent/children -->
        <div class=" col-md-2 mx-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Active</a>
            </li>
            <?php
            // $parent_page = wp_get_post_parent_id(get_the_id());
            // if($parent_page){
            //   $find_children = $parent_page;
            // }else {
            //   $find_children = get_the_id();
            // }
            wp_list_pages( array(
                    'title_li' => NULL,
                    'child_of' => get_the_id(),
                    'sort_column' => 'menu_order'

            ) );
            ?>
          </ul>
        </div>
        <div class="col-md-8  mx-auto">
          <!-- Breadcrumbs -->
          <?php get_template_part('includes/breadcrumbs'); ?>

          <?php the_content();?>

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
