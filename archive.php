<?php get_header();  ?>

<div class="excerpt">

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); if( $post->ID == $do_not_duplicate ) continue; ?>

 <div class="small-post">
   <div class="post-title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
   <small><?php the_time('jS F y') ?> | <?php the_category(', '); ?></small>

   <div class="entry">
     <?php the_excerpt(); ?>
   </div>

 </div>  <!-- End small-post -->
 <?php endwhile; ?> 

<p align="center"><?php posts_nav_link('&#8734;','&laquo; Go Forward In Time','Go Back in Time &raquo;'); ?></p>

</div>  <!-- End Excerpt -->

 <?php else: ?>
 <div class="excerpt">
  <p>Sorry, no posts matched your criteria.</p>
  <?php get_search_form(); ?>
</div>  <!-- End Excerpt -->  
 <?php endif; ?>


  <div class="right"><?php get_sidebar(); ?></div>
  <div style="clear:both;"></div>

</div> <!-- End Wrapper -->
</div> <!-- End Lower -->
<?php get_footer(); ?>
