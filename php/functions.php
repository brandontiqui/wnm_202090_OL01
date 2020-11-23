<?php

session_start();

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

include_once "auth.php";

function makeConn() {
	$conn = new mysqli(...MYSQLIAuth());
	if ($conn->connect_errno) die($conn->connect_error);
	$conn->set_charset('utf8');
	return $conn;
}

function makeQuery($conn, $qry) {
	$result = $conn->query($qry);
	if ($conn->errno) die($conn->error);
	$a = [];
	while($row = $result->fetch_object()) {
	  $a[] = $row;
	}
	return $a;
}

/* Cart functions */

function arrayFind($array, $fn) {
	foreach($array as $o) if ($fn($o)) return $o;
	return false;
}

function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function addToCart($id, $amount) {
	// $_SESSION['cart'] = [];
	$cart = getCart();

	// found product
	$p = arrayFind($cart, function($o) use($id) { return $o->id==$id; });

	if($p) {
		$p->amount += $amount;
	} else {
  	$_SESSION['cart'][] = (object)[
  		"id"=>$id,
  		"amount"=>$amount
  	];
	}
}

function resetCart() {
	$_SESSION['cart'] = [];
}

function cartItemById($id) {
  return arrayFind(getCart(), function($o){return $o->id==$id;});
}