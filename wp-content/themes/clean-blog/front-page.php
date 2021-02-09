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
      <div class="col-lg-8 col-md-10 mx-auto">
        <span>This is HP</span>
        <hr>

      </div>
    </div>
  </div>

  <hr>
  <!-- Importo footer -->
  <?php
    get_footer();
  ?>
