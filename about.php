<?php 
  $yugiohTime = new DateTime();
  $magicTime = new DateTime();
  $magicTime->modify('next friday');
  $pokemonTime = new DateTime();
  $pokemonTime->modify('next saturday');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>About</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include 'includes/header.php' ?>

<main class="container">
  <div class="starter-template text-center">
    <h1>About</h1>
    <p class="lead">Founded in 2003, we specialize in selling products related to trading card games.</p>
    <?php include 'includes/tournaments.php' ?>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
