<?php
  $active_menu = "sliders";
  include_once "../layout/header.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Put Page-level css and javascript libraries here -->

  <!-- Ion Slider -->
  <link rel="stylesheet" href="../../plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="../../plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="../../plugins/bootstrap-slider/slider.css">

  <!-- Ion Slider -->
  <script src="../../plugins/ionslider/ion.rangeSlider.min.js"></script>
  <!-- Bootstrap slider -->
  <script src="../../plugins/bootstrap-slider/bootstrap-slider.js"></script>

  <!-- Sparkline -->
  <script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>

  <!-- jvectormap -->
  <script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  <!-- ChartJS -->
  <script src="../../plugins/chartjs/Chart.min.js"></script>

  <!-- ================================================ -->

  <div class="wrapper">

    <?php include_once "../layout/topmenu.php"; ?>
    <?php include_once "../layout/left-sidebar.php"; ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
        <?php include_once("sliders/main_header.php") ?>
      
    </div><!-- /.content-wrapper -->
    
    <?php include_once "../layout/copyright.php"; ?>
    <?php include_once "../layout/right-sidebar.php"; ?>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

<?php include_once "../layout/footer.php" ?>
<script src="sliders/script.js"></script>