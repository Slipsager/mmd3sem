

<?php
get_header();

?>
<aside id="sidebar">
  <h1>Sidebar</h1>
</aside>
<main id="content">

<?php

// the post loop
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here
      echo '<article class="post">';
    the_content();  // a template tag that output the post Content
      echo '</article>';


	} // end while
} // end if

echo '</main>';
get_footer();

?>
