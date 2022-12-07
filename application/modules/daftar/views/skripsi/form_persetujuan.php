<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Formulir Pendaftaran Skripsi
        </div>
        <div class="panel-body">
            <div class="col-lg-5">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Biodata Mahasiswa
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label><img alt="image" class="feed-photo" src="<?php echo base_url(); ?>assets/img/gallery/12.jpg"></label>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="<?php echo $profile['nm_mhs']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>No. Mahasiswa</label>
                            <input type="text" class="form-control" value="<?php echo $profile['nim']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <input type="text" class="form-control" value="<?php echo $profile['nm_prodi']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>SKS Total</label>
                            <input type="text" class="form-control" value="<?php echo $akademik['sks_total']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>IPK</label>
                            <input type="text" class="form-control" value="<?php echo round($akademik['ipk'], 2); ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tahun Akademik</label>
                            <input type="text" class="form-control" value="<?php echo $pengajuan['tahun']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Pengambilan Semester</label>
                            <input type="text" class="form-control" value="<?php echo ($pengajuan['semester'] == '1') ? 'Ganjil' : 'Genap'; ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Formulir Pendaftaran Skripsi
                    </div>
                    <div class="panel-body">
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo "<i>" . $this->session->flashdata('message') . "</i>";
                        }
                        ?>
                        <form method="post" action="<?php echo base_url(); ?>daftar/skripsi/persetujuan/<?php echo urlencode(base64_encode($pengajuan['id_skripsi'])); ?>" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Rencana Judul Skripsi</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukan Rencana Judul Skripsi" value="<?php echo $pengajuan['judul']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon yang dapat dihubungi </label>
                                <input type="number" class="form-control" name="telpon" placeholder="Masukan Nomor Telpon Aktif" value="<?php echo $pengajuan['telpon']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tahun </label>
                                <input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo $pengajuan['tahun']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Semester </label>
                                <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo ($pengajuan['semester'] == '1') ? 'Ganjil' : 'Genap'; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Dokumen Syarat </label>
                                <?php
                                if (!is_null($pengajuan['image_syarat'])) { ?>
                                    <div class="tooltip-demo">
                                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>daftar/skripsi/download/<?php echo $pengajuan['id_skripsi']; ?>">
                                            <i class="fa fa-download"> Download</i>
                                        </a>
                                        <a class="btn btn-outline btn-primary" onclick="showDetail(<?php echo $pengajuan['id_skripsi']; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Detail File"><i class="fa fa-download"> Detail file </i></a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <label>Dokumen Proposal </label>
                                <?php
                                if (!is_null($pengajuan['image_proposal'])) { ?>
                                    <div class="tooltip-demo">
                                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>daftar/skripsi/download_proposal/<?php echo $pengajuan['id_skripsi']; ?>">
                                            <i class="fa fa-download"> Download</i>
                                        </a>
                                        <a class="btn btn-outline btn-primary" onclick="showDetail_proposal(<?php echo $pengajuan['id_skripsi']; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Detail File"><i class="fa fa-download"> Detail file </i></a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label>Usulan Dosen Pembimbing 1</label>
                                <div class="col-sm-12">
                                    <div class="col-md-8">
                                        <select class="select2_demo_1 form-control" name="dosen1" id="dosen1">
                                            <?php
                                            foreach ($dosen as $key => $row) {
                                                $id_dosen = $pengajuan['id_dosen1'];
                                                if ($row['id'] == $id_dosen) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo '<option value="' . $row['id'] . '" ' . $selected . '> ' . $row['nm_dosen'] . ' </option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="select2_demo_1 form-control" name="status1" id="dosen1" required>
                                            <option value=""> :: Pilih Pesertujuan :: </option>
                                            <option value="t"> Setuju </option>
                                            <option value="f"> Tidak Setuju </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Usulan Dosen Pembimbing 2</label>
                                <div class="col-sm-12">
                                    <div class="col-md-8">
                                        <select class="select2_demo_1 form-control" name="dosen2" id="dosen2">
                                            <?php
                                            foreach ($dosen as $key => $row) {
                                                $id_dosen2 = $pengajuan['id_dosen2'];
                                                if ($row['id'] == $id_dosen2) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo '<option value="' . $row['id'] . '" ' . $selected . '> ' . $row['nm_dosen'] . ' </option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="select2_demo_1 form-control" name="status2" id="status2">
                                            <option value=""> :: Pilih Pesertujuan :: </option>
                                            <option value="t"> Setuju </option>
                                            <option value="f"> Tidak Setuju </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label>Nomor SK </label>
                                <input type="number" class="form-control" name="no_sk" placeholder="Masukan Nomor SK Kerja Praktek" value="<?php echo $this->input->post('no_sk'); ?>">
                                <?php echo form_error('no_sk') ?>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-normal">Tanggal Awal</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_awal" value="">
                                </div>
                                <?php echo form_error('tgl_awal') ?>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-normal">Tanggal Akhir</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_akhir" value="">
                                </div>
                                <?php echo form_error('tgl_akhir') ?>
                            </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <input type="hidden" name="id_skripsi" value="<?php echo $pengajuan['id_skripsi']; ?>">
                            <button class="btn btn-success btn-sm" type="submit" name="approv_kaprodi" value="t">Setuju <i class="fa fa-arrow-circle-right"></i></button>
                            <button class="btn btn-danger btn-sm" type="submit" name="approv_kaprodi" value="f">Tidak Setuju <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade">
    <!--    <div id="cariDialog" title="Detail">-->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width: 75%;">
            <!-- Modal content-->
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"> Detail Dokumen Pendukung</h4>
                </div>
                <div class="modal-body" id="record">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data picker -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<script>
    var $modal = '';
    // jQuery.noConflict();
    $(document).ready(function() {
        $modal = $('#myModal').modal({
            show: false
        });

    });

    $(document).ready(function() {
        $modal = $('#myModal').modal({
            show: false
        });

    });

    function showDetail(id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('daftar/skripsi/detail_file_syarat'); ?>',
            cache: false,
            data: {
                id_file: id
            },
            dataType: 'html',
            success: function(data) {
                $modal.find('#record').html(data);
                $modal.modal('show');
            },

            error: function(xhr, status, msg_error) {
                $modal.find('#record').html("");
                alert("Data gagal ditampilkan. \n " + msg_error);
                return false;
            }
        });
    }

    function showDetail_proposal(id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('daftar/skripsi/detail_file_proposal'); ?>',
            cache: false,
            data: {
                id_file: id
            },
            dataType: 'html',
            success: function(data) {
                $modal.find('#record').html(data);
                $modal.modal('show');
            },

            error: function(xhr, status, msg_error) {
                $modal.find('#record').html("");
                alert("Data gagal ditampilkan. \n " + msg_error);
                return false;
            }
        });
    }

    $('#data_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });
</script>