"use strict";


$(function() {

	$("select[name='meal']").on("change", function() {


		var productId = $(this).val(); 

		var urlPHP = getRequestUrl() + "/Order/Meal";

		console.log(urlPHP);

		//objet js
		var params = { id: productId };


		$.getJSON(urlPHP, params, function (meal) {

			$('.meal-name').html("");

			$('strong').html("");

			$('em').html("");

			if ($("select[name='meal']").val()) {

				$('#meal-details img').attr("src",getWwwUrl() + meal.image)

				$('.name_product').attr("value",meal.name);

				$('.meal-name').append(meal.description);

				$('strong').append(meal.priceHT);

				$('.priceHT').attr("value",meal.priceHT);

				if (meal.quantity > 0) {

					$('em').append(meal.quantity);

				} else {
					$('em').append("Article non disponible");
				}

				
				

			}

		});
	});

	$("select[name='meal']").trigger('change');

	$('#btn-add').on("click", function() {

					$('.basket-empty').addClass("hidden");

					var urlBasket = getRequestUrl() + "/Order/Basket";

					var quantity = $('#quantity').val();

					var name = $('.name_product').val();

					var priceHT = $('.priceHT').val();

					var params2 = { quantity_meal: quantity,
									name_meal : name,
									priceHT_meal : priceHT };

					$.post(urlBasket, params2 , function (basket) {


						$('tbody').append("<tr>");
						$('tbody').append("<td>" + params2.quantity_meal + "</td>");
						$('tbody').append("<td>" + params2.name_meal + "</td>");
						$('tbody').append("<td>" + params2.priceHT_meal + "€</td>");
						$('tbody').append("<td>" + params2.priceHT_meal * params2.quantity_meal * 1.2 + "€</td>");
						$('tbody').append("</tr>");
						
					});



				});
	
		

})