<html>
<head>
  <title> Clean Blog theme starter </title>
</head>
<body>
<a href="index.html">Look at the index.html file an convert it into index.php</a>
<p>Use the relevant template tags and other WP functions</p>

<ul>
  <li><?php echo get_template_directory_uri(); ?></li>

<li><?php echo bloginfo(); ?></li>
<li><?php echo the_title(); ?></li>

</ul>

</body>
</html>
