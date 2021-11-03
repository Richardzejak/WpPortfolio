<?php

   get_header();

?>

<div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      echo the_title();
      echo the_excerpt(); ?>
      <a href="<?php echo the_permalink();?>"> Go to project </a>
      <?php
     endwhile; else: ?>
      <p>Sorry, no posts found.<p></p>
      <?php endif; ?>
   </div>
<?php
   get_footer();
?>