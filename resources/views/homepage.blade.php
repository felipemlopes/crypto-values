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
	</head>
	<body>
		{{-- <nav>
			<div class="nav-wrapper">
			<a href="#" class="brand-logo">Crypto Values</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">Bitcoin and Ethereum current values and evolution.</a></li>
			</ul>
			</div>
		</nav> --}}
		<div class="container">
			<div class="row center-align">
				<div class="col-md-6">
					<div class="card-panel">
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
					<div class="card-panel">
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
			</div>
		</div>
	</body>
</html>