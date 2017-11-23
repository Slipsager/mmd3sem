<!DOCTYPE html>
<head>
  <title>The is a wordpress blog</title>

</head>

<body>

  <h2> <?php bloginfo('name');   ?>   </h2>
  <h2> <?php bloginfo('description');   ?>   </h2>
  <hr>

  <?php

  // the post loop
  if ( have_posts() ) {
  	while ( have_posts() ) {	the_post();
  ?>

  <article class="post">
    <header><h1><?php the_title(); ?></h1>
      <p>Published: <time pubdate="pubdate"><?php the_date(); ?></time></p>
    </header>

    <p>Try to implement the following wireframe on the webpage using div tags, id and class attributes in the html code and e.g.
    </p>
    <footer>
      <p><small>Author: Admin </small></p>
    </footer>
  </article>


  <?php

  	} // end while
  } // end if

  ?>

</body>
</html>
