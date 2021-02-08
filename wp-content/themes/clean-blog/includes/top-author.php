<!-- Page Header -->

<header class="masthead" style="background-image: url(<?php echo get_theme_file_uri( 'img/author-bg.jpg' ) ?>)">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Author</h1>
          <span class="subheading"><?php the_author(); ?></span>
          <span><?php the_archive_description(); ?></span>
        </div>

      </div>
    </div>
  </div>
</header>
