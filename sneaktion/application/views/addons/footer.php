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
<script src="<?php echo base_url('theme-assets/js/scripts/charts/canvasjs.min.js')?>" type="text/javascript"></script>

<script>
   window.onload = function () {
 
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title:{
         text: "Company Revenue by Year"
     },
     axisY: {
         title: "Revenue in USD",
         valueFormatString: "#0,,.",
         suffix: "mn",
         prefix: "$"
     },
     data: [{
         type: "spline",
         markerSize: 5,
         xValueFormatString: "YYYY",
         yValueFormatString: "$#,##0.##",
         xValueType: "dateTime",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
  
 chart.render();
  
 }
</script>

    <!-- END PAGE LEVEL JS-->
    </body>
</html>