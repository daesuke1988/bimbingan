<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Formulir Laporan Skripsi
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('message')) {
                echo "<i>" . $this->session->flashdata('message') . "</i>";
            }
            ?>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label> Judul Skripsi</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Skripsi" value="<?php echo $upload['judul']; ?>" required>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                    <?php echo form_error('judul') ?>
                </div>
                <div class="form-group">
                    <label>Tahun </label>
                    <input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun Aktif" value="<?php echo $upload['tahun']; ?>" required>
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
                    <label>Upload Cover </label>
                    <div class="custom-file">
                        <input type="file" name="file_cover" class="form-control" accept="application/pdf">
                    </div>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                    <?php echo @$error_upload; ?>
                    <div class="tooltip-demo">
                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>upload/download_cover/<?php echo $upload['id']; ?>">
                            <i class="fa fa-download"> Download</i>
                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Pengesahan </label>
                    <div class="custom-file">
                        <input type="file" name="file_pengesahan" class="form-control" accept="application/pdf">
                    </div>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                    <?php echo @$error_upload_pengesahan; ?>
                    <div class="tooltip-demo">
                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>upload/download_pengesahan/<?php echo $upload['id']; ?>">
                            <i class="fa fa-download"> Download</i>
                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-sm" type="submit">Simpan <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>