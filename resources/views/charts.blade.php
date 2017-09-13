@extends('layout')

@section('pageTitle', 'Charts')

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js" integrity="sha256-VNbX9NjQNRW+Bk02G/RO6WiTKuhncWI4Ey7LkSbE+5s=" crossorigin="anonymous"></script>
	<script src="{{ url('js/charts.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ url('css/charts.css') }}">
@endsection

@section('content')
<div class="container-fluid">
	<div class="row center-align">
		<div class="col-md-12 charts-container">
			<h5>Bitcoin and Ethereum evolution over time</h5>
			<canvas id="myChart"></canvas>
		</div>
	</div>
</div>
@endsection
