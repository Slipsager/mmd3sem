<!DOCTYPE html>
<head>
  <title>The is a wordpress blog</title>
</head>

<body>

<?php
bloginfo('name'); // a template

// the post loop
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here

    the_content();  // a template tag that output the post Content

    echo "<hr>";

	} // end while
} // end if

?>
</body>
</html>
