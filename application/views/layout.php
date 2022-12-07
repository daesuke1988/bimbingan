<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bimbingan</title>
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>css_landing/logo_uny.png"> -->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <!-- Select2 -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">

    <!-- File Upload -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">

    <link href="<?php echo base_url(); ?>assets/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="<?php echo base_url() . $this->session->userdata('image'); ?>" width="48px" height="48px" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <!-- <span class="block m-t-xs"> <strong class="font-bold"><?php //echo $this->session->userdata('nama'); 
                                                                                                ?></strong></span> -->
                                    <span class="text-muted text-xs block"><?php echo $this->session->userdata('nama'); ?> <b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <!-- <li><a href="<?php echo base_url() ?>users/profile">Profile</a></li>
                                <li><a href="<?php echo base_url() ?>suratmasuk">inbox surat masuk</a></li> -->
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>welcome/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class=" logo-element">
                            <span><img alt="image" class="img-circle" src="<?php echo $this->session->userdata('image'); ?>" width="48px" height="48px" /></span>
                        </div>
                    </li>
                    <?php _render_menu_for_layout($menu); ?>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <!--            <form role="search" class="navbar-form-custom" action="search_results.html">-->
                        <!--                <div class="form-group">-->
                        <!--                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">-->
                        <!--                </div>-->
                        <!--            </form>-->
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Selamat datang.</span>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/logout">
                                <i class=" fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo $title; ?></h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <?php echo $CONTENTS; ?>
                </div>
            </div>

            <div class="footer">
                <div>
                    <strong>Copyright</strong> Universitas Negeri Yogyakarta &copy; 2020-<?php print date("Y"); ?>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mainly scripts -->

<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/js/plugins/select2/select2.full.min.js"></script>

<!-- Chosen -->
<script src="<?php echo base_url(); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>

<!-- file upload js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<!-- SUMMERNOTE -->
<script src="<?php echo base_url(); ?>assets/js/plugins/summernote/summernote.min.js"></script>


<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });

        $('.chosen-select').chosen({
            width: "100%"
        });

        $(".select2_demo_3").select2({
            placeholder: "Pilih Role",
            allowClear: true
        });

        $(document).ready(function() {
            $('.summernote').summernote();
        });
        var edit = function() {
            $('.click2edit').summernote({
                focus: true
            });
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };

        /* Init DataTables */
        var oTable = $('#editable').DataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable('../example_ajax.php', {
            "callback": function(sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function(value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            },
            "width": "90%",
            "height": "100%"
        });
    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"
        ]);

    }
</script>

</body>

</html>