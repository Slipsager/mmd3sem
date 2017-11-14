<!DOCTYPE html>
<head>
  <title>The is a wordpress blog</title>
</head>

<body>

<?php
bloginfo('name'); // a template
echo "<br /><br /><br />";

// the post loop
if ( have_posts() ) {
	while ( have_posts() ) {the_post();

		// Post Content via template tags
    the_title('Post title: ');   // output the post title
    the_time('F j, Y');         // output the post date F: month, j: day, Y:Year

    the_content('<p>','</p>');  // output the post Content
    

    echo "<p>";
    the_author('');

    echo "</p><hr>";

	} // end while
} // end if

?>
</body>
</html>
