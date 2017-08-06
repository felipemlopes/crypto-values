jQuery(document).ready(function($) {
	$.ajax({
		url: api_endpoint,
		type: 'GET',
		dataType: 'json',
	})
	.done(function(data) {
		processValues(data[0], 'btc');
		processValues(data[1], 'eth');
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	function processValues(data, currency) {
		var value_price_eur = data.price_eur;
		var percent_change_1h = data.percent_change_1h;
		var percent_change_24h = data.percent_change_24h;
		var percent_change_7d = data.percent_change_7d;

		$('#' + currency + '-actual-value').html(roundNumber(data.price_eur) + ' €');

		fillFields(currency + '-value-1h', percent_change_1h, value_price_eur);
		fillFields(currency + '-value-24h', percent_change_24h, value_price_eur);
		fillFields(currency + '-value-7d', percent_change_7d, value_price_eur);
	}

	function fillFields(id, percent_value, actual_value) {
		var arrow_up = '<i class="fa fa-arrow-up" aria-hidden="true"></i>';
		var arrow_down = '<i class="fa fa-arrow-down" aria-hidden="true"></i>';

		if (percent_value > 0) {
			$('#' + id).html(arrow_up + " " + calculateAbsoluteValue(percent_value, actual_value) + ' €');
		} else {
			$('#' + id).html(arrow_down + " " + calculateAbsoluteValue(percent_value, actual_value) + ' €');
		}
	}

	function calculateAbsoluteValue(percent_value, actual_value) {
		return roundNumber((Math.abs(percent_value)/100) * actual_value);
	}

	function roundNumber(number) {
		return Math.round(number * 100) / 100;
	}
});