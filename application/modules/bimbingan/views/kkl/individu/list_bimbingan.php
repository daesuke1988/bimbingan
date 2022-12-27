<link href="<?php echo base_url(); ?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Riwayat Bimbingan
        </div>
        <div class="panel-body">
            <?php
            if ($approv) {
            ?>
                <a class="btn btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Cetak Riwayat Bimbingan" href="<?php echo base_url(); ?>bimbingan/kkl/cetak_pdf_bimbingan_individu/<?php echo urlencode(base64_encode($id_kkl)); ?>" target="_blank">
                    <i class="fa fa-print"></i> Cetak Bimbingan
                </a>
                <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                    <i class="fa fa-mail-reply"></i> Kembali
                </a>
                <?php
            } else {
                if ($role == '4') {
                    if (strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                ?>
                        <form class="form-horizontal" action="">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="col-form-label" for="cname">Izinkan akses lembar bimbingan dosen untuk mahasiswa?</label>
                                </div>
                                <div class="col-sm-4">
                                    <?php
                                    if ($detail['flag_open'] == 't') {
                                    ?>
                                        <a class='btn btn-success' data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="confirmOpen('<?php echo $id_kkl; ?>')"> <i class="fa fa-thumbs-up"></i> Ya </a>
                                        <a class='btn btn-default' data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="confirmClose('<?php echo $id_kkl; ?>')"> <i class="fa fa-thumbs-down"></i> Tidak </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a class='btn btn-default' data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="confirmOpen('<?php echo $id_kkl; ?>')"><i class="fa fa-thumbs-up"></i> Ya </a>
                                        <a class='btn btn-danger' data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="confirmClose('<?php echo $id_kkl; ?>')"><i class="fa fa-thumbs-down"></i> Tidak </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                        <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/acc_individu" enctype="multipart/form-data">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">
                                <i class="fa fa-comments"></i> Bimbingan Dosen
                            </button>
                            <?php
                            if ($count['total'] >= '1') {
                            ?>
                                <input type="hidden" name="id_kkl" value="<?php echo $id_kkl; ?>">
                                <button class="btn btn-info" type="submit"><i class="fa fa-arrow-circle-right"></i> Acc </button>
                            <?php
                            }
                            ?>
                            <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                                <i class="fa fa-mail-reply"></i> Kembali
                            </a>
                        </form>
                    <?php

                    } else {
                        echo '<div class="alert alert-warning">
                                    Waktu Bimbingan Telah Berakhir.
                                </div>';
                    }
                } elseif ($role == '5') {
                    // echo '<form class="form-horizontal" action="">';
                    if (strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                        if ($detail['flag_open'] == 't') {
                            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_dosen"> <i class="fa fa-comments"></i> Bimbingan Dosen</button>';
                        }
                    ?>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5"><i class="fa fa-comments"></i> Bimbingan</button>
                        <button type="button" class="btn btn-default" data-original-title="Kembali" href="javascript:window.history.go(-1);"><i class="fa fa-mail-reply"></i> Kembali</button>
                    <?php
                    } else {
                        echo '<button type="button" class="btn btn-default" data-original-title="Kembali" href="javascript:window.history.go(-1);"><i class="fa fa-mail-reply"></i> Kembali</button>';
                        echo '<div class="alert alert-warning">
                        Waktu Bimbingan Telah Berakhir.
                    </div>';
                    }
                    ?>
            <?php
                }
            }
            ?>

            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width: 80%;">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/insert_individu" enctype="multipart/form-data">
                            <input type="hidden" name="id_kkl" value="<?php echo $id_kkl; ?>">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Form Bimbingan</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Catatan </label>
                                    <textarea type="text" class="form-control" name="catatan" placeholder="Isikan Catatan" value="" required><?php echo $this->input->post('catatan'); ?></textarea>
                                    <span class="form-text m-b-none">
                                        <font color="red">wajib diisi.*</font>
                                    </span>
                                    <?php echo form_error('catatan') ?>
                                </div>
                                <div class="form-group">
                                    <label>Upload Dokumen </label>
                                    <div class="custom-file">
                                        <input type="file" name="file_pendukung" class="form-control">
                                    </div>
                                    <?php echo @$error_upload; ?>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal inmodal fade" id="myModal_dosen" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width: 80%;">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/insert_individu_dosenmhs" enctype="multipart/form-data">
                            <input type="hidden" name="id_kkl" value="<?php echo $id_kkl; ?>">
                            <input type="hidden" name="xxx" value="<?php echo $id_userdosen['id']; ?>">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Form Bimbingan Dosen</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Catatan </label>
                                    <textarea type="text" class="form-control" name="catatan" placeholder="Isikan Catatan" value="" required><?php echo $this->input->post('catatan'); ?></textarea>
                                    <span class="form-text m-b-none">
                                        <font color="red">wajib diisi.*</font>
                                    </span>
                                    <?php echo form_error('catatan') ?>
                                </div>
                                <div class="form-group">
                                    <label>Upload Dokumen </label>
                                    <div class="custom-file">
                                        <input type="file" name="file_pendukung" class="form-control">
                                    </div>
                                    <?php echo @$error_upload; ?>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            if ($this->session->flashdata('message')) {
                echo "<i>" . $this->session->flashdata('message') . "</i>";
            }
            echo @$error_upload;
            ?>
            <div class="hr-line-dashed"></div>
            <strong>
                <h2><i class="fa text-success">Catatan Bimbingan Kuliah Kerja Lapangan </i></h2>
            </strong>
            <strong>
                <h3>Jumlah Bimbingan : <?php echo $count['total']; ?> Kali </h3>
            </strong>
            <div class="hr-line-dashed"></div>
            <div class="alert alert-warning">
                <b>Bimbingan pada tanggal yang sama dihitung 1 kali bimbingan !!!</b>
            </div>
            <div class="hr-line-dashed"></div>
            <div id="vertical-timeline" class="vertical-container dark-timeline">
                <?php
                foreach ($bimbingan->result() as $row) {
                    if ($row->role == '5') {
                ?>
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon blue-bg">
                                <i class="fa fa-file-text"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <div class="tooltip-demo">
                                    <h2><?php echo $row->nama_lengkap; ?></h2>
                                    <p><?php echo $row->catatan; ?></p>
                                    <?php
                                    if (!is_null($row->image)) {
                                    ?>
                                        <a class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>bimbingan/kkl/download_file_bimbingan/<?php echo $row->id; ?>">
                                            <i class="fa fa-download"> Download document</i>
                                        </a>
                                        <?php
                                    }
                                    if ($approv && strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                                        echo '';
                                    } else {
                                        if (strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                                        ?>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $row->id; ?>">
                                                <i class="fa fa-edit"> Ubah </i>
                                            </button>
                                            <a class='btn btn-danger' data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="confirmDelete('<?php echo $id_kkl . ':' . $row->id; ?>')"> <i class="fa fa-trash"> Hapus </i> </a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <span class="vertical-date">
                                    <small><?php echo longdate_indo(date("Y-m-d", strtotime($row->date))) ?></small>
                                </span>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon yellow-bg">
                                <i class="fa fa-user-md"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <div class="tooltip-demo">
                                    <h2><?php echo $row->nama_lengkap; ?></h2>
                                    <p><?php echo $row->catatan; ?></p>
                                    <?php
                                    if (!is_null($row->image)) {
                                    ?>
                                        <a class="btn btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>bimbingan/kkl/download_file_bimbingan/<?php echo $row->id; ?>">
                                            <i class="fa fa-download"> Download document</i>
                                        </a>
                                        <?php
                                    }
                                    if ($approv) {
                                        echo '';
                                    } else {
                                        if (strtotime($sk['end']) >= strtotime(date("d-m-Y"))) {
                                        ?>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $row->id; ?>">
                                                <i class="fa fa-edit"> Ubah </i>
                                            </button>
                                            <a class='btn btn-danger' data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="confirmDelete('<?php echo $id_kkl . ':' . $row->id; ?>')"> <i class="fa fa-trash"> Hapus </i> </a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <span class="vertical-date">
                                    <small><?php echo longdate_indo(date("Y-m-d", strtotime($row->date))) ?></small>
                                </span>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="modal inmodal fade" id="myModal<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="width: 80%;">
                            <div class="modal-content">
                                <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/update_individu" enctype="multipart/form-data">
                                    <input type="hidden" name="id_bimbingan" value="<?php echo $row->id; ?>">
                                    <input type="hidden" name="id_kkl" value="<?php echo $id_kkl; ?>">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Form Bimbingan</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Catatan </label>
                                            <textarea type="text" class="form-control" name="catatan" placeholder="Isikan Catatan" value="" required><?php echo $row->catatan; ?></textarea>
                                            <span class="form-text m-b-none">
                                                <font color="red">wajib diisi.*</font>
                                            </span>
                                            <?php echo form_error('catatan') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Dokumen </label>
                                            <div class="custom-file">
                                                <input type="file" name="file_pendukung" class="form-control">
                                            </div>
                                            <?php echo @$error_upload; ?>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>
<!-- Sweet alert -->
<script src="<?php echo base_url(); ?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
<script>
    function confirmDelete(id) {
        swal({
                title: "Apakah anda yakin?",
                text: "Apakah anda yakin akan menghapus data ini!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Tidak, Batal Hapus!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?php echo base_url('bimbingan/kkl/delete'); ?>",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: "html",
                        success: function() {
                            swal({
                                title: "Berhasil",
                                text: "Data Bimbingan Berhasil Dihapus!",
                                type: "success",
                                confirmButtonText: "Ok !",
                                allowOutsideClick: "true"
                            }, function() {
                                location.reload();
                            })
                        }
                    });
                } else {
                    swal("Data Bimbingan Masih Tersimpan!", "", "error");
                }
            });
    }

    function confirmOpen(id) {
        swal({
                title: "Apakah anda yakin?",
                text: "Apakah anda yakin akan membuka bimbingan dosen!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya!",
                cancelButtonText: "Tidak!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?php echo base_url('bimbingan/kkl/set_dialog_individu'); ?>",
                        type: "POST",
                        data: {
                            id: id,
                            confirm: 't'
                        },
                        dataType: "html",
                        success: function() {
                            swal({
                                title: "Berhasil",
                                text: "Kotak Bimbingan Dosen Berhasil Dibuka!",
                                type: "success",
                                confirmButtonText: "Ok !",
                                allowOutsideClick: "true"
                            }, function() {
                                location.reload();
                            })
                        }
                    });
                } else {
                    swal("Kotak Bimbingan Dosen Berhasil Tertutup!", "", "error");
                }
            });
    }

    function confirmClose(id) {
        swal({
                title: "Apakah anda yakin?",
                text: "Apakah anda yakin akan menutup bimbingan dosen!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya!",
                cancelButtonText: "Tidak!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?php echo base_url('bimbingan/kkl/set_dialog_individu'); ?>",
                        type: "POST",
                        data: {
                            id: id,
                            confirm: 'f'
                        },
                        dataType: "html",
                        success: function() {
                            swal({
                                title: "Berhasil",
                                text: "Kotak Bimbingan Dosen Berhasil Ditutup!",
                                type: "success",
                                confirmButtonText: "Ok !",
                                allowOutsideClick: "true"
                            }, function() {
                                location.reload();
                            })
                        }
                    });
                } else {
                    swal("Kotak Bimbingan Dosen Masih Terbuka!", "", "error");
                }
            });
    }
</script>