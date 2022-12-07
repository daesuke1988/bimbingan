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

<body class="hold-transition login-page">
    <div class="register-box">
        <div class="register-box-body">
            <div class="register-logo">
                <b>REGISTER</b>
            </div>

            <?php
            if ($config['end'] >= $date && $date >= $config['start']) { ?>
                <p class="login-box-msg">Register a new membership</p>

                <form action="<?php echo base_url(); ?>welcome/sign_up" method="post" class="form-element">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="fullname" placeholder="Full name" data-validation-required-message="This field is required" required>
                        <span class="ion ion-person form-control-feedback "></span>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="username" placeholder="Username" data-validation-required-message="This field is required" required>
                        <span class="ion ion-person form-control-feedback "></span>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" name="email" data-validation-required-message="This field is required" placeholder="Email" required>
                        <span class="ion ion-email form-control-feedback "></span>
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
                    <div class="demo-radio-button">
                        <input type="radio" id="radio_30" name="jenis" value="1" class="with-gap radio-col-blue" />
                        <label for="radio_30">Perorangan</label>
                        <input type="radio" id="radio_32" name="jenis" value="2" class="with-gap radio-col-purple" />
                        <label for="radio_32">Perusahaan</label>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-info btn-block margin-top-10" onclick="return radioValidation();">SIGN UP</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            <?php
            } else { ?>
                <h4 style="color:red">
                    <p class="login-box-msg">Waktu Pendaftaran Telah Berakhir</p>
                </h4>

                <p class="login-box-msg">Waktu Pendaftaran dari tanggal <br />
                <h4 style="color:red">
                    <p class="login-box-msg">
                        <?php echo $config['start']; ?>
                        s.d <?php echo $config['end']; ?>
                    </p>
                </h4>
                </p>
            <?php
            }
            ?>

            <!-- <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
            </div> -->
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