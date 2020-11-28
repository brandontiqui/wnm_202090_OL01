<?php

  include_once "php/functions.php";

  $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id`=".$_GET['id'])[0];

  // print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kat's Plants and more - Product</title>

	<?php include_once "php/components/metadata.php"; ?>

</head>
<body>

  <?php include "php/components/navbar.php"; ?>

  <div class="container">
    <div class="grid gap">
      <div class="col-xs-12 col-md-7">
        <div class="card soft">
          <figure class="figure product">
            <img src="/WNM608/img/plant_<?= $product->product_id ?>.jpg" alt="">
          </figure>
        </div>
      </div>
      <div class="col-xs-12 col-md-5">
        <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

          <input type="hidden" name="product-id" value="<?= $product->product_id ?>">

          <div class="card-section">
            <h2 class="product-title"><?= $product->name ?></h2>
            <div class="product-price">&dollar;<?= $product->price ?></div>
          </div>

          <div class="card-section">
            <label for="product-amount" class="form-label">Amount</label>
            <div class="form-select">
              <select id="product-amount" name="product-amount">
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
            <input type="submit" class="form-button" value="Add To Cart">
          </div>
        </form>
      </div>
    </div>

    <div class="card soft dark">
      <p>description</p>
    </div>
  </div>

</body>
</html>