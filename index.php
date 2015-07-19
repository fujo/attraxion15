<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

get_header(); ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Brand New Web Site</title>
  <meta name="description" content="The Brand New Web Site">
  <meta name="author" content="Jonathan Fuchs">
  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="js/vendor/modernizr.js"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

  <header>
    <img src="img/logo.png">
    <a href="#" class="hamburger"><span></span></a>
    <nav id="mainNav">
      <a href="#">Item1</a>
      <nav>
        <a href="#">Item1.1</a>
        <a href="#">Item1.2</a>
        <a href="#">Item1.3</a>
      </nav>
      <a href="#">Item2</a>
      <nav>
        <a href="#">Item2.1</a>
        <a href="#">Item2.2</a>
        <a href="#">Item2.3</a>
      </nav>
    </nav>
  </header>

  <div id="section--1" class="parallax">

    <h1 class="claim fade"><img src="img/logo.png"></h1>
    <div class="bounce"><i class="fa fa-hand-o-down"></i></div>

  </div>

  <section>
    <div class="container">
      <div class="twelve ">jonathan</div>
      <div class="one-third ">jonathan</div>
      <div class="one-third ">jonathan</div>
      <div class="one-third ">jonathan</div>
    </div>


  </section>
  <h1>salut</h1>
  <h1>salut</h1>
  <h1>salut</h1>
  <h1>salut</h1>
  <h1>salut</h1>
  <h1>salut</h1>
  <h1>salut</h1>
  <h1>salut</h1>

	
  <!-- Grab Google CDN's jQuery and load local version if necessary -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript">
    !window.jQuery && document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')
  </script>
  <script src="js/app.js"></script>
</body>
</html>


<?php get_footer(); ?>
