<?php

   get_header();

?>

<div class="projects_container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      ?>

   <div class="projects_card">
      <div class="card" style="width: 18rem;">
         <img class="card-img-top" src="<?php echo the_post_thumbnail( 'medium' );?> ">
         <div class="card-body">
         <h5 class="card-title"><?php echo the_title(); ?></h5>
         <p class="card-text"><?php echo the_excerpt(); ?></p>
         <a href="<?php echo the_permalink();?>" class="btn btn-dark">Go to project</a>
         </div>
      </div>
   </div>

    <?php
   endwhile; else: ?>
      <p>Sorry, no posts found.<p></p>
      <?php endif; ?>
   </div>


    <?php



/*
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