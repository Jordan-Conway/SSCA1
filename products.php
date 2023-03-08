<?php
  require_once('db.php');
  $catagory = $_GET['type'] ?? null;
  $filter = null;
  if($catagory != "All" && $catagory != null){
    $filter = "WHERE productCatagory = '$catagory' ";
  }


  $query = "SELECT * FROM `products` $filter ORDER BY productName;";
  $statement = $db->prepare($query);
  $statement->execute();
  $products = $statement->fetchAll();
  $statement->closeCursor();
?>

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
    <h2 class="title"><?php
      $title;
      switch($catagory){
        case "All": $title = "All"; break;
        case "Booster Box": $title = "Booster Boxes"; break;
        case "Single": $title = "Singles"; break;
        case "Sleeve": $title = "Sleeves"; break;
        case "Misc": $title = "Miscellaneous"; break;
        default: $title = "All";break;
      } 
      echo $title 
    ?></h2>
    <table id="products-table" class="table table-bordered table-striped">
      <thead>
        <th scope="col"></th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Catagory</th>
        <th scope="col">Number in Stock</th>
      </thead>
      <tbody class="table-group-divider">
        <?php
          $productCount = 1;
          foreach($products as $product){
            echo '
              <tr>
                <td scope="col">'. $productCount .'</td>
                <td scope="col">'. $product['productName'] .'</td>
                <td scope="col"> €'. $product['productPrice'] .'</td>
                <td scope="col">'. $product['productCatagory'] .'</td>
                <td scope="col">'. $product['noInStock'] .'</td>
              </tr>   
            ';
            $productCount++;
          }
        ?>
      </tbody>
    </table>
    <a href="product-select.php" class="btn btn-secondary">
          Return
    </a>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
