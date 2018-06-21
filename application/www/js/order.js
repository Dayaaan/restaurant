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

	$('#btn-add').on('click', function () {

		var quantity = $("#quantity").val();

		var productId = $('select').val();

		console.log('quantity', quantity, 'product', productId);

		var url = getRequestUrl() + '/Order/Basket';

		var params = {};

		params.id = productId;

		params.quantity = quantity;

		console.log(params);


		$.post(url, params, function (html) {

			$('tbody').html(html);

		});

	});


	function loadCart() {
		// load cart
		var url = getRequestUrl() + '/Order/Basket';

		$.get(url, function (html) {
			$('tbody').html(html);
		});	
	}

	loadCart();

	
		

})