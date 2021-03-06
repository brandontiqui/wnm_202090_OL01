<?php

  include_once "php/functions.php";

  $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id`=".$_GET['id'])[0];

  // print_p($product);

  $cart_product = arrayFind(getCart(), function($o){return $o->id==$_GET['id'];});
  // print_p($cart_product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Cart</title>

	<?php include_once "php/components/metadata.php"; ?>

</head>
<body>

  <?php include "php/components/navbar.php"; ?>

  <div class="container">
  	<div class="card soft">
     <h2>You added <?= $product->name ?> to your cart</h2>
     <p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>
     <div class="display-flex">
       <div class="flex-none"><a href="products.php">Continue Shopping</a></div>
       <div class="flex-stretch"></div>
       <div class="flex-none"><a href="cart.php">Go To Cart</a></div>
     </div>
    </div>
  </div>
</body>
</html>