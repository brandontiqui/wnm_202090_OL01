<?php

  include_once "php/functions.php";

?>


<header class="navbar">
	<div class="container display-flex">
	  <div class="flex-none">
	    <h1>Kat's Plants & more</h1>
	  </div>
	  <div class="flex-stretch"></div>
	  <nav class="flex-none nav">
    <ul class="container display-flex">
    	<li><a href="index.php">Home</a></li>
		  <li><a href="products.php">Products</a></li>
		  <li><a href="cart.php">
		    <span>Cart</span>
		    <span class="badge"><?= makeCartBadge(); ?></span>
		  </a></li>
    </ul>
	  </nav>
	</div>
</header>
