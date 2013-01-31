<div class="sidebar">

<?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_right_1')) : 
else : 
?>

  <h2>Awesome Sites</h2>
  <ul>
    <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
  </ul>

  <?php wp_meta(); ?> 
  
<?php endif; ?>

</div>
