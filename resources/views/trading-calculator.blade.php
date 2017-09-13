@extends('layout')

@section('pageTitle', 'Calculator')

@section('scripts')
	<link rel="stylesheet" type="text/css" href="{{ url('css/calculator.css') }}">
@endsection

@section('content')
<div class="container">
	<div class="row valign-wrapper calculator-container">
		<div class="col-md-12">
			<div class="card-panel hoverable">
				<div class="row">
					<div class="col-md-6 calculator-inputs">
						<div class="input-field exchange-fee">
							<i class="material-icons prefix">%</i>
			          		<input id="icon_prefix" type="text" class="validate" value="0.25">
			          		<label for="icon_prefix">Exchange fee (%)</label>
						</div>
						<div class="input-field amount">
							<i class="material-icons prefix">₿</i>
			          		<input id="icon_prefix" type="text" class="validate">
			          		<label for="icon_prefix">Amount (₿ or ETH)</label>
						</div>
						<div class="input-field buying-price">
							<i class="material-icons prefix">€</i>
			          		<input id="icon_prefix" type="text" class="validate">
			          		<label for="icon_prefix">Buying price (€)</label>
						</div>
						<div class="input-field selling-price">
							<i class="material-icons prefix">€</i>
			          		<input id="icon_prefix" type="text" class="validate">
			          		<label for="icon_prefix">Selling price (€)</label>
						</div>
					</div>
					<div class="col-md-6 center-align">
						<h3>Result</h3>
						<div class="result-field"></div>
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

		if ((amount == '') || (buying_price == '') || (selling_price == '') || (exchange_fee == '')) {
			$('.result-field').html('');
			return;
		}

		var result = ((selling_price - buying_price) * amount);
		var fee = selling_price * amount * exchange_fee/100;
		var profit = result - fee;

		if (!isNaN(profit)) {
			if (profit >= 0) {
				$('.result-field').removeClass('red-text');
				$('.result-field').addClass('green-text');
			} else {
				$('.result-field').removeClass('green-text');
				$('.result-field').addClass('red-text');
			}

			// console.log(result + ' - ' + fee + ' = ' + profit);
			$('.result-field').html(Math.round(profit * 100) / 100);
		}
	});
</script>
@endsection
