<!-- import dell'header -->
<?php
  get_header();
?>
<!-- embeddo una parte di codice html presa da un file esterno. Lo poso fare in ogni punto del codice -->
<?php
  get_template_part('includes/top-home');
?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="card">
            <?php if ( is_active_sidebar( 'foo-left' ) ) : ?>
            	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            		<?php dynamic_sidebar( 'foo-left' ); ?>

            	</div><!-- #primary-sidebar -->
              <?php endif; ?>
          </div>
    </div>
  </div>
  <div class="row">
    <iframe src="https://open.spotify.com/embed/artist/6MRGPCGHGGfIOU9TFVyPyI" width="800" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

  </div>
</div>
  <hr>
  <!-- Importo footer -->
  <?php
    get_footer();
  ?>
