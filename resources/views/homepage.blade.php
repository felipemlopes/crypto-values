@extends('layout')

@section('pageTitle', 'Homepage')

@section('scripts')
	<script>
		var api_endpoint = '{!! env('API_VALUES_QUERY'); !!}';
	</script>
	<script src="{{ url('js/homepage.js') }}"></script>
@endsection

@section('content')
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
	</div>
</div>
@endsection
