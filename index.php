<?php get_header();

  while(have_posts()) {  //while loop iterates thru each post using have_posts function similar to count++
    the_post(); ?>  <!--calls WP function that keeps track of which post is being used and gets next post ready for use--> 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  <!--This line uses the anchor tag and WP functions to turn headline into a link which takes you to a detail page of the individual post.
    <?php the_content(); ?> //This outputs the content of each post
    <hr>
  <?php }

  get_footer();

?>