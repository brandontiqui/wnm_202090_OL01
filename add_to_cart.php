<?php

  include_once "php/functions.php";

  $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id`=".$_GET['id'])[0];

  // print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Cart</title>

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

  <?php include "php/components/navbar.php"; ?>

  <div class="container">
  	<div class="card soft">
     <h2>You added <?= $product->name ?> to your cart</h2>
     <div class="display-flex">
       <div class="flex-none"><a href="products.php">Continue Shopping</a></div>
       <div class="flex-stretch"></div>
       <div class="flex-none"><a href="cart.php">Go To Cart</a></div>
     </div>
    </div>
  </div>
</body>
</html>