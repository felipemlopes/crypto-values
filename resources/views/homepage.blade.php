<html>
	<head>
		<title>Crypto Values</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<style>
			.fa-arrow-down {
				color: red;
			}

			.fa-arrow-up {
				color: green;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Crypto Values and Changes</h1>
			<p>The place where you can check BTC and ETH value.</p>
			<hr>
			<div class="row">
				<div class="col-md-6 card-panel">
					<h4>Bitcoin (BTC)</h4>
					<hr>
					<h5 class="center-align" id="btc-actual-value"></h5>
					<p><span id="btc-value-1h"></span> (last hour)</p>
					<p><span id="btc-value-24h"></span> (last 24h)</p>
					<p><span id="btc-value-7d"></span> (last week)</p>
				</div>
				<div class="col-md-6 card-panel">
					<h4>Ethereum (ETH)</h4>
					<hr>
					<h5 class="center-align" id="eth-actual-value"></h5>
					<p><span id="eth-value-1h"></span> (last hour)</p>
					<p><span id="eth-value-24h"></span> (last 24h)</p>
					<p><span id="eth-value-7d"></span> (last week)</p>
				</div>		
			</div>
		</div>
		<script>
			jQuery(document).ready(function($) {
				$.ajax({
					url: '{!! env('API_VALUES_QUERY') !!}',
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
		</script>
	</body>
</html>