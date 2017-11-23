<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset=UTF-8 />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle1.css" />

  <title>Static blog layout</title>


</head>

<body>


  <div id="allcontent">
    <header id="mainheader">
      <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"
      <h1><?php bloginfo('name'); ?></h1>
    </a>
      <nav id="menu">



        <?php
      wp_nav_menu( array(
        'theme_location' => 'top',
        'menu_id' => 'menu',
        'container' => false,
      ) );
      ?>



      </nav>
      <!-- menu-->
    </header>

    <aside id="sidebar">
      <p>Sidebar</p>
    </aside>

    <main id="content">

  <?php

  // the post loop
  if ( have_posts() ) {
  	while ( have_posts() ) {	the_post();
  ?>

  <article class="post">
    <header><h1><?php the_title(); ?></h1>
      <p>Published: <time pubdate="pubdate"><?php the_date(); ?></time></p>
    </header>

    <p><?php the_content(); ?>
    </p>
    <footer>
      <p><small>Author: <?php the_author(); ?></small></p>
    </footer>
  </article>


  <?php

  	} // end while
  } // end if

  ?>
</main> <!-- main  -->
</div><!-- allcontent -->
</body>
</html>
