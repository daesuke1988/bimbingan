<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>images/logo_uny.png">

    <title>DPT </title>

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
<?php $row = $users->row(); ?>

<body class="hold-transition login-page">
    <div class="register-box">
        <div class="register-box-body">
            <div class="register-logo">
                <b>DPT</b>
            </div>
            <p class="login-box-msg">Recover password</p>

            <form action="<?php echo base_url(); ?>welcome/update_password" method="post" class="form-element">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" data-validation-required-message="This field is required" value="<?php echo $row->username; ?>" disabled>
                    <input type="hidden" name="id_user" value="<?php echo $row->id_user; ?>">
                    <span class="ion ion-person form-control-feedback "></span>
                    <div class="help-block"></div>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="pass" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" data-validation-required-message="This field is required" minlength="8" placeholder="Password" required>
                    <span class="ion ion-locked form-control-feedback "></span>
                    <div class="help-block"></div>
                    <small>Password <code> minimal 8 karakter </code> dan menggunakan format <code> huruf besar, huruf kecil dan angka </code></small>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="re_pass" data-validation-match-match="pass" placeholder="Retype password" required>
                    <span class="ion ion-log-in form-control-feedback "></span>
                    <div class="help-block"></div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block margin-top-10">Reset</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->

            <div class="margin-top-20 text-center">
                <p>Already have an account?<a href="<?php echo base_url(); ?>welcome" class="text-info m-l-5"> Sign In</a></p>
            </div>

        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

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
    </script>
</body>

</html>