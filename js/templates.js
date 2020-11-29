
const listItemTemplate = templater(o =>`
	<a class="col-xs-12 col-md-4" href="product.php?id=${o.product_id}">
	  <figure class="figure product">
	    <img src="/WNM608/img/plant_${o.product_id}.jpg" alt="">
	    <figcaption>
	      <div>${o.name}</div>
	      <div>&dollar;${o.price}</div>
	    </figcaption>
	  </figure>
	</a>
`);
