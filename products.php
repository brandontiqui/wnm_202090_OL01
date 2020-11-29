<?php
  include_once "php/functions.php";
  include_once "php/components/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kat's Plants and more - Products</title>

  <?php include_once "php/components/metadata.php"; ?>

  <script src="js/functions.js"></script>
  <script src="js/templates.js"></script>
  <script src="js/product_list.js"></script>

</head>
<body>

  <?php include "php/components/navbar.php"; ?>

  <div class="container">
  	<div class="article card soft">
  	  <div class="display-flex flex-align-center">
  	  	<div class="flex-stretch">
	  	  <h2>Products</h2>
        <p></p>
        <div class="form-control">
          <form class="hotdog light" id="product-search">
            <input type="search" placeholder="Search Products">
          </form>
        </div>
	  	</div>
    </div>

      <div class='productlist grid gap'>
  </div>

</body>
</html>