$(function() {

	$("select[name='meal']").on("change", function() {


		var productId = $(this).val(); 

		var urlPHP = getRequestUrl() + "/Order/Meal";

		console.log(urlPHP);



		$.getJSON(urlPHP, {id: productId}, function (meal) {

			$('.meal-name').html("");

			$('strong').html("");

			$('em').html("");

			if ($("select[name='meal']").val()) {

				$('#meal-details img').attr("src",getWwwUrl() + meal.image)

				$('.meal-name').append(meal.description);

				$('strong').append(meal.priceHT);

				if (meal.quantity > 0) {

					$('em').append(meal.quantity);

				} else {
					$('em').append("Article non disponible");
				}
				

			}

		});
	});

	$("select[name='meal']").trigger('change');

	
	// $('#btn-add').on("click", function() {

	// 	var urlMeal = getRequestUrl() + "/Order/Basket";



	// 	$.getJSON(urlMeal, function (meal) {

	// 	}

	// 	// var qty = $("#quantity").val();

	// 	// qty += qty;

	// 	// $('.quantity-meal').html(qty);


	// });
		

})