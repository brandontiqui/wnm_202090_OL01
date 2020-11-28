<?php

// $r reducing value
// $o current object
function productListTemplate($r, $o) {
  return $r.<<<HTML
  <a class="col-xs-12 col-md-4" href="product.php?id=$o->product_id">
    <figure class="figure product">
      <img src="/WNM608/img/plant_$o->product_id.jpg" alt="">
      <figcaption>
        <div>$o->name</div>
        <div>&dollar;$o->price</div>
      </figcaption>
    </figure>
  </a>
  HTML;
}

function cartListTemplate($r, $o) {
  $totalfixed = number_format($o->total, 2, '.', '');
  return $r.<<<HTML
    <div class="display-flex">
      <div class="flex-none images-thumbs">
        <img src="/WNM608/img/plant_$o->product_id.jpg" alt="">
      </div>
      <div class="flex-stretch">
        <strong>$o->name</strong>
        <div>Quantity: $o->amount</div>
        <div>Delete</div>
      </div>
      <div class="flex-none">
        &dollar;$totalfixed
      </div>
    </div>
  HTML;
}

function cartTotals() {
  $cart = getCartItems();

  $cartprice = array_reduce($cart, function($r, $o) {
    return $r + $o->total;
  }, 0);

  $pricefixed = number_format($cartprice, 2, '.', '');
  $taxfixed = number_format($cartprice * 0.0725, 2, '.', '');
  $totalfixed = $pricefixed + $taxfixed;

  return <<<HTML
    <div class="card-section display-flex">
      <div class="flex-stretch"><strong>Subtotal</strong></div>
      <div class="flex-none">&dollar;$pricefixed</div>
    </div>
    <div class="card-section display-flex">
      <div class="flex-stretch"><strong>Taxes</strong></div>
      <div class="flex-none">&dollar;$taxfixed</div>
    </div>
    <div class="card-section display-flex">
      <div class="flex-stretch"><strong>Total</strong></div>
      <div class="flex-none">&dollar;$totalfixed</div>
    </div>
      <div class="card-section">
      <a href="checkout.php" class="form-button">Checkout</a>
    </div>
  HTML;
}

