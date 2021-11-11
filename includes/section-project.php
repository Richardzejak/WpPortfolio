<?php
   get_header();
?>
<div class="projects_post">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; else: ?>
      <p>Sorry, no posts found.<p></p>
      <?php endif; ?>


   <a href="/./projects" class="btn btn-dark projects_button" >Back to projects</a>
</div>
<?php
   get_footer();
?>