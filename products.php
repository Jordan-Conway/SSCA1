<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">
  </head>
  <body>

  <?php include 'includes/header.php' ?>

<main class="container">
  <div class="starter-template text-center">
    <?php 
      if($_GET['type'] == "Sleeve"){
        include 'includes/sleevesTable.php';
      }
      else{
        include 'includes/productsTable.php'; 
      }
    ?>
    <a href="product-select.php" class="btn btn-secondary">
          Return
    </a>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
