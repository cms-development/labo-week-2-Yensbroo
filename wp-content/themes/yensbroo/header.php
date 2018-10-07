<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php bloginfo('url') ?>">
        <?php bloginfo('name'); ?>
      </a>
      <div id="navbar" class="collapse navbar-collapse justify-content-end">
        <?php 
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu' => 'top_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav navbar-nav',
        'walker' => new WP_Bootstrap_Navwalker()
      ))
    ?>
      </div>
    </div>
  </nav>