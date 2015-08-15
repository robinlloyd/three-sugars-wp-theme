<!DOCTYPE html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <title><?php bloginfo( 'name' ); ?><?php wp_title( '|', true, 'right' ); ?></title>

  <?php wp_head(); ?>
</head>

<html>

<body <?php body_class(); ?>>
  <header class="mast">
    <h2 class="mast-logo">Robin Lloyd</h2>

    <h2 class="mast-heading">Three Sugars</h2>

    <h3 class="mast-subheading">I'm a front-end developer, gamer, otaku and occasionally a wizard</h3>

    <nav class="mast-nav">
      <?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
    </nav>
  </header>
