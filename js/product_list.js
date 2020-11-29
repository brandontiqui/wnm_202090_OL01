
const showResults = d => {
  $(".productlist").html(
  	d.result.length ? listItemTemplate(d.result) : 'No results');
};

query({type: 'products_all'})
	.then(showResults);

$(()=>{
	$("#product-search").on("submit", function(e) {
		e.preventDefault();
		const search = $(this).find("input").val();
		query({type: 'products_search', search: search})
		  .then(showResults);
	});

	$("[data-filter]").on("click", function(e) {
		const column = $(this).data("filter");
		const value = $(this).data("value");
		query(
			value === "" ? {type: 'products_all'} :
			{type: 'products_filter', column: column, value: value})
		  .then(showResults);
	});
});
