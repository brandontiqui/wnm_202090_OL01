<?php

  include "../php/functions.php";

	$filename = "../data/users.json";
	$file = file_get_contents($filename);
	$users = json_decode($file);

	print_p($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Users</title>

	<base href="http://brandontiqui.com/WNM608/">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

  <?php include "../php/components/navbar.php"; ?>

  <div class="container">
  	<article id="article1" class="article card soft">
  	  <div class="display-flex flex-align-center">
  	  	<div class="flex-stretch">
	  	  <h2>Users</h2>
	  	</div>
	  	<div class="flex-none">
	  	  <small>5:20am</small>
	  	</div>
      </div>

  	  <div class="article-body"></div>
  	    <?php
  	    	for($i = 0; $i < count($users); $i++) {
  	    		echo "<li>
  	    			<a href='admin/user.php?id=$i'>{$users[$i]->name}</a>
  	    		</li>";
  	    	}
  	    ?>
  	</article>
  </div>


</body>
</html>