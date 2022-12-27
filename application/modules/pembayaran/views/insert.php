<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Penambahan Data Pembayaran
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url(); ?>pembayaran/insert">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Nama</label>
                    <div class="col-sm-9">
                        <select data-placeholder="Choose a Country..." class="chosen-select" name="nim" tabindex="2">
                            <option value="">Pilih No Mahasiswa</option>
                            <?php
                            foreach ($mhs->result() as $row) {
                            ?>
                                <option value="<?php echo $row->nim . ':' . $row->namamhs; ?>"><?php echo $row->nim . ' - ' . $row->namamhs; ?></option>
                            <?php
                            }
                            ?>

                        </select>
                        <?php echo form_error('nim') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Jenis Pembayaran</label>
                    <div class="col-sm-9">
                        <select data-placeholder="Choose a Country..." class="chosen-select" name="jenis" tabindex="2">
                            <option value="Kerja Praktek">Kerja Praktek</option>
                            <option value="KKL">KKL</option>
                            <option value="Skripsi">Skripsi</option>
                        </select>
                        <?php echo form_error('jenis') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Tahun</label>
                    <div class="col-sm-9">
                        <select data-placeholder="Choose a Country..." class="chosen-select" name="tahun" tabindex="2">
                            <?php
                            $date = date('Y');
                            for ($i = $date - 1; $i < $date + 2; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <?php echo form_error('tahun') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Semester</label>
                    <div class="col-sm-9">
                        <select data-placeholder="Choose a Country..." class="chosen-select" name="semester" tabindex="2">
                            <option value="1">Ganjil</option>
                            <option value="2">Genap</option>
                        </select>
                        <?php echo form_error('semester') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Simpan</button>
                    <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                        <i class="fa fa-mail-reply"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>