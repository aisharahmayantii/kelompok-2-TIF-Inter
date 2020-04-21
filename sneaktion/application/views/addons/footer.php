    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url('theme-assets/vendors/js/vendors.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url('theme-assets/vendors/js/charts/chart.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/vendors/js/charts/chartist.min.js')?>" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url('theme-assets/js/core/app-menu-lite.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/core/app-lite.js')?>" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url('theme-assets/js/scripts/pages/dashboard-lite.js')?>" type="text/javascript"></script>
    <script src="<?php// echo base_url('theme-assets/js/scripts/charts/chartjs/bar/column.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/bar/bar.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/line/line.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')?>" type="text/javascript"></script>
    <!-- <script src="<?php// echo base_url('js/jss.js')?>" type="text/javascript"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(window).on("load", function(){

//Get the context of the Chart canvas element we want to select
var ctx = $("#column-chart");

// Chart Options
var chartOptions = {
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each bar to be 2px wide and green
    elements: {
        rectangle: {
            borderWidth: 2,
            borderColor: 'rgb(0, 255, 0)',
            borderSkipped: 'bottom'
        }
    },
    responsive: true,
    maintainAspectRatio: false,
    responsiveAnimationDuration:500,
    legend: {
        position: 'top',
    },
    scales: {
        xAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
            }
        }],
        yAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
            }
        }]
    },
    title: {
        display: true,
        text: 'Chart.js Bar Chart'
    }
};

// Chart Data
<?php  ?>
var chartData = {
        
    datasets: [{
        label: "Proses",
        data: [<?php $jumlah = $proses->num_rows(); 
        echo $jumlah ?>,],
        backgroundColor: "#28D094",
        hoverBackgroundColor: "rgba(40,208,148,.9)",
        borderColor: "transparent"
    }, {
        label: "Selesai",
        data: [<?php $jumlah1 = $selesai->num_rows(); 
        echo $jumlah1 ?>],
        backgroundColor: "#FF4961",
        hoverBackgroundColor: "rgba(255,73,97,.9)",
        borderColor: "transparent"
    }]
};

var config = {
    type: 'bar',

    // Chart Options
    options : chartOptions,

    data : chartData
};

// Create the chart
var lineChart = new Chart(ctx, config);
});
</script>

    <!-- END PAGE LEVEL JS-->
    </body>
</html>