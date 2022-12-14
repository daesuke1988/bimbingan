<?php
error_reporting(0);
?>
<div class="col-lg-12">
    <div class="ibox-content m-b-sm border-bottom">
        <table>
            <tr>
                <td>
                    <div class="float-left m-r-md">
                        <img src="<?php echo base_url(); ?>assets/images/logo_elrahma.png" style="margin:5px;width:80px;" />
                    </div>
                </td>
                <td>
                    <h2><strong> Selamat Datang di Sistem Bimbingan Online STMIK EL RAHMA YOGYAKARTA </strong></h2>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-content">
            <i class="fa text-success">
                <h2><strong> Mahasiswa Bimbingan </strong></h2>
            </i>
            <hr />
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Bimbingan Kerja Praktek
                            </h2>
                            <small>&nbsp;</small>
                            <?php
                            if (!is_null($kp['tgl_awal'])) {
                            ?>
                                Dimulai <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($kp['tgl_awal']))) ?></h1> s.d. <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($kp['tgl_akhir']))) ?></h1>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Skripsi
                            </h2>
                            <small>&nbsp;</small>
                            <?php
                            if (!is_null($skripsi['tgl_awal'])) {
                            ?>
                                Dimulai <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($skripsi['tgl_awal']))) ?></h1> s.d. <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($skripsi['tgl_akhir']))) ?></h1>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                KKL Individu
                            </h2>
                            <small>&nbsp;</small>
                            <?php
                            if (!is_null($individu['tgl_awal'])) {
                            ?>
                                Dimulai <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($individu['tgl_awal']))) ?></h1> s.d. <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($individu['tgl_akhir']))) ?></h1>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget blue-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                KKL Kelompok
                            </h2>
                            <small>&nbsp;</small>
                            <?php
                            if (!is_null($kelompok['tgl_awal'])) {
                            ?>
                                Dimulai <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($kelompok['tgl_awal']))) ?></h1> s.d. <h1 class="font-bold"><?php echo date_indo(date("Y-m-d", strtotime($kelompok['tgl_akhir']))) ?></h1>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>