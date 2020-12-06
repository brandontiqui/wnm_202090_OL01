<?php

  include_once "../php/functions.php";

  $empty_product = (object) [
  	"product_id" => "",
		"name" => "",
		"category" => "",
		"description" => "",
		"price" => "",
		"add_date" => "",
		"modify_date" => "",
		"thumbnail" => "",
		"images" => "",
		"number_in_stock" => "",
		"amount" => "",
		"total" => ""
  ];

  // TEMPLATES
  function productListItem($r, $o) {
		return $r.<<<HTML
			<div><a href="{$_SERVER['PHP_SELF']}?id=$o->product_id">$o->name</a></div>
		HTML;
	}

  function showProductPage($o) {
		return $r.<<<HTML
			<div>$o->name</div>
			<div>$o->price</div>
		HTML;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Edit User</title>

	<base href="http://brandontiqui.com/WNM608/">

	<?php include_once "../php/components/metadata.php"; ?>
</head>
<body>
  <?php include "../php/components/admin_navbar.php"; ?>

  <div class="container">
  	<?php
  		if (isset($_GET['id'])) {
  			echo showProductPage(
  				$_GET['id'] == "new" ?
  				  $empty_product :
  				  makeQuery(makeConn(), "SELECT * FROM `products` WHERE `product_id`= ".$_GET['id'])[0]
				);

  			// showProductPage();
  		} else {
  	?>
  	<h2>Product List</h2>
		<?php

				$result = makeQuery(makeConn(), "SELECT * FROM `products`");

				echo array_reduce($result, 'productListItem');
			}
		?>
  </div>
</body>
</html>