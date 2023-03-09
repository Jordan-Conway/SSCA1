<?php
  require_once('db.php');
  $catagory = $_GET['type'] ?? null;

  $query = "SELECT * FROM `products` p, `sleeves/sizes` ss, `sleevetypes` st WHERE p.productId = ss.productId AND ss.sleeveTypeId = st.sleeveTypeId;";
  $statement = $db->prepare($query);
  $statement->execute();
  $products = $statement->fetchAll();
  $statement->closeCursor();
?>

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
        <th scope="col">Size</th>
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
                <td scope="col">'. $product['sleeveSizeName'] . " (" . $product['width'] . " x " . $product['height'] . ")" .'</td>
                <td scope="col">'. $product['noInStock'] .'</td>
              </tr>   
            ';
            $productCount++;
          }
        ?>
      </tbody>
    </table>