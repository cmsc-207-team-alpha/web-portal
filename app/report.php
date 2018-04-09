<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("layouts/dashboard.header.php") ?>
        <script src="assets/js/fare.js"></script>
        <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.js"></script>
    <script src="../vendor/components/jquery/jquery.min.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    </head>
    <body class="login-page">
        <?php include_once("layouts/dashboard.navigation.php") ?>
        <div class="container-fluid">
          <div class="row">
            <?php include_once("layouts/dashboard.sidebar.php") ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2"><span class="fa fa-fw fa-money-bill-alt"></span> Reports</h1>
                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                              
                            </div>
              </div> 	
    <!-- DATE PICKER, PAYMENTS ROW -->
    <div class = "col-md-12" align="center">
        <div class="card p-60">
        <h3>Revenue</h3>
        </div>
    </div> 
    <div class="bootstrap-iso">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                <div class="card p-60">
                <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h1><br>100</h1>
                    <p class="m-b-0"><br><br><br><br><br>Total Sales</p>
                </div>
                </div>
                </div>
                </div> 
                <div class="col-md-6 col-sm-6">
                <div class="form-group ">
                <label class="control-label col-sm-2" for="date1">
                Date
                </label>
                <div class="col-sm-10">
                <input class="form-control" id="date1" name="date1" placeholder="MM/DD/YYYY" type="text"/>
                </div>
                </div>
                <div class="form-group ">
                <label class="control-label col-sm-2" for="date">
                Date
                </label>
                <div class="col-sm-10">
                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                <button class="btn btn-primary " name="submit" type="submit">
                Submit
                </button>
                </div>
                </div>      
                </div>
            </div>
        </div>
    </div>
 
 
    <!-- BASE FARE ROW -->
    <div class = "col-md-12" align="center">
        <div class="card p-60">
        <h3>Base Fare</h3>
        </div>
    </div>  
    <div class="row">
        <div class="col-md-4">
            <div class="card p-60">
                <div class="media">
                    <div class="media-left media media-middle">
                        <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>25</h2>
                        <p class="m-b-0">Average</p>
                    </div>
                </div>
            </div>
        </div>   

        <div class="col-md-4">
            <div class="card p-60">
                <div class="media">
                    <div class="media-left media media-middle">
                        
                        <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <h2>25</h2>
                        <p class="m-b-0">Lowest</p>
                        
                    </div>
                </div>
            </div>
        </div>    

        <div class="col-md-4">
            <div class="card p-60">
                <div class="media">
                    <div class="media-left media media-middle">                          
                        <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>25</h2>
                        <p class="m-b-0">Highest</p>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <!-- FARE PER KILOMETER, VEHICLE STATUS-->
    <div align="left" class="col-md-12">
        <div class="card p-60">
        <h3>Fare Per Kilometer</h3>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-3" align="center">
        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Average</p>
                </div>
            </div>
        </div>
               
        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Lowest</p>
                </div>
            </div>
        </div>
               
        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Highest</p>
                </div>
            </div>
        </div>
      </div>

    <!-- COLUMN CHART -->   
        <div class="col-md-9" align="right">
            <div id="columnchart" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto">
            </div>  
        </div>      
    </div>        

    <!-- FARE PER MINUTE -->
    <div align="left" class="col-md-12">
        <div class="card p-60">
        <h3>Fare Per Minute</h3>
        </div>
    <div align="center" class="row">       

        <div class="col-md-3" align="center">
        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Average</p>
                </div>
            </div>
        </div>

        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Lowest</p>
                </div>
            </div>
        </div>

        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Highest</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-9">
            <div id="piechart" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
        </div> 
        
    </div>

   <!-- TRIPS METRIC -->

    <div align="center" class="col-md-12">
        <div class="card p-60">
        <h3>Trips Metric</h3>
    </div>

    <div class="row">
    <div class="col-md-6" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>25</h2>
                    <p class="m-b-0">TOTAL</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
                </div>             
            </div>
        </div>
    
        <div class="col-md-3" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left media media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>15</h2>
                    <p class="m-b-0">Requested</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-3" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left media media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>15</h2>
                    <p class="m-b-0">Assigned</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-3" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left media media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>15</h2>
                    <p class="m-b-0">Rejected</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-3" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left media media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>15</h2>
                    <p class="m-b-0">Ongoing</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-3" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left media media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>15</h2>
                    <p class="m-b-0">Completed</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-3" >
        <div class="card p-60">
            <div class="media">
                <div class="media-left media media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-left">
                    <h2>15</h2>
                    <p class="m-b-0">Cancelled</p>
                    <p></p>
                    <div class="progress ">
                    <div role="progressbar" style="width: 85%; height:9px;" class="progress-bar bg-danger wow animated progress-animated"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="row">
    	<div align="center">
        	<p>&copy; UPOU CMSC-207 Team Alpha - Web Portal</p>
      	</div>
    </div>

</body>


<script type="text/javascript"></script>


<script>

// DATE PICKER
        $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })

// COLUMN CHART
    Highcharts.chart('columnchart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Admin, Driver, & Passenger Metrics'

        },
        xAxis: {
            categories: ['Admin', 'Driver', 'Passenger']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'normal',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },

        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: 'gray'
                }
            }
        },
        series: [{
            name: 'Active',
            data: [5, 3, 1]
        }, {
            name: 'Non-Active',
            data: [2, 2, 1]
        }]
    });

// PIE CHART
    
    Highcharts.chart('piechart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Vehicle<br>Status',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Vehicles',
            innerSize: '50%',
            data: [
                ['On-Duty', 58.9],
                ['On-Trip', 13.29],
                ['Available', 13],

                {
                    dataLabels: {
                        enabled: true
                    }
                }
            ]
        }]
    });



</script>   
    
</html>
