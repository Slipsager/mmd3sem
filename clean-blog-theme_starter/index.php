<html>
<head>
  <title> Clean Blog theme starter </title>
</head>
<body>
<h1>Starter index.php file</h1>
<p>Look at the index.html file and put the relevant static elements into the
  themes index.php</p>
<p>Change static elements with dynamic content from WP with
  relevant dyntemplate tags and other WP functions</p>

<p></p>
<p>Here is some examples of dynamic content from WP: </p>

<ul>
  <li><?php echo get_template_directory_uri(); ?></li>

<li><?php echo bloginfo('name'); ?></li>
<li><?php echo the_title(); ?></li>

</ul>

</body>
</html>
