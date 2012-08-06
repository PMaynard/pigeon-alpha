<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post-title"><h2><?php the_title(); ?></h2></div>
<div class="post-first">
    <small><?php the_time('jS F y') ?> | <?php the_tags('Tags: ', ', ', '<br />'); ?></small>

	<div class="entry">
	<?php the_content(); ?>
	</div>

	<p>Categories: <?php the_category(' &bull; '); ?></p>
	<p align="center"><?php previous_post_link('&larr; %link '); next_post_link(' &there4; %link &rarr;'); ?></p>

</div>

<div class="excerpt">
<?php comments_template(); ?>
</div>

<?php endwhile; else: ?>
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
</body>
</html>