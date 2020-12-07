<?php

  include_once "php/functions.php";
  include_once "php/components/templates.php";

  // $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id` IN (1, 3, 5)");

  // print_p($cart);

  $cart_items = getCartItems();

  // print_p($cart_items);

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
     <h2>Cart</h2>
     <div class="grid gap">
       <div class="col-xs-12 col-md-7">
         <div class="card soft">
           <?= array_reduce($cart_items, 'cartListTemplate') ?>
         </div>
       </div>
       <div class="col-xs-12 col-md-5">
         <div class="card soft flat">
          <?= cartTotals() ?>
         </div>
       </div>
     </div>
  </div>
</body>
</html>