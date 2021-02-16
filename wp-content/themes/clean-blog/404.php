<?php

  /**
  *Template Name: 404 Page
  */

  get_header();
?>

<!-- embeddo una parte di codice html presa da un file esterno. Lo poso fare in ogni punto del codice -->
<?php
  get_template_part('includes/top-404');
?>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <div class="input-group">
              <input type="search" class="form-control"
                  placeholder="<?php echo esc_attr_x( 'Cerca …', 'placeholder' ) ?>"
                  value="<?php echo get_search_query() ?>" name="s"
                  title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
              <button class="rounded-right btn btn-info my-2 my-sm-0 " type="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          <?php
            the_widget( 'WP_Widget_Pages', 'title=Site A&exclude=124,98', 'before_title=<h4>&after_title=</h4>' );
           ?>
        </div>
        <div class="col-sm-6">
          <?php
            the_widget( 'WP_Widget_Recent_Posts', 'title=Ultime note', 'before_title=<h4>&after_title=</h4>' );
           ?>
        </div>
        <div class="col-sm-6">
          <?php
            the_widget( 'WP_Widget_Text', 'title=Custom text&text=questo è il testo custom <i class="fab fa-500px"></i>', 'before_title=<h4>&after_title=</h4>' );
           ?>
        </div>
        <div class="col-sm-6">
          <?php
            the_widget( 'WP_Widget_Categories', 'title=Custom', 'before_title=<h4>&after_title=</h4>' );
           ?>
        </div>

      </div>
    </div>
  </article>

  <hr>
  <!-- Importo footer -->
  <?php
    get_footer();
  ?>
