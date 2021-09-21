

<!-- Bootstrap Daterangepicker -->

<div id="page-title">
    <h2>Dashboard</h2>
    <p>Dashboard</p>
    
	
</div>

<div class="row">
    <div class="col-md-8">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    3,465
                    <span>Total Users<b> in year 2016</b></span>
                </div>
                <div class="bs-label bg-green">+18%</div>
                <div class="center-div sparkline-big-alt">
					 <div id="container" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
				</div>
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="" class="btn btn-warning float-left tooltip-button">
                        Owners 
                    </a>
					
                </div>
               <div class="size-md float-right">
			    <a href="#" title="" class="btn btn-danger float-right tooltip-button">
                        Tenants 
                    </a>
			   </div>
			    
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    8960
                    <span>Total Properties<b> in </b> year 2016</span>
                </div>
                <div class="bs-label bg-orange">~51%</div>
                <div class="center-div sparkline-big-alt">
					 <div id="allProperties" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
				</div>
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                       
                    </a>
                </div>
                <a href="#" class="btn btn-success float-right tooltip-button" data-placement="top" title="" data-original-title="View all properties">
                   View all properties 
                </a>
            </div>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            GOTEA Data
        </h3>
        <div class="example-box-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-box">
                        <div class="content-wrapper" style="padding: 15px 0 15px;">
                           
                            <div class="sparkline-big">
								 <div id="cityProperties" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							</div>
                        </div>
                       
                    </div>
                </div>
                
                
            </div>
           
        </div>
    </div>
</div>

                    </div>

                

            </div>
        </div>
    </div>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
		credits:0,
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
                text: 'Users (mm)'
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
            name: 'Owners',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'Tenants',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }]
    });
});

$(function () {
    Highcharts.chart('allProperties', {
        chart: {
            type: 'area'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
		credits:0,
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
                text: 'Property (no.)'
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
            name: 'Property',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }]
    });
});


$(function () {
    Highcharts.chart('cityProperties', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Monthly evolution'
        },
        subtitle: {
            text: 'Jan - December 2016'
        },
		credits:0,
		
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
                text: 'Property (no.)'
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
            name: 'Noida',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'Delhi',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'Banglore',
            data: [43.6, 58.8, 88.5, 103.4, 86.0, 75.5, 96.0, 135.3, 165.2, 102.5, 66.6, 72.3]

        }, {
            name: 'Gurugon',
            data: [97.6, 68.8, 92.5, 125.4, 60.0, 70.5, 109.0, 90.3, 88.2, 195.5, 103.6, 83.3]

        }]
    });
});
</script>

