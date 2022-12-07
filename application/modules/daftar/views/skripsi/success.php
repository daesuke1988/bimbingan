<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Formulir Pendaftaran Skripsi
        </div>
        <div class="panel-body">
            <div class="alert alert-success">
                Pengajuan Skripsi Berhasil
            </div>
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
                        <!-- <div class="form-group">
                                        <label>Tahun Akademik</label>
                                        <input type="text" class="form-control" value="<?php //echo $krs['tahun']; 
                                                                                        ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengambilan Semester</label>
                                        <input type="text" class="form-control" value="<?php //echo ($krs['semester'] == '1') ? 'Ganjil' : 'Genap'; 
                                                                                        ?>" disabled>
                                    </div> -->
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
                        <form>
                            <div class="form-group">
                                <label>Usulan Dosen Pembimbing 1</label>
                                <input type="text" class="form-control" name="" placeholder="Masukan Rencana Judul Skripsi" value="<?php echo $pengajuan['nm_dosen1']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Usulan Dosen Pembimbing 2</label>
                                <input type="text" class="form-control" name="" placeholder="Masukan Rencana Judul Skripsi" value="<?php echo $pengajuan['nm_dosen2']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Rencana Judul Skripsi</label>
                                <input type="text" class="form-control" name="" placeholder="Masukan Rencana Judul Skripsi" value="<?php echo $pengajuan['judul']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon yang dapat dihubungi </label>
                                <input type="number" class="form-control" name="" placeholder="Masukan Nomor Telpon Aktif" value="<?php echo $pengajuan['telpon']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tahun </label>
                                <input type="number" class="form-control" name="" placeholder="Masukan Tahun Aktif" value="<?php echo $pengajuan['tahun']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Semester </label>
                                <input type="text" class="form-control" name="" placeholder="Masukan Tahun Aktif" value="<?php echo ($pengajuan['semester'] == '1') ? 'Ganjil' : 'Genap'; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Status Skripsi </label>
                                <input type="text" class="form-control" name="" placeholder="Masukan Tahun Aktif" value="<?php echo ($pengajuan['status_pendaftar'] == '1') ? 'Baru' : 'Lanjut'; ?>" disabled>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade">
    <!--    <div id="cariDialog" title="Detail">-->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width: 80%;">
            <!-- Modal content-->
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"> Detail Dokumen</h4>
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
<script>
    var $modal = '';
    // jQuery.noConflict();
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
</script>