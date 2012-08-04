<?php get_header();  ?>

<div class="excerpt">


<?php $post = $posts[0]; // Thank you kubric template, Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h1><?php single_cat_title("Viewing Category "); ?></h1>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h1><?php single_tag_title("Viewing Tags "); ?></h1>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h1>Viewing Archive: <?php the_time('F jS Y'); ?></h1>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h1>Viewing Monthly Archive <?php the_time('F Y'); ?></h1>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h1>Viewing Yearly Archive <?php the_time('Y'); ?></h1>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h1>Archives</h1>
<?php } ?>

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
