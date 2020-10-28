<?php

  include "../php/functions.php";

	$filename = "../data/users.json";
	$file = file_get_contents($filename);
	$users = json_decode($file);

  $user = $users[$_GET['id']];

  print_p($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KatsPlants&More - Edit User</title>

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
	  	  <h2>Edit User</h2>
	  	</div>
	  	<div class="flex-none">
	  	  <small>5:20am</small>
	  	</div>
      </div>

  	  <div class="article-body"></div>
  	  <p>Edit User</p>
      <form>
        <label class="form-label">Name</label>
        <input type="text" placeholder="Text" class="form-input" value="<?php echo $user->name ?>">
        <label class="form-label">Type</label>
        <input type="text" placeholder="Text" class="form-input" value="<?php echo $user->type ?>">
        <label class="form-label">Email</label>
        <input type="email" placeholder="Text" class="form-input" value="<?php echo $user->email ?>">
      </form>
      <div class="form-control">
        <button class="form-button">Save</button>
      </div>
  	</article>
  </div>


</body>
</html>