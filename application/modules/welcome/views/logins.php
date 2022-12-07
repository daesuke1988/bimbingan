<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi Bimbingan Online</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-lg-12"><br>
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <img src="<?php echo base_url(); ?>assets/images/logo_elrahma.png" style="margin:5px;width:80px;" />
                        <font style="font-family: Copperplate,'Copperplate Gothic Light',fantasy;" size="6">STMIK EL RAHMA YOGYAKARTA</font>
                    </div>
                    <div class="panel-body">
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-body">
                                        <div class="fadeInDown">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <font style="font-family: Copperplate,'Copperplate Gothic Light',fantasy;" size="4">Sistem Informasi Bimbingan Online</font>
                                                        </div>
                                                        <div class="panel-body">
                                                            <p>
                                                                <strong>
                                                                    <ol type="1">
                                                                        <li>Praktek Kerja</li>
                                                                        <li>Kuliah Kerja Lapangan</li>
                                                                        <li>Skripsi</li>
                                                                    </ol>
                                                                </strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <font style="font-family: Copperplate,'Copperplate Gothic Light',fantasy;" size="4">Login</font>
                                                        </div>
                                                        <div class="panel-body">
                                                            <?php
                                                            if ($this->session->flashdata('message')) {
                                                                echo "<i>" . $this->session->flashdata('message') . "</i>";
                                                            }
                                                            ?>
                                                            <form action="<?php echo base_url(); ?>welcome/login" method="post" class="form-element">
                                                                <fieldset>
                                                                    <div class="form-group input-group">
                                                                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user"></i></span>
                                                                        <input type="text" name="username" value="" class="form-control" placeholder="Username">
                                                                    </div>
                                                                    <?php echo form_error('username'); ?>
                                                                    <div class="form-group input-group ">
                                                                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-lock"></i></span>
                                                                        <input type="password" class="form-control password" name="password" placeholder="Password">
                                                                    </div>
                                                                    <?php echo form_error('password'); ?>
                                                                    <div class="form-actions">
                                                                        <button type="submit" class="btn btn-primary btn-bitbucket pull-right">
                                                                            Login <i class="fa fa-arrow-circle-right"></i>
                                                                        </button>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Copyright <small>© 12201766</small>
                                                </div>
                                                <div class="col-md-6 text-right">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- Mainly scripts -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> -->