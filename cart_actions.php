<?php

  include_once "php/functions.php";

	switch($_GET['action']) {
		case "add-to-cart":
		  $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id`=".$_POST['product-id'])[0];
		  addToCart($_POST['product-id'], $_POST['product-amount']);
		  header("location:add_to_cart.php?id={$_POST['product-id']}");
		  break;
		case "update-cart-item":
		  break;
		case "delete-cart-item":
		  break;
		case "reset-cart":
		  resetCart();
		  break;
		default:
      die("Incorrect Action");
	}

  print_p([$_GET, $_POST, $_SESSION]);
