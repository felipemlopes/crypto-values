@extends('layout')

@section('pageTitle', 'Calculator')

@section('scripts')

@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card-panel hoverable">
				<div class="row">
					<div class="col-md-6 calculator-inputs">
						<div class="input-field amount">
			          		<input id="icon_prefix" type="text" class="validate" value="2">
			          		<label for="icon_prefix">Amount (BTC or ETH)</label>
						</div>
						<div class="input-field buying-price">
			          		<input id="icon_prefix" type="text" class="validate" value="200">
			          		<label for="icon_prefix">Buying at (€)</label>
						</div>
						<div class="input-field selling-price">
			          		<input id="icon_prefix" type="text" class="validate" value="50">
			          		<label for="icon_prefix">Selling at (€)</label>
						</div>
						<div class="input-field exchange-fee">
			          		<input id="icon_prefix" type="number" class="validate" value="0.25">
			          		<label for="icon_prefix">Exchange fee (%)</label>
						</div>
					</div>
					<div class="col-md-6">
						<h2>Result</h2>
						<p class="result-field">...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.calculator-inputs .input-field input').keyup(function() {
		var amount = $('.input-field.amount input').val();
		var buying_price = $('.input-field.buying-price input').val();
		var selling_price = $('.input-field.selling-price input').val();
		var exchange_fee = $('.input-field.exchange-fee input').val();

		var result = ((selling_price - buying_price) * amount);
		var fee = selling_price * amount * exchange_fee/100;
		var profit = result - fee;

		console.log(result);
		console.log(fee);
		console.log(profit);
	});
</script>
@endsection
