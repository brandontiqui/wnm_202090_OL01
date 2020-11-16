<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Products</title>

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

  <?php include "php/components/navbar.php"; ?>

  <div class="container">
  	<div class="article card soft">
  	  <div class="display-flex flex-align-center">
  	  	<div class="flex-stretch">
	  	  <h2>Products</h2>
	  	</div>
	  	<div class="flex-none">
	  	  <small>5:20am</small>
	  	</div>
      </div>

      <ul>
        <li><a href="product.php">Product 1</a></li>
        <li><a href="product.php">Product 2</a></li>
        <li><a href="product.php">Product 3</a></li>
        <li><a href="product.php">Product 4</a></li>
        <li><a href="product.php">Product 5</a></li>
      </ul>

      <?php
        include_once "php/functions.php";
        include_once "php/components/templates.php";

        $result = makeQuery(
          makeConn(),
          "
          SELECT *
          FROM
          `products`
          "
        );

        // print_p($result);

        echo array_reduce($result, 'productListTemplate');
      ?>
  </div>

</body>
</html>