<!DOCTYPE html>
<head>
  <title>The is a wordpress blog</title>
    <link href="<?php echo get_template_directory_uri()?>/css/mystyle1.css" rel="stylesheet">
</head>

<body>

  <div id="allcontent">
    <header id="mainheader">
      <h1><?php bloginfo('name');  ?></h1>
      <nav id="menu">

        <ul>
          <li><a href="#">INTRO</a></li>
          <li><a href="#">HTML</a></li>
          <li><a href="https://codepen.io/mi-lee/post/an-overview-of-html5-semantics">Semantic HTML5</a></li>
        </ul>
      </nav>
      <!-- menu-->
    </header>

    <aside id="sidebar">
      <p>Sidebar</p>
    </aside>

    <main id="content">



<?php
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
