<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Form Validasi Pendaftaran Kerja Praktek</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <table class="table">
                        <tr>
                            <td valign="top" width="30%">
                                <div class="photos">
                                    <img alt="image" class="feed-photo" src="<?php echo base_url(); ?>assets/img/gallery/12.jpg">
                                </div>
                            </td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr class="bg-info">
                                            <td colspan="3">Profil Mahasiswa</td>
                                        </tr>
                                        <tr>
                                            <td width='30%'>No. Mahasiswa</i></td>
                                            <td><?php echo $profile['nim']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $profile['nm_mhs']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Prodi</td>
                                            <td><?php echo $profile['nm_prodi']; ?></td>
                                        <tr>
                                            <td>SKS Total</td>
                                            <td><?php echo ($akademik['sks_total'] >= 110) ? $akademik['sks_total'] . ' <i class="fa fa-check-square text-navy"></i>' : $akademik['sks_total'] . ' <i class="fa fa-close text-danger"></i> (SKS Total Kurang dari atau sama dengan 110)' ?></td>
                                        </tr>
                                        <tr>
                                            <td>IPK</td>
                                            <td> <?php echo ($akademik['ipk'] >= 2.00) ? round($akademik['ipk'], 2) . ' <i class="fa fa-check-square text-navy"></i>' : round($akademik['ipk'], 2) . ' <i class="fa fa-close text-danger"></i> (IPK Kurang dari atau sama dengan 2.00)'; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Matakuliah</td>
                                            <td> <?php echo empty($krs['nm_mk']) ? 'Anda Belum Mengambil Matakuliah <strong><font color="red"> Kerja Praktek </font></strong> Pada Semester Ini' : $krs['nm_mk'] . ' <i class="fa fa-check-square text-navy"></i> '; ?></td>
                                        </tr>
                                        <?php
                                        if ($link) {
                                        ?>
                                            <tr>
                                                <td>Link Pendaftaran</td>
                                                <td><?php echo $link ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>