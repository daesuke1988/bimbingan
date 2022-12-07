<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Recover Password</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/master_style.css">

    <!-- Crypto_Admin skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>DPT</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body pb-20">
            <p class="login-box-msg text-uppercase">Recover password</p>

            <form action="<?php echo base_url(); ?>welcome/set_password" method="post" class="form-element">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" data-validation-required-message="This field is required" placeholder="Email">
                    <span class="ion ion-email form-control-feedback"></span>
                    <div class="help-block"></div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block text-uppercase">Reset</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="margin-top-30 text-center">
                <p>Already have an account?<a href="<?php echo base_url(); ?>welcome" class="text-info m-l-5"> Sign In</a></p>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->


    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/jquery/dist/jquery.min.js"></script>

    <!-- popper -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/pages/validation.js"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);

        function radioValidation() {
            var gender = document.getElementsByName('jenis');
            var genValue = false;

            for (var i = 0; i < gender.length; i++) {
                if (gender[i].checked == true) {
                    genValue = true;
                }
            }
            if (!genValue) {
                alert("Silahkan Pilih Salah Satu Jenis Kategori Perusahaan atau Perorangan");
                return false;
            }

        }
    </script>

</body>

</html>