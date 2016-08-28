<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Budianto IP</p>
          <a href="pages/dashboard"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($active_menu == "dashboard" ) {?>
            <li class="active">
            <?php } else {?>
            <li>
            <?php } ?>
              <a href="../../pages/dashboard"><i class="fa fa-circle-o"></i> Dashboard v1</a>
            </li>
            <?php if ($active_menu == "dashboard2" ) {?>
            <li class="active">
            <?php } else {?>
            <li>
            <?php } ?>
              <a href="../../pages/dashboard2"><i class="fa fa-circle-o"></i> Dashboard v2</a>
            </li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">

            <?php if ($active_menu == "top_navigation" ) {?>
            <li class="active">
            <?php } else {?>
            <li>
            <?php } ?>
              <a href="../../pages/layout_options/top_navigation.php"><i class="fa fa-circle-o"></i> Top Navigation</a>
            </li>

            <?php if ($active_menu == "boxed" ) {?>
            <li class="active">
            <?php } else {?>
            <li>
            <?php } ?>
              <a href="../../pages/layout_options/boxed.php"><i class="fa fa-circle-o"></i> Boxed</a>
            </li>

            <?php if ($active_menu == "fixed" ) {?>
            <li class="active">
            <?php } else {?>
            <li>
            <?php } ?>
              <a href="../../pages/layout_options/fixed.php"><i class="fa fa-circle-o"></i> Fixed</a>
            </li>

            <?php if ($active_menu == "collapsed_sidebar" ) {?>
            <li class="active">
            <?php } else {?>
            <li>
            <?php } ?>
              <a href="../../pages/layout_options/collapsed_sidebar.php"><i class="fa fa-circle-o"></i> Collapsed Sidebar </a>
            </li>

          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>