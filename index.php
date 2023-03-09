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

<main class="pageContainer">
  <div class="starter-template text-center">
    <div class="link-container">

      <a href="product-select.php">
        <div class="link-tab">
          <img class="link-image" src="images\big3.jpg" alt="products"></img>
          <div class="link-text-holder">
            <p>Products<p>
          </div>
        </div>
      </a>
      <a href="about.php">
        <div class="link-tab">
          <img class="link-image" src="images\questionMark.jpg" alt="about"></img>
          <div class="link-text-holder">
            <p>About</p>
          </div>
        </div>
      </a>
      <a href="contact.php">
        <div class="link-tab">
          <img class="link-image" src="images\email.jpg" alt="contact"></img>
          <div class="link-text-holder">
            <p>Contact Us</p>
          </div>
        </div>
      </a>
    </div>
    <div>
      <h2>New Products</h2>
      <?php include 'includes/newProducts.php' ?>
    </div>
  </div>

</main>
  <?php include 'includes/footer.php' ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
