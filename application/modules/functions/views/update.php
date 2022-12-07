<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Perubahan Data Fungsi
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> URL </label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" name="url" value="<?php echo $functions['name']; ?>">
                        <?php echo form_error('url'); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> Deskripsi URL </label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" name="desc" value="<?php echo $functions['desc']; ?>">
                        <?php echo form_error('desc'); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> Kode </label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" name="kode" value="<?php echo $functions['kode']; ?>">
                        <?php echo form_error('kode'); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> Status </label>
                    <div class="col-sm-9">
                        <select class="form-control" id="dropdown" style="width: 50%;" name='status'>
                            <?php
                            if ($functions['menu'] == 't') {
                                echo "<option value='t' selected>Aktif</option>
                                                <option value='f'>Non Aktif</option>";
                            } else if ($functions['menu'] == 'f') {
                                echo "<option value='t'>Aktif</option>
                                                <option value='f' selected>Non Aktif</option>";
                            }
                            ?>
                        </select>
                        <?php echo form_error('status'); ?>
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
</div>
</div>