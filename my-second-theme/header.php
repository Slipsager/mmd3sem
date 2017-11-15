<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset=UTF-8 />


  <link href="<?php echo get_template_directory_uri()?>/css/mystyle1.css" rel="stylesheet">

  <title>Static blog layout bjsl</title>


</head>

<body>
  <div id="allcontent">
    <header id="header">

      <h1><a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"> Header</a></h1>

      <?php

      wp_nav_menu( array(
        'theme_location' => 'top',
        'menu_id' => 'menu',
        'container' => false,


      ) );

      ?>


    </header>
