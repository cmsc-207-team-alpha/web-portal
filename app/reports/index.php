<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once("../layouts/dashboard.header.php") ?>

		 <!-- Bootstrap Core CSS -->
		<link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

	    <link href="css/helper.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">

		<!-- <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->
		<!-- <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.js"></script> -->
		<!-- <script src="../vendor/components/jquery/jquery.min.js"></script> -->
		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" -->
		<!-- integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" -->
		<!-- crossorigin="anonymous"></script> -->

		<!-- css -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/series-label.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		
	</head>

				
				
	<body class="reports">
		<?php include_once("../layouts/dashboard.navigation.php") ?> 
	    <div class="container-fluid">
	    <div class="row">
	      	<div class="container-fluid">
	      <div class="row">
	      	<!-- <?php include_once("layouts/dashboard.sidebar.php") ?> -->
	        <div class="col-md-3"></div>
	          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	            <h1 class="h2"><span class="fa fa-fw fa-chart-line"></span> Reports</h1>
					<div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
							<div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>568120</h2>
                                    <p class="m-b-0">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1178</h2>
                                    <p class="m-b-0">Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>25</h2>
                                    <p class="m-b-0">Drivers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div> <!--row-1st row-->	
			<div class="row bg-white m-l-0 m-r-0 box-shadow ">
	
				<div class="col-md-8">
					<div id="container2">
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card">
						<div class="card-body browser">
							<p>Feedback</p>
							<p class="f-w-600"> <span class="pull-right">5 Stars</span></p>
							<div class="progress ">
								<div role="progressbar" style="width: 60%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60%</span> </div>
							</div>

							<p class="m-t-30 f-w-600">4 Stars <span class="pull-right">10%</span></p>
							<div class="progress">
								<div role="progressbar" style="width: 10%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">10%</span> </div>
							</div>

							<p class="m-t-30 f-w-600">3 Stars <span class="pull-right">10%</span></p>
							<div class="progress">
								<div role="progressbar" style="width: 10%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">10%</span> </div>
							</div>

							<p class="m-t-30 f-w-600">2 Stars <span class="pull-right">10%</span></p>
							<div class="progress">
								<div role="progressbar" style="width: 10%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">10%</span> </div>
							</div>

							<p class="m-t-30 f-w-600">1 Star <span class="pull-right">10%</span></p>
							<div class="progress m-b-30">
								<div role="progressbar" style="width: 10%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">10%</span> </div>
							</div>
						</div>
					</div>
				</div>
	        	</div> <!--row-line 95-->
					
				</div> 
			</div> 
				
			</div>
		</div>
		</div>
		</div>
		
		
	<script type="text/javascript">
						
			Highcharts.chart('container2', {
				chart: {
					type: 'column'
				},
				title: {
					text: 'Monthly Sales'
				},
				
				xAxis: {
					categories: [
						'Jan',
						'Feb',
						'Mar',
						'Apr',
						'May',
						'Jun',
						'Jul',
						'Aug',
						'Sep',
						'Oct',
						'Nov',
						'Dec'
					],
					crosshair: true
				},
				yAxis: {
					min: 0,
					title: {
						text: 'Sales (Php)'
					}
				},
				tooltip: {
					headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
						'<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				series: [{
					name: 'Taxi',
					data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

				}, {
					name: 'Sedan',
					data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

				}, {
					name: 'Premium',
					data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

				}]
			});

			
	</script>
		
		
	</body>
</html>
