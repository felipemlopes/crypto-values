<html>
	<head>
		<title>Homepage - Crypto Values</title>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script>
			var api_endpoint = '{!! env('API_VALUES_QUERY'); !!}';
		</script>
		<script src="{{ url('js/homepage.js') }}"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="{{ url('css/homepage.css') }}">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js" integrity="sha256-3mqgTUhHNgfXgjrzjPOaW03DdQ9hgW92BApzLREoRoA=" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body>
		<div class="container">
			<div class="row valign-wrapper center-align values-container">
				<div class="col-md-6">
					<div class="card-panel hoverable">
						<div class="currency-logo center-align">
							<img src="{{ url('/images/btc-logo.png') }}" alt="bitcoin-logo">
						</div>
						<h4 class="center-align">Bitcoin <small>(BTC)</small></h4>
						<hr>
						<h5 class="center-align" id="btc-actual-value"></h5>
						<hr>
						<div class="value-changes center-align">
							<p><span id="btc-value-1h"></span> (last hour)</p>
							<p><span id="btc-value-24h"></span> (last 24h)</p>
							<p><span id="btc-value-7d"></span> (last week)</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-panel hoverable">
						<div class="currency-logo center-align">
							<img src="{{ url('/images/eth-logo.png') }}" alt="ethereum-logo">
						</div>
						<h4 class="center-align">Ethereum <small>(ETH)</small></h4>
						<hr>
						<h5 class="center-align" id="eth-actual-value"></h5>
						<hr>
						<div class="value-changes center-align">
							<p><span id="eth-value-1h"></span> (last hour)</p>
							<p><span id="eth-value-24h"></span> (last 24h)</p>
							<p><span id="eth-value-7d"></span> (last week)</p>
						</div>
					</div>					
				</div>
				<div class="center-align subscribe-container">
					<a class="btn-floating btn-large waves-effect waves-light red modal-trigger"
					href="#subscribe-modal">
						<i class="material-icons">info</i>
					</a>
				</div>					
			</div>			
			<div id="subscribe-modal" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>Crypto Values</h4>
					<p>In this website you can check the current values for cryptocurrencies such as Bitcoin and Ethereum.</p>
					<p>You can subscribe to daily e-mails to keep up with the most recent updates in the values.</p>
					<h5>Subscribe</h5>
					<form class="">
						<div class="input-field">
							<input id="email" type="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">E-mail</label>
						</div>
						<button id="email-subscribe-submit" class="btn waves-effect waves-light">
							Subscribe <i class="material-icons right">send</i>
  						</button>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
				</div>
			</div>
		</div>
	</body>
</html>