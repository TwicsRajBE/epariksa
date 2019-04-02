<?php
 include('epariksa-transed-config.php'); 


  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Transed</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/morris.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
 <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css" rel="stylesheet">
</head>

<body class=" layout-fluid">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->
<?php include 'header.php';?>
        <!-- // END Header -->
<!-- Header Layout Content -->
<div class="mdk-header-layout__content">
    <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
         <div class="mdk-drawer-layout__content page">

                    <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Quiz Results</li>
                        </ol>
                        <div class="media mb-headings align-items-center">
                            <div class="media-left">
                                <img src="assets/images/vuejs.png" alt="" width="80" class="rounded">
                            </div>
                            <div class="media-body">
                                <h1 class="h2">Vue.js Deploy Quiz</h1>
                                <p class="text-muted">submited on 2nd Feb 2016</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Result</h4>
                            </div>
                            <div class="card-body media align-items-center">
                                <div class="media-body">
                                    <h4 class="mb-0">5.8</h4>
                                    <span class="text-muted-light">Good</span>
                                </div>
                                <div class="media-right">
                                    <a href="" class="btn btn-primary">Restart <i class="material-icons btn__icon--right">refresh</i></a>
                                </div>
                            </div>
                        </div>
                        
                          <div class="row">
                            <div class="col-sm-6">

                        <div class="card">
                            <div class="card-body">
                                
                             <div class="col-lg-12">
                                  <h4 class="card-title">Result</h4>
                                        <div class="chart">
                                            <canvas id="devicesChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                          
                            
                        </div>
                         <div class="col-sm-6">
                         <div class="card">
                            <div class="card-body">
                               
                             <div class="col-lg-12">
                                  <h4 class="card-title">Result</h4>
                                        <div class="chart">
                                            <canvas id="performanceChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            
                          
                            
                        </div>

                    </div>
                </div>
           

                          <div class="card ">
                            <div class="card-body">
                               
                            <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="chart-switch-toggle">Show affiliate:</label>
                                            <div class="custom-control custom-checkbox-toggle">
                                                <input id="chart-switch-toggle" type="checkbox" checked="" aria-checked="true" class="custom-control-input" role="switch" data-toggle="chart" data-target="#ordersChartSwitch" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#b2e599","label":"Affiliate"}]}}'>
                                                <label class="custom-control-label" for="chart-switch-toggle"><span class="sr-only">Show affiliate</span></label>
                                            </div>
                                        </div>
                                        <div class="chart">
                                            <canvas id="ordersChartSwitch" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            
                          
                            
                        </div>








                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Questions</h4>
                            </div>
                            <ul class="list-group list-group-fit mb-0">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">1.</div>
                                        </div>
                                        <div class="media-body">Installation</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">2.</div>
                                        </div>
                                        <div class="media-body">The MVC architectural pattern</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">3.</div>
                                        </div>
                                        <div class="media-body">Database Models</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">4.</div>
                                        </div>
                                        <div class="media-body">Database Access</div>
                                        <div class="media-right"><span class="badge badge-danger ">Wrong</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">5.</div>
                                        </div>
                                        <div class="media-body">Eloquent Basics</div>
                                        <div class="media-right"><span class="badge badge-primary ">Pending Review</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">6.</div>
                                        </div>
                                        <div class="media-body">Take Quiz</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>





    <?php include 'sidebar.php';?>

    </div>

    
</div>
</div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>
    <script src="assets/js/settings.js"></script>







    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>



  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://loopj.com/jquery-tokeninput/src/jquery.tokeninput.js"></script>


    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- UI Charts Page JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script>
        (function() {
            'use strict';

            Charts.init()

            var Performance = function(id, type = 'line', options = {}) {
                options = Chart.helpers.merge({
                    scales: {
                        yAxes: [{
                            ticks: {
                                callback: function(a) {
                                    if (!(a % 10))
                                        return "$" + a + "k"
                                }
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(a, e) {
                                var t = e.datasets[a.datasetIndex].label || "",
                                    o = a.yLabel,
                                    r = "";
                                return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "k</span>"
                            }
                        }
                    }
                }, options)

                var data = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Performance",
                        data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40]
                    }]
                }

                Charts.create(id, type, options, data)
            }

            var Orders = function(id, type = 'roundedBar', options = {}) {
                options = Chart.helpers.merge({
                    barRoundness: 1.2,
                    scales: {
                        yAxes: [{
                            ticks: {
                                callback: function(a) {
                                    if (!(a % 10))
                                        return "$" + a + "k"
                                }
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(a, e) {
                                var t = e.datasets[a.datasetIndex].label || "",
                                    o = a.yLabel,
                                    r = "";
                                return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "k</span>"
                            }
                        }
                    }
                }, options)

                var data = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Sales",
                        data: [25, 20, 30, 22, 17, 10, 18, 26, 28, 26, 20, 32]
                    }]
                }

                Charts.create(id, type, options, data)
            }

            var Devices = function(id, type = 'doughnut', options = {}) {
                options = Chart.helpers.merge({
                    tooltips: {
                        callbacks: {
                            title: function(a, e) {
                                return e.labels[a[0].index]
                            },
                            label: function(a, e) {
                                var t = "";
                                return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "%</span>"
                            }
                        }
                    }
                }, options)

                var data = {
                    labels: ["Desktop", "Tablet", "Mobile"],
                    datasets: [{
                        data: [60, 25, 15],
                        backgroundColor: [settings.colors.primary[500], settings.colors.success[300], settings.colors.success[100]],
                        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
                    }]
                }

                Charts.create(id, type, options, data)
            }

            ///////////////////
            // Create Charts //
            ///////////////////

            Performance('#performanceChart')

            Performance('#performanceAreaChart', 'line', {
                elements: {
                    line: {
                        fill: 'start',
                        backgroundColor: settings.charts.colors.area
                    }
                }
            })

            Orders('#ordersChart')

            Orders('#ordersChartSwitch')

            Devices('#devicesChart')

            $('[data-toggle="chart"]:checked').each(function(index, el) {
                Charts.add($(el))
            })

        })()
    </script>
<script>
  $( function() {
    var availableTags = [<?php echo $arraytitle; ?>];
    
    $("#test_title").autocomplete({
      source: availableTags
    });
  } );
</script>


</body>

</html>