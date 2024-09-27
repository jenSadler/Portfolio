<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jennifer Sadler | Portfolio</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="<?php echo get_template_directory_uri();?>/hamburger/hamburgers.css" rel="stylesheet">

  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/javascript.js"></script>

  <?php
  $menu_name = 'main-nav-menu';

  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuItems = wp_get_nav_menu_items($menu->term_id);
    $logoid = "menu-item-" . $menuItems[0]->ID;

  }?>

  <?php wp_head(); ?>
</head>

<body onload="init()">
  <?php
  wp_body_open();
  ?>
	
<div class="footerFixer">
	
  <div class="mainContainer">


<div class="holdNav">

  <nav id="mainNav">

    <?php
    wp_nav_menu( array(
    'theme_location' => 'main-nav-menu',
    'container_class' => 'main-nav-list' ) );
    ?>
  </nav>

    <button id="toggleMenu" class="hamburger hamburger--slider" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

</div>
