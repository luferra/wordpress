<?php
  get_header();
?>
<!-- embeddo una parte di codice html presa da un file esterno. Lo poso fare in ogni punto del codice -->
<?php
  get_template_part('includes/top-notes');
?>

<!-- Main Content Blog-->
<div class="container">
  <div class="row">

      <?php if(have_posts()) :
        while(have_posts()) : the_post();
        //Articoli?>
        <div class="col-lg-4 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="<?php the_post_thumbnail_url( 'thumbnail' );?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo the_title(); ?></h5>
            <h6><?php echo the_tags( 'Tags | #', ' #', '|' ); ?> + <?php echo get_the_category_list( ','); ?></h6>
            <p class="card-text"><?php echo excerpt(40); ?></p>
            <h6>Posted by <a href="#"><?php the_author_posts_link(); ?></a> on <?php echo the_time( 'F j, Y' ); ?></h6>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi</a>
          </div>
        </div>
      </div>
      <?php endwhile;
      else : echo wpautop("Non ci sono note!");
    endif; ?>
    <!-- paginazione -->


  </div>
    <nav>
      <ul class="pagination-sm justify-content-center my-5">
        <li class="page-item">
          <?php
            echo paginate_links();
          ?>
        </li>

      </ul>
    </nav>


  </div>

<hr>

<!-- Importo footer -->
<?php
  get_footer();
?>
