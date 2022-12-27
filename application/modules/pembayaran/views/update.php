<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Perubahan Data Pembayaran
        </div>
        <div class="panel-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">No Mahasiswa</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $pembayaran['nim'] ?>" disabled>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Nama Mahasiswa</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $pembayaran['nama'] ?>" disabled>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Jenis Pembayaran <?php echo $pembayaran['jenis_pembayaran'] ?></label>
                    <div class="col-sm-9">
                        <select data-placeholder="Choose a Country..." class="chosen-select" name="jenis" tabindex="2">
                            <?php
                            if ($pembayaran['jenis_pembayaran'] == 'Kerja Praktek') {
                            ?>
                                <option value="Kerja Praktek" selected>Kerja Praktek</option>
                                <option value="KKL">KKL</option>
                                <option value="Skripsi">Skripsi</option>
                            <?php
                            } else if ($pembayaran['jenis_pembayaran'] == 'KKL') {
                            ?>
                                <option value="Kerja Praktek">Kerja Praktek</option>
                                <option value="KKL" selected>KKL</option>
                                <option value="Skripsi">Skripsi</option>
                            <?php
                            } else if ($pembayaran['jenis_pembayaran'] == 'Skripsi') {
                            ?>
                                <option value="Kerja Praktek">Kerja Praktek</option>
                                <option value="KKL">KKL</option>
                                <option value="Skripsi" selected>Skripsi</option>
                            <?php
                            }
                            ?>

                        </select>
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
                                $dates = $pembayaran['tahun'];
                                if ($i == $dates) {
                                    $selected = "selected";
                                } else {
                                    $selected = "";
                                }
                                echo "<option value='$i' $selected>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Semester</label>
                    <div class="col-sm-9">
                        <select data-placeholder="Choose a Country..." class="chosen-select" name="semester" tabindex="2">
                            <?php
                            if ($pembayaran['semester'] == '1') {
                            ?>
                                <option value="1" selected>Ganjil</option>
                                <option value="2">Genap</option>
                            <?php
                            } else {
                            ?>
                                <option value="1">Ganjil</option>
                                <option value="2" selected>Genap</option>
                            <?php
                            }
                            ?>
                        </select>
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