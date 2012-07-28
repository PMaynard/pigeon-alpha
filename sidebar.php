<div class="sidebar">

<?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_right_1')) : 
else : 
?>
  <h2>Twitter</h2>
  <a href="http://twitter.com/pgmaynard/statuses/227706609516818432" title="View tweet on Twitter">a day ago</a></span><span class="tweet_join">  </span><span class="tweet_text">"Microsoft's Azure cloud service, are believed to make extensive use of 0xB16B00B5" - <a href="http://search.twitter.com/search?q=&amp;tag=bigboobs&amp;lang=all&amp;from=pgmaynard">#bigboobs</a></span></li><li class="tweet_even"><span class="tweet_time"><a href="http://twitter.com/pgmaynard/statuses/227378768317124608" title="View tweet on Twitter">2 days ago</a></span><span class="tweet_join">  </span><span class="tweet_text">Power saving?! Tell that to my downloads <a href="http://search.twitter.com/search?q=&amp;tag=stupid-auto-shutdown&amp;lang=all&amp;from=pgmaynard">#stupid-auto-shutdown</a></span></li><li class="tweet_odd"><span class="tweet_time"><a href="http://twitter.com/pgmaynard/statuses/226765499537715200" title="View tweet on Twitter">3 days ago</a></span><span class="tweet_join">  </span><span class="tweet_text">RT <a href="http://twitter.com/TheHobOrg">@TheHobOrg</a>: Follow <a href="http://twitter.com/TheHobOrg">@TheHobOrg</a> and RT this to win two exclusive SDCC <a href="http://search.twitter.com/search?q=&amp;tag=HungerGames&amp;lang=all&amp;from=pgmaynard">#HungerGames</a> posters!</span>
  

  <h2>Awesome Sites</h2>
  <ul>
    <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
  </ul>

  <?php wp_meta(); ?> 

  <h2>Adverts</h2>
  <img src="http://placehold.it/120x600" />
<?php endif; ?>

</div>
