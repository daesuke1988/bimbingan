<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Formulir Pendaftaran Kuliah Kerja Lapangan
        </div>
        <div class="panel-body">
            <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                <i class="fa fa-mail-reply"></i> Kembali
            </a>
            <hr>
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
                                                                                        ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengambilan Semester</label>
                                        <input type="text" class="form-control" value="<?php //echo ($krs['semester'] == '1') ? 'Ganjil' : 'Genap'; 
                                                                                        ?>">
                                    </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Formulir Pendaftaran Kuliah Kerja Lapangan
                    </div>
                    <div class="panel-body">
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo "<i>" . $this->session->flashdata('message') . "</i>";
                        }
                        ?>
                        <form method="post" action="<?php echo base_url(); ?>daftar/kkl/update/<?php echo urlencode(base64_encode($pengajuan['id'])); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Rencana Judul Kuliah Kerja Lapangan</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukan Rencana Judul Kuliah Kerja Lapangan" value="<?php echo $pengajuan['judul']; ?>">
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('judul') ?>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Kuliah Kerja Lapangan </label>
                                <textarea type="text" class="form-control" name="lokasi" placeholder="Lokasi Kuliah Kerja Lapangan"> <?php echo $pengajuan['lokasi']; ?></textarea>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('lokasi') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat Rencana Lokasi Kuliah Kerja Lapangan </label>
                                <textarea type="text" class="form-control" name="alamat_kkl" placeholder="Masukan Alamat Rencana Lokasi Kuliah Kerja Lapangan"> <?php echo $pengajuan['alamat_kkl']; ?></textarea>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('alamat_kkl') ?>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon yang dapat dihubungi </label>
                                <input type="number" class="form-control" name="telpon" placeholder="Masukan Nomor Telpon Aktif" value="<?php echo $pengajuan['telpon']; ?>">
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('telpon') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea type="text" class="form-control" name="alamat_dihub" placeholder="Alamat yang bisa dihubungi" value=""><?php echo $pengajuan['alamat_dihub']; ?></textarea>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('alamat_dihub') ?>
                            </div>
                            <div class="form-group">
                                <label>Tahun </label>
                                <input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo $pengajuan['tahun']; ?>">
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('tahun') ?>
                            </div>
                            <div class="form-group">
                                <label>Semester </label>
                                <select class="select2_demo_1 form-control" name="semester" id="semester">
                                    <?php
                                    if ($pengajuan['semester'] == '1') {
                                    ?>
                                        <option value="1" selected> Ganjil </option>
                                        <option value="2"> Genap </option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="1"> Ganjil </option>
                                        <option value="2" selected> Genap </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori KKL</label>
                                <select class="select2_demo_1 form-control" name="kategori" id="kategori">
                                    <?php
                                    if ($pengajuan['kategori'] == 'i') {
                                    ?>
                                        <option value="i" selected> Individu </option>
                                        <option value="k"> Kelompok </option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="1"> Ganjil </option>
                                        <option value="2" selected> Genap </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('kategori') ?>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="select2_demo_1 form-control" name="kelas" id="kelas">

                                    <?php
                                    if ($pengajuan['kelas'] == 'siang') {
                                    ?>
                                        <option value=""> :: Pilih Kelas :: </option>
                                        <option value="siang" selected> Siang </option>
                                        <option value="malam"> Malam </option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value=""> :: Pilih Kelas :: </option>
                                        <option value="siang"> Siang </option>
                                        <option value="malam" selected> Malam </option>
                                    <?php
                                    }
                                    ?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label>Upload Dokumen Pendukung </label>
                                <div class="custom-file">
                                    <input type="file" name="file_pendukung" class="form-control">
                                </div>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo @$error_upload; ?>
                            </div>
                            <div class="form-group">
                                <label>Dokumen Pendukung </label>
                                <?php
                                if (!is_null($pengajuan['image'])) { ?>
                                    <div class="tooltip-demo">
                                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>daftar/kkl/download/<?php echo $pengajuan['id']; ?>">
                                            <i class="fa fa-download"> Download</i>
                                        </a>
                                        <a class="btn btn-outline btn-primary" onclick="showDetail(<?php echo $pengajuan['id']; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Detail File"><i class="fa fa-download"> Detail file </i></a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit">Simpan <i class="fa fa-arrow-circle-right"></i></button>
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
            url: '<?php echo base_url('daftar/kkl/detail_file'); ?>',
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