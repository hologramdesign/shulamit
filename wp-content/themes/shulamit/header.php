<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php
  /*
  * Print the <title> tag based on what is being viewed.
  * We filter the output of wp_title() a bit -- see
  * boilerplate_filter_wp_title() in functions.php.
  */
  wp_title( '::', true, 'right' );
  ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/main.css">
  <script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/modernizr.js"></script>

  <?php wp_head(); ?>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  
<header class="main-header">
<div class="container-fluid top-row">
<h1 class="logo"><a href="/">Shulamit Nazarian</a></h1>
<menu class="social-links pull-left">
<a href="xxxhttps://www.facebook.com/sarah.appleby" target="_blank">&#xe027;</a>
<a href="xxhttps://twitter.com/oksarahappleby" target="_blank">&#xe086;</a>
<a href="xxhttps://instagram.com/oksarahappleby/" target="_blank">&#xe100;</a>
</menu>
<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>

</div>
</header>

<div class="search-wrap">
<div class="toggle-search pull-right">
<div class="glyphicon glyphicon-search" aria-hidden="true"></div>
</div>
<div class="toggle-search search-closer">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
</div>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
</div>






</header>
<div id="pjax-content">




