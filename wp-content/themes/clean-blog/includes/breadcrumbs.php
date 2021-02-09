<?php
$parent_page = wp_get_post_parent_id(get_the_id());
$pages = array();

if ($parent_page) { ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
       <?php
       while ($parent_page > 0) {
         array_push($pages, $parent_page);
         $parent_page = wp_get_post_parent_id($parent_page);

       }
       for ($x = (count($pages)-1); $x >= 0 ; $x--) { ?>
         <li class="breadcrumb-item" aria-current="page"><a href="<?php echo get_permalink($pages[$x]); ?>"><?php echo get_the_title($pages[$x]); ?></a></li>
         <?php
       }
       ?>
      <li class="breadcrumb-item active" aria-current="page"><?php the_title( ); ?></li>
    </ol>
  </nav>
<?php } ?>
