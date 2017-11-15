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

// the post loop
if ( have_posts() ) {
	while ( have_posts() ) {the_post();
?>
<!--      new blog post -->
<article class="post">
  <header><h1>1. Markup Exercise: </h1>
    <p>Published: <time pubdate="pubdate">2017-10-09</time></p>
  </header>

  <p>Make a html5 document were you markup the follow text from chapter 5 in the HTML5 book with propper semantic tags (h1,h2,h3,p,q,code…).
  </p>
  <footer>
    <p><small>Author: Admin </small></p>
  </footer>
</article>
<!--      new blog post -->

<?php	the_title('Post title: ');   // output the post title ?>
<?php	the_time('F j, Y');         // output the post date F: month, j: day, Y:Year ?>

<?php the_content('<p>','</p>');  // output the post Content ?>

<?php the_author(''); ?>

<?php

	} // end while
} // end if

?>
</body>
</html>
