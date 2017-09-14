<html>
	<head>
		<title>@yield('pageTitle') - Crypto Values</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="{{ url('css/homepage.css') }}">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js" integrity="sha256-uWtSXRErwH9kdJTIr1swfHFJn/d/WQ6s72gELOHXQGM=" crossorigin="anonymous"></script>
		@yield('scripts')
	</head>
	<body>
		<div class="">

			@yield('content')

			<ul id="slide-out" class="side-nav">
				<li><a class="subheader">Crypto Values</a></li>
				<li><div class="divider"></div></li>
				<li class="homepage-menu-link"><a href="/"><i class="material-icons">home</i> Homepage</a></li>
				<li class="charts-menu-link"><a href="/charts"><i class="material-icons">show_chart</i> Trends charts</a></li>
				<li class="calculator-menu-link"><a href="/calculator"><i class="material-icons">attach_money</i> Profit calculator</a></li>
			</ul>

			<div class="fixed-action-btn">
				<a class="btn-floating btn-large deep-orange button-collapse pulse" data-activates="slide-out">
					<i class="large material-icons">menu</i>
				</a>
			</div>

		</div>
	</body>
</html>

<script type="text/javascript">
	 $(".button-collapse").sideNav();

	 var url = window.location.pathname;

	 switch (url) {
	 	case '/':
	 		$('.homepage-menu-link a').css('font-weight', 'bold');
			$('.homepage-menu-link a').css('font-size', '16px');
	 		break;
		case '/charts':
	 		$('.charts-menu-link a').css('font-weight', 'bold');
			$('.charts-menu-link a').css('font-size', '16px');
	 		break;
		case '/calculator':
			$('.calculator-menu-link a').css('font-weight', 'bold');
			$('.calculator-menu-link a').css('font-size', '16px');
			break;
	 }
</script>
