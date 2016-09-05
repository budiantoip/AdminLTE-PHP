<?php
  function isActive($menu, $mode="full"){
    global $active_menu;
    if ($mode == "partial")
      echo ($active_menu == $menu? "active": "");
    else
      echo ($active_menu == $menu? "class='active'": "");
  }
?>
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
          <p>Alexander Pierce</p>
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

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("dashboard") ?>>
              <a href="../../pages/dashboard"><i class="fa fa-circle-o"></i> Dashboard v1</a>
            </li>
            <li <?php isActive("dashboard2") ?>>
              <a href="../../pages/dashboard2"><i class="fa fa-circle-o"></i> Dashboard v2</a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">

            <li <?php isActive("top_navigation") ?>>
              <a href="../../pages/layout_options/top_navigation.php"><i class="fa fa-circle-o"></i> Top Navigation</a>
            </li>

            <li <?php isActive("boxed") ?>>
              <a href="../../pages/layout_options/boxed.php"><i class="fa fa-circle-o"></i> Boxed</a>
            </li>

            <li <?php isActive("fixed") ?>>
              <a href="../../pages/layout_options/fixed.php"><i class="fa fa-circle-o"></i> Fixed</a>
            </li>

            <li <?php isActive("collapsed_sidebar") ?>>
              <a href="../../pages/layout_options/collapsed_sidebar.php"><i class="fa fa-circle-o"></i> Collapsed Sidebar </a>
            </li>

            <li <?php isActive("widgets") ?>>
              <a href="../../pages/widgets">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">new</small>
                </span>
              </a>
            </li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("chartjs") ?>>
              <a href="../../pages/charts/chartjs.php"><i class="fa fa-circle-o"></i> ChartJS </a>
            </li>
            <li <?php isActive("morris") ?>>
              <a href="../../pages/charts/morris.php"><i class="fa fa-circle-o"></i> Morris </a>
            </li>
            <li <?php isActive("flot") ?>>
              <a href="../../pages/charts/flot.php"><i class="fa fa-circle-o"></i> Flot </a>
            </li>
            <li <?php isActive("inline_charts") ?>>
              <a href="../../pages/charts/inline_charts.php"><i class="fa fa-circle-o"></i> Inline Charts </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("general") ?>>
              <a href="../../pages/ui_elements/general.php"><i class="fa fa-circle-o"></i> General </a>
            </li>
            <li <?php isActive("icons") ?>>
              <a href="../../pages/ui_elements/icons.php"><i class="fa fa-circle-o"></i> Icons </a>
            </li>
            <li <?php isActive("buttons") ?>>
              <a href="../../pages/ui_elements/buttons.php"><i class="fa fa-circle-o"></i> Buttons </a>
            </li>
            <li <?php isActive("sliders") ?>>
              <a href="../../pages/ui_elements/sliders.php"><i class="fa fa-circle-o"></i> Sliders </a>
            </li>
            <li <?php isActive("timeline") ?>>
              <a href="../../pages/ui_elements/timeline.php"><i class="fa fa-circle-o"></i> Timeline </a>
            </li>
            <li <?php isActive("modals") ?>>
              <a href="../../pages/ui_elements/modals.php"><i class="fa fa-circle-o"></i> Modals </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("general_elements") ?>>
              <a href="../../pages/forms/general_elements.php"><i class="fa fa-circle-o"></i> General Elements </a>
            </li>
            <li <?php isActive("advanced_elements") ?>>
              <a href="../../pages/forms/advanced_elements.php"><i class="fa fa-circle-o"></i> Advanced Elements </a>
            </li>
            <li <?php isActive("editors") ?>>
              <a href="../../pages/forms/editors.php"><i class="fa fa-circle-o"></i> Editors </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("simple_tables") ?>>
              <a href="../../pages/tables/simple_tables.php"><i class="fa fa-circle-o"></i> Simple Tables </a>
            </li>
          </ul>
          <ul class="treeview-menu">
            <li <?php isActive("data_tables") ?>>
              <a href="../../pages/tables/data_tables.php"><i class="fa fa-circle-o"></i> Data Tables </a>
            </li>
          </ul>
        </li>

        <li <?php isActive("calendar") ?>>
          <a href="../../pages/calendar/calendar.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("inbox") ?>>
              <a href="../../pages/mailbox/inbox.php">Inbox
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
              </a>
            </li>
            <li <?php isActive("compose") ?>>
              <a href="../../pages/mailbox/compose.php">Compose</a>
            </li>
            <li <?php isActive("read") ?>>
              <a href="../../pages/mailbox/read.php">Read</a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("invoice") ?>>
              <a href="../../pages/examples/invoice.php"><i class="fa fa-circle-o"></i> Invoice</a>
            </li>
            <li <?php isActive("profile") ?>>
              <a href="../../pages/examples/profile.php"><i class="fa fa-circle-o"></i> Profile</a>
            </li>
            <li <?php isActive("login") ?>>
              <a href="../../pages/examples/login.php"><i class="fa fa-circle-o"></i> Login</a>
            </li>
            <li <?php isActive("register") ?>>
              <a href="../../pages/examples/register.php"><i class="fa fa-circle-o"></i> Register</a>
            </li>
            <li <?php isActive("lockscreen") ?>>
              <a href="../../pages/examples/lockscreen.php"><i class="fa fa-circle-o"></i> Lockscreen</a>
            </li>
            <li <?php isActive("404") ?>>
              <a href="../../pages/examples/404.php"><i class="fa fa-circle-o"></i> 404 Error</a>
            </li>
            <li <?php isActive("500") ?>>
              <a href="../../pages/examples/500.php"><i class="fa fa-circle-o"></i> 500 Error</a>
            </li>
            <li <?php isActive("blank") ?>>
              <a href="../../pages/examples/blank.php"><i class="fa fa-circle-o"></i> Blank Page</a>
            </li>
            <li <?php isActive("pace") ?>>
              <a href="../../pages/examples/pace.php"><i class="fa fa-circle-o"></i> Pace Page</a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>

        <li <?php isActive("documentation") ?>>
          <a href="../../pages/documentation/documentation.php">
            <i class="fa fa-book"></i> 
            <span>Documentation</span>
          </a>
        </li>

        <li class="header">LABELS</li>

        <li>
          <a href="#">
            <i class="fa fa-circle-o text-red"></i> 
            <span>Important</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-circle-o text-yellow"></i> 
            <span>Warning</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-circle-o text-aqua"></i> 
            <span>Information</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<script>
  var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
  if (parent[0] != undefined)
    $(parent[0]).addClass("active");
</script>