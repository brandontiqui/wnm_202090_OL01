<?php

// $r reducing value
// $o current object
function productListTemplate($r, $o) {
  return $r.<<<HTML
  <div class="col-xs-12 col-md-4">
    <figure class="figure product">
      <img src="https://via.placeholder.com/400x400?text=product" alt="">
      <figcaption>
        <div>$o->name</div>
        <div>&dollar;$o->price</div>
      </figcaption>
    </figure>
  </div>
  HTML;
}