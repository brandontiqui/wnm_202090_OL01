<?php

// $r reducing value
// $o current object
function productListTemplate($r, $o) {
  return $r.<<<HTML
  <a class="col-xs-12 col-md-4" href="product.php?id=$o->product_id">
    <figure class="figure product">
      <img src="https://via.placeholder.com/400x400?text=product" alt="">
      <figcaption>
        <div>$o->name</div>
        <div>&dollar;$o->price</div>
      </figcaption>
    </figure>
  </a>
  HTML;
}

function cartListTemplate($r, $o) {
  return $r.<<<HTML
    <div class="display-flex">
      <div class="flex-stretch">
        <strong>$o->name</strong>
        <div>Delete</div>
      </div>
      <div class="flex-none">
        &dollar;$o->price
      </div>
    </div>
  HTML;
}