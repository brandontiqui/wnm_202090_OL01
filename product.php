<?php

  include_once "php/functions.php";

  $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id`=".$_GET['id'])[0];

  // print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Product</title>

	<link rel="stylesheet" href="lib/css/styleguide.css">
  <link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

  <?php include "php/components/navbar.php"; ?>

  <div class="container">
    <div class="grid gap">
      <div class="col-xs-12 col-md-7">
        <div class="card soft">
          <img src="https://via.placeholder.com/400x400?text=product" alt="">
        </div>
      </div>
      <div class="col-xs-12 col-md-5">
        <div class="card soft flat">
          <div class="card-section">
            <h2 class="product-title"><?= $product->name ?></h2>
            <div class="product-price">&dollar;<?= $product->price ?></div>
          </div>

          <div class="card-section">
            <label for="product-amount" class="form-label">Amount</label>
            <div class="form-select" id="product-amount">
              <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>
          </div>

          <div class="card-section">
            <a href="add_to_cart.php?id=<?= $product->product_id ?>" class="form-button">Add To Cart</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card soft dark">
      <p>description</p>
    </div>
  </div>

</body>
</html>