<?php get_header(); ?>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        <!-- the wp loop   ------------------------------------------------------>
        <?php

      if ( have_posts() ) {
        // post loop
      	while ( have_posts() ) { the_post();
      ?>
          <div class="post-preview">
            <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
                <?php the_title(); ?>

              </h2>
              <h3 class="post-subtitle">
                <?php the_excerpt(); ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">
                <?php the_author(); ?>
              </a> on
              <?php the_date(); ?>
            </p>
          </div>
          <hr>
          <?php


    } // end while of the loop
      } // end if

  get_footer();
  ?>
