<?php
  //This file and code displays the title and detail of the post clicked upon at the home page.  
  //href is removed so the title is no longer a link.  
  //this file is needed to display the single post detail after clicking.  Single.php only works for posts.
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
  <?php }

  get_footer();

?>