<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Perubahan Password
        </div>
        <div class="panel-body">
            <?php
            $row = $users->row();
            echo form_open_multipart('users/update_password/' . urlencode(base64_encode($row->id_user)), 'class = "form-horizontal"');
            ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cname">Nama Pengguna</label>
                <div class="col-sm-9">
                    <input id="form-field-1" class="form-control" type="text" value="<?php echo $row->username; ?>" disabled>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cname">Password</label>
                <div class="col-sm-9">
                    <input type="password" id="password" class="form-control" name="password">
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                    <?php echo form_error('password') ?>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cname">Konfirmasi Password</label>
                <div class="col-sm-9">
                    <input type="password" id="password" class="form-control" name="password_conf"><?php echo form_error('password_conf'); ?>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                    <?php echo form_error('password') ?>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Simpan</button>
                <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                    <i class="fa fa-mail-reply"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>