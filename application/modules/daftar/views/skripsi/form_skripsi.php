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
                        <form method="post" action="<?php echo base_url(); ?>daftar/skripsi/insert" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Usulan Dosen Pembimbing 1</label>
                                <select class="select2_demo_1 form-control" name="dosen1" id="dosen1">
                                    <option value=""> :: Pilih Dosen :: </option>
                                    <?php
                                    foreach ($dosen as $key => $row) {
                                        echo '<option value="' . $row['id'] . '"> ' . $row['nm_dosen'] . ' </option>';
                                    }
                                    ?>
                                </select>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('dosen1') ?>
                            </div>
                            <div class="form-group">
                                <label>Usulan Dosen Pembimbing 2</label>
                                <select class="select2_demo_1 form-control" name="dosen2" id="dosen2">
                                    <option value=""> :: Pilih Dosen :: </option>
                                    <?php
                                    foreach ($dosen as $key => $row) {
                                        echo '<option value="' . $row['id'] . '"> ' . $row['nm_dosen'] . ' </option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rencana Judul Skripsi</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukan Rencana Judul Skripsi" value="<?php echo $this->input->post('judul'); ?>" required>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('judul') ?>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon yang dapat dihubungi </label>
                                <input type="number" class="form-control" name="telpon" placeholder="Masukan Nomor Telpon Aktif" value="<?php echo $this->input->post('telpon'); ?>" required>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('telpon') ?>
                            </div>
                            <div class="form-group">
                                <label>Tahun </label>
                                <input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo $this->input->post('tahun'); ?>" required>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('tahun') ?>
                            </div>
                            <div class="form-group">
                                <label>Semester </label>
                                <select class="select2_demo_1 form-control" name="semester" id="semester" required>
                                    <option value="1"> Ganjil </option>
                                    <option value="2"> Genap </option>
                                </select>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('semester') ?>
                            </div>
                            <div class="form-group">
                                <label>Status Skripsi</label>
                                <select class="select2_demo_1 form-control" name="status_pendaftar" id="status_pendaftar" required>
                                    <option value="1"> Baru </option>
                                    <option value="2"> Lanjut </option>
                                </select>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo form_error('status_pendaftar') ?>
                            </div>
                            <div class="form-group">
                                <label>Upload Dokumen Pendukung </label>
                                <div class="custom-file">
                                    <input type="file" name="file_pendukung" class="form-control" accept="application/pdf" required>
                                </div>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo @$error_upload; ?>
                            </div>
                            <div class="form-group">
                                <label>Upload Dokumen Proposal </label>
                                <div class="custom-file">
                                    <input type="file" name="file_proposal" class="form-control" accept="application/pdf" required>
                                </div>
                                <span class="form-text m-b-none">
                                    <font color="red">wajib diisi.*</font>
                                </span>
                                <?php echo @$error_upload_proposal; ?>
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