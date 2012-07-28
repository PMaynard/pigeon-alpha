<?php get_header();  ?>

<!-- Start the Loop. -->
 <?php if ( have_posts() ) : ?>

 <?php if ( ! is_paged() || is_search() ) : ?>

  <?php $my_query = new WP_Query('posts_per_page=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>

 <div class="post-first">
    <div class="post-title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
    <small><?php the_time('jS F y') ?> | <?php the_category(', '); ?></small>

   <div class="entry">
     <?php the_content(); ?>
   </div>

 </div> 
 <?php endwhile; ?> 

 <?php endif; ?>




<div class="excerpt">

 <?php while ( have_posts() ) : the_post(); if( $post->ID == $do_not_duplicate ) continue; ?>

 <div class="small-post">
   <div class="post-title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
   <small><?php the_time('jS F y') ?> | <?php the_category(', '); ?></small>

   <div class="entry">
     <?php the_excerpt(); ?>
   </div>

 </div>  <!-- End small-post -->
 <?php endwhile; ?> 

<p align="center"><?php posts_nav_link(' ∴ ','&larr; Go Forward In Time','Go Back in Time &rarr;'); ?></p>

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
