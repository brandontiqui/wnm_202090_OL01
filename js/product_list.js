
const showResults = d => {
  $(".productlist").html(
  	d.result.length ? listItemTemplate(d.result) : 'No results');
};

query({type: 'products_all'})
	.then(showResults);

$(()=>{
	$("#product-search").on("submit", function(e) {
		e.preventDefault();
		let search = $(this).find("input").val();
		console.log('search');
		console.log(search);
		query({type: 'products_search', search: search})
		  .then(showResults);
	});
});
