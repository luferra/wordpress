<!-- Page Header -->
<?php
  if(has_post_thumbnail()) :?>
<header  id="topSection" class="masthead" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
<?php endif; ?>
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?php the_title();?></h1>
          <span class="subheading"><?php the_time('d F Y'); ?></span>
        </div>

      </div>
    </div>
  </div>
</header>
