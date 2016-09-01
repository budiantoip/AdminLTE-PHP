<?php
  $active_menu = "data_tables";
  include_once "../layout/header.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Put Page-level css and javascript libraries here -->

  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>

  <!-- ================================================ -->

  <div class="wrapper">

    <?php include_once "../layout/topmenu.php"; ?>
    <?php include_once "../layout/left-sidebar.php"; ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <?php include_once("data_tables/main_header.php") ?>
        
    </div><!-- /.content-wrapper -->
    
    <?php include_once "../layout/copyright.php"; ?>
    <?php include_once "../layout/right-sidebar.php"; ?>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

<?php include_once "../layout/footer.php" ?>
<script src="data_tables/script.js"></script>