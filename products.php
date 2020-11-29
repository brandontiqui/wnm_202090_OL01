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
        <div class="form-control display-flex" style="margin-right: 5px">
          <div class="flex filter-button">
            <button data-filter="category" data-value="" type="button" class="form-button">All</button>
          </div>
          <div class="flex-none filter-button">
            <button data-filter="category" data-value="Air plants" type="button" class="form-button">Air plants</button>
          </div>
          <div class="flex-none filter-button">
            <button data-filter="category" data-value="Succulent" type="button" class="form-button">Succulents</button>
          </div>
          <div class="flex-none filter-button">
            <button data-filter="category" data-value="Other" type="button" class="form-button">Other</button>
          </div>
        </div>
	  	</div>
    </div>

      <div class='productlist grid gap'>
  </div>

</body>
</html>