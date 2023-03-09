<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Crazy Cards</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'includes/header.php' ?>
  <main>
  <div class="starter-template text-center">
    <h2 class="title">Select a catagory</h2>
    <div class="link-container">
      <a href="products.php?type=Booster Box">
        <div class="link-tab">
          <img class="link-image" src="images\products.jpg" alt="products"></img>
          <div class="link-text-holder">
            <p>Booster Boxes<p>
          </div>
        </div>
      </a>
      <a href="products.php?type=Single">
        <div class="link-tab">
          <img class="link-image" src="images\cardImage.jpg" alt="products"></img>
          <div class="link-text-holder">
            <p>Singles</p>
          </div>
        </div>
      </a>
      <a href="products.php?type=Sleeve">
        <div class="link-tab">
          <img class="link-image" src="images\sleeves.png" alt="products"></img>
          <div class="link-text-holder">
            <p>Sleeves<p>
          </div>
        </div>
      </a>
      <a href="products.php?type=Misc">
        <div class="link-tab">
          <img class="link-image" src="images\misc.jpg" alt="products"></img>
          <div class="link-text-holder">
            <p>Misc</p>
          </div>
        </div>
      </a>
    </div>
    <a href="index.php" class="mt-3 btn btn-secondary">
          Return
    </a>
</div>  
  </main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>