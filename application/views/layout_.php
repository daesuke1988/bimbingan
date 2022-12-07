<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>images/logo_uny.png">

    <title>DPT</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap-extend.css">

    <!-- theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/master_style.css">

    <!-- Crypto_Admin skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/skins/_all-skins.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <!-- <a href="index.html" class="logo"> -->
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- <b class="logo-mini">
                    <span class="light-logo"><img src="<?php echo base_url(); ?>images/logo-light.png" alt="logo"></span>
                    <span class="dark-logo"><img src="<?php echo base_url(); ?>images/logo-dark.png" alt="logo"></span>
                </b> -->
            <!-- logo for regular state and mobile devices -->
            <!-- <span class="logo-lg">
                    <img src="<?php echo base_url(); ?>images/logo-light-text.png" alt="logo" class="light-logo">
                    <img src="<?php echo base_url(); ?>images/logo-dark-text.png" alt="logo" class="dark-logo">
                </span>
            </a> -->
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if (!empty($this->session->userdata('image'))) { ?>
                                    <img src="<?php echo base_url() . $this->session->userdata('image'); ?>" class="user-image rounded-circle" alt="User Image">
                                <?php
                                } else {
                                ?>
                                    <img src="<?php echo base_url(); ?>images/5.jpg" class="user-image rounded-circle" alt="User Image">
                                <?php } ?>
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <!-- User image -->
                                <li class="user-header">
                                    <?php if (!empty($this->session->userdata('image'))) { ?>
                                        <img src="<?php echo base_url() . $this->session->userdata('image'); ?>" class="float-left rounded-circle" alt="User Image">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="<?php echo base_url(); ?>images/5.jpg" class="float-left rounded-circle" alt="User Image">
                                    <?php } ?>

                                    <p>
                                        <?php echo $this->session->userdata('nama_lengkap'); ?>
                                        <small class="mb-5"><?php echo $this->session->userdata('email'); ?></small>
                                        <?php if ($this->session->userdata('id_jenis') == '1') { ?>
                                            <a href="<?php echo base_url(); ?>perorangan/profile" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="<?php echo base_url(); ?>perusahaan/profile" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                                        <?php } ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 text-left">
                                            <?php if ($this->session->userdata('id_jenis') == '1') { ?>
                                                <a href="<?php echo base_url(); ?>perorangan/profile"><i class="ion ion-person"></i> My Profile</a>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="<?php echo base_url(); ?>perusahaan/profile"><i class="ion ion-person"></i> My Profile</a>
                                            <?php } ?>
                                        </div>
                                        <!-- <div class="col-12 text-left">
                                            <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                        </div>
                                        <div class="col-12 text-left">
                                            <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                        </div> -->
                                        <div role="separator" class="divider col-12"></div>
                                        <div class="col-12 text-left">
                                            <a href="<?php echo base_url(); ?>users/profile"><i class="ti-settings"></i> Account Setting</a>
                                        </div>
                                        <div role="separator" class="divider col-12"></div>
                                        <div class="col-12 text-left">
                                            <a href="<?php echo base_url(); ?>welcome/logout"><i class="fa fa-power-off"></i> Logout</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="ulogo">
                        <a href="#">
                            <!-- logo for regular state and mobile devices -->
                            <span> <b>DPT</b> </span>
                        </a>
                    </div>
                    <div class="image">
                        <?php if (!empty($this->session->userdata('image'))) { ?>
                            <img src="<?php echo base_url() . $this->session->userdata('image'); ?>" class="rounded-circle" alt="User Image">
                        <?php
                        } else {
                        ?>
                            <img src="<?php echo base_url(); ?>images/5.jpg" class="user-image rounded-circle" alt="User Image">
                        <?php } ?>
                    </div>
                    <div class="info">
                        <p><?php echo $this->session->userdata('nama_lengkap'); ?></p>
                        <a href="<?php echo base_url(); ?>users/profile" class="link" data-toggle="tooltip" title="" data-original-title="Account Settings"><i class="ion ion-gear-b"></i></a>
                        <!-- <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a> -->
                        <a href="<?php echo base_url(); ?>welcome/logout" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
                    </div>
                </div>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="nav-devider"></li>
                    <?php _render_menu_for_layout($menu); ?>
                    <li class="nav-devider"></li>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $title; ?>
                </h1>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li> -->
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <?php echo $CONTENTS; ?>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Now</a>
                    </li>
                </ul>
            </div>
            &copy; 2020 UPT TEKNOLOGI INFORMASI DAN KOMUNIKASI
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                                    <p>Will be July 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                                    <p>New Email : jhone_doe@demo.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                                    <p>disha@demo.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Code Change</h4>

                                    <p>Execution time 15 Days</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Web Design
                                    <span class="label label-danger pull-right">40%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Data
                                    <span class="label label-success pull-right">75%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Order Process
                                    <span class="label label-warning pull-right">89%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Development
                                    <span class="label label-primary pull-right">72%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <input type="checkbox" id="report_panel" class="chk-col-grey">
                            <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                            <p>
                                general settings information
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="checkbox" id="allow_mail" class="chk-col-grey">
                            <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="checkbox" id="expose_author" class="chk-col-grey">
                            <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <input type="checkbox" id="show_me_online" class="chk-col-grey">
                            <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="checkbox" id="off_notifications" class="chk-col-grey">
                            <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                                Delete chat history
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/jquery/dist/jquery.js"></script>

    <!-- popper -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- webticker -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>

    <!-- EChartJS JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/echarts-master/dist/echarts-en.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js"></script>

    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Crypto_Admin App -->
    <script src="<?php echo base_url(); ?>asset/js/template.js"></script>

    <!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>asset/js/pages/dashboard.js"></script>
    <!-- <script src="<?php echo base_url(); ?>asset/js/pages/dashboard-chart.js"></script> -->

    <!-- Crypto_Admin for demo purposes -->
    <script src="<?php echo base_url(); ?>asset/js/demo.js"></script>

    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <!-- Crypto_Admin for Data Table -->
    <script src="<?php echo base_url(); ?>asset/js/pages/data-table.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/select2/dist/js/select2.full.js"></script>

    <!-- Crypto_Admin for advanced form element -->
    <!-- <script src="<?php echo base_url(); ?>assets/pages/advanced-form-element.js"></script> -->
</body>

</html>