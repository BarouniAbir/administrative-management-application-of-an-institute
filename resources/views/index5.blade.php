@extends('template')
@section('titre')
Diplomes
@endsection
@section('contenu')
<script>
	window.onload = function() {
	
	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		title: {
			text: "Pas des statiques"
		
		},
		
		data: [{
			type: "pie",
			startAngle: 240,
			yValueFormatString: "##0.00\"%\"",
			indexLabel: "{label}",
			dataPoints: [
				{y: 50},
				{y: 20},
				{y: 10},
				{y: 5},
				{y: 5}
			]
		}]
	});
	chart.render();
	
	}
	</script>
	</head>
	<body>
	<div id="chartContainer" style="height: 300px; width: 100%; padding-top: 150px; margin-top: 100px;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection






















