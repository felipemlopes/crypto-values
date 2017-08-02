<html>
	<head>
		<title>Crypto Values</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha256-rr9hHBQ43H7HSOmmNkxzQGazS/Khx+L8ZRHteEY1tQ4=" crossorigin="anonymous" />
	</head>
	<body>
		<div class="container">
			<h1>Crypto Values and Changes</h1>
			<p>The place where you can check BTC and ETH value.</p>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<h2>Bitcoin (BTC)</h2>
					<div class="values">
						<table class="table">
							<thead>
								<tr>
									<th>Actual value</th>
									<th>Change in last 1h (%)</th>
									<th>Change in last 24h (%)</th>
									<th>Change in last 7d (%)</th>
								</tr>
							</thead>
							<tbody>
								<td id="btc-actual-value"></td>
								<td id="btc-value-1h"></td>
								<td id="btc-value-24h"></td>
								<td id="btc-value-7d"></td>
							</tbody>
						</table>
					</div>
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
					var values_btc = data[0];
					$('#btc-actual-value').html(values_btc.price_eur);
					$('#btc-value-1h').html(values_btc.percent_change_1h);
					$('#btc-value-24h').html(values_btc.percent_change_24h);
					$('#btc-value-7d').html(values_btc.percent_change_7d);					

					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});
		</script>
	</body>
</html>