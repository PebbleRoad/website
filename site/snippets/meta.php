<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page->title() ?> - <?php echo $site->title() ?></title>
    <meta name="description" content="<? echo (($page->summary() && $page->summary() != '')? $page->summary(): $site->description()) ?>">
    <meta name="keywords" content="<?php echo $site->keywords() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo $page->title() ?> - <?php echo $site->title() ?>">
    <meta property="og:site_name" content="<?php echo $site->title() ?>">
    <meta property="og:description" content="<? echo (($page->summary() && $page->summary() != '')? $page->summary(): $site->description()) ?>">
    <meta property="og:image" content="<?php echo url() ?>/fb-share.png">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="PebbleRoad &raquo; Feed" href="<?php echo url().'/feed' ?>">
    <?php echo css('styles/main.css') ?>    
    <link href="//fonts.googleapis.com/css?family=Merriweather:400,700,400italic,300italic,300|Merriweather+Sans:400,400italic,700,700italic,300italic,300" rel="stylesheet" type="text/css">
    <?php echo css('styles/print.css', 'print') ?>
    <?php echo js('scripts/modernizr.custom.js') ?>
    <!--[if lte IE 8]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body class="<?php echo ($page->isHomePage()) ? 'home' : '' ?>">
  <!-- Site header-->
  <header class="site-header">
    <a href="<?php echo url() ?>" title="Home" class="logo-small">
      <span class="visuallyhidden"><?php echo $site->title() ?></span>
    </a>
    <!-- Hamburger-->
    <a href="#" class="hamburger"><span class="visuallyhidden">Show menu</span></a>
    <!-- / Hamburger-->
    <!-- Navigation-->
    <?php snippet('menu') ?>
    <!-- / Navigation-->
  </header>
  <!-- / Site header-->