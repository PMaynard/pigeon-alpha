<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="<?php if ( is_single() ) {
           bloginfo('name'); echo " - ";single_post_title('', true); 
      } else {
          bloginfo('name'); echo " - "; bloginfo('description');
      }
      ?>" />
  <meta name="keywords" content="Programming, linux, unix, how to, help, web development, java, c,c++, python, information, nation, pigeon, nation pigeon, php, css, html, software development life cycle, steampunk, anime, cyber, sci-fi, random, pete, osaka, Pete Maynard, Peter, Maynard, blog, Aberystwyth, computer science"/>
  <title><?php bloginfo('name'); wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/reset-fonts-grids.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/base.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/shCoreDefault.css"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>


  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/shCore.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/shBrushBash.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/shBrushPlain.js"></script>

  <!-- Start wp_head -->
  <?php wp_head(); ?>
  <!-- End wp_head -->

  <!-- Enable Syntact highlighter -->
  <script type="text/javascript">SyntaxHighlighter.defaults['toolbar'] = false; SyntaxHighlighter.defaults['class-name'] = "syntax"; SyntaxHighlighter.all();</script>

<script src="http://code.jquery.com/jquery-latest.js"></script> 

</head>

<body>
<a target="_BLANK" href="https://github.com/PMaynard/pigeon-alpha"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png" alt="Fork me on GitHub"></a>
<div id="doc2" class="yui-t7">
	<div id="hd">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/NationPigeonTitle.gif" alt="<?php bloginfo('name'); ?>" />
		</a>
	</div>

	<div id="bd">
    <div id="yui-main">
      <div class="yui-b">
        <div class="yui-gb">
          <div class="yui-u first">
            <!-- PUT MAIN COLUMN 1 CODE HERE -->
            <h1>Programming</h1>
            <ul>
    <?php $my_query = new WP_Query('cat=11&showposts=5'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" title="Permanent Link to: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
          </ul>
          </div>
          <div class="yui-u">
            <!-- PUT MAIN COLUMN 2 CODE HERE -->
            <h1>Linux</h1>
            <ul>
    <?php $my_query = new WP_Query('cat=5s&showposts=5'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" title="Permanent Link to: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
          </ul>
          </div>
          <div class="yui-u">
            <!-- PUT MAIN COLUMN 3 CODE HERE -->
            <h1>Systemless</h1>
            <ul>
      <?php $my_query = new WP_Query('cat=12&showposts=5'); ?>
      <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li><a href="<?php the_permalink() ?>" title="Permanent Link to: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
          </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="yui-b">
    <?php if( is_home() or is_search() ) : ?> 
      <div id="tagcloud">
        <?php if ( function_exists('wp_tag_cloud') ) : ?>
        <ul>
          <?php wp_tag_cloud('smallest=8&largest=30'); ?>
        </ul>
        <?php endif; ?>

      </div>
    <?php endif; ?>

       <div id="more">

        <?php if ( ! (is_home() or is_search()) ) : ?>
          <div id="tagcloud">
            <?php if ( function_exists('wp_tag_cloud') ) : ?>
            <ul>
              <?php wp_tag_cloud('smallest=8&largest=30'); ?>
            </ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <div class="topextra">
          <h1>Categories</h1>
          <ul>
            <?php wp_list_categories('orderby=count&order=DESC&title_li=');?>
          </ul>
        </div>

        <div class="topextra">
          <h1>Last 12 Months</h1>
          <ul>
            <?php wp_get_archives('limit=12&type=monthly'); ?>
          </ul>
        </div>

        <div class="topextra">
          <h1>Archives Year</h1>
          <ul>
            <?php wp_get_archives('type=yearly&show_post_count=true'); ?>
          </ul>
        </div>

      </div> <!-- End More -->

      <div style="clear:both;"></div>

      <div id="morebutton">MORE</div>
      <!-- Show/Hide More -->
      <script type="text/javascript">
        $("#morebutton").click(function () {
            var target = $(this);
            $("#more").slideToggle('slow', function() {
                target .text((target.text() == "MORE")?"LESS":"MORE") // Thanks Flabby.
            });
        });
      </script>

    </div> <!-- End yui-b -->
  </div>
</div>
<?php wp_reset_postdata(); wp_reset_query(); ?>

<div class="lower">
<div id="wrapper">

<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" >
  <input type="text" name="s" id="quicksearch" value="<?php echo (is_search() ? the_search_query() : '   Search'); ?>" onclick="if(this.value=='   Search')this.value='';" onblur="if(this.value=='')this.value='   Search';" />
</form>

