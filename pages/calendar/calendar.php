<?php
  $active_menu = "calendar";
  include_once "../layout/header.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Put Page-level css and javascript libraries here -->

  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="../../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar/fullcalendar.print.css" media="print">

  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jQueryUI/jquery-ui.min.js"></script>

  <!-- fullCalendar 2.2.5 -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- ================================================ -->

  <div class="wrapper">

    <?php include_once "../layout/topmenu.php"; ?>
    <?php include_once "../layout/left-sidebar.php"; ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <?php include_once("calendar/main_header.php") ?>
        
    </div><!-- /.content-wrapper -->
    
    <?php include_once "../layout/copyright.php"; ?>
    <?php include_once "../layout/right-sidebar.php"; ?>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

<?php include_once "../layout/footer.php" ?>
<script src="calendar/script.js"></script>