<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Penambahan Data Pengguna
        </div>
        <div class="panel-body">
            <form name="form1" method="post" action="<?= base_url() ?>users/insert" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Nama Pengguna</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Nama Pengguna" name="username" value="<?php echo $this->input->post('username'); ?>">
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('username') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Nama Lengkap" name="nama_lengkap" value="<?php echo $this->input->post('nama_lengkap'); ?>">
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('nama_lengkap') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Role Pengguna</label>
                    <div class="col-sm-9">
                        <select class="chosen-select" tabindex="2" name="id_role">
                            <option value="">:: Pilih Role ::</option>
                            <?php
                            foreach ($groups->result() as $rows) {
                                echo "<option value='$rows->id'>$rows->name</option>";
                            }
                            ?>
                        </select>
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('id_role') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Status Pengguna</label>
                    <div class="col-sm-9">
                        <select name='is_active' class="chosen-select">
                            <option value='t'>Aktif</option>
                            <option value='f'>Non Aktif</option>
                        </select>
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('is_active') ?>
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
                        <input type="password" id="password" class="form-control" name="password_conf">
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('password_conf'); ?>
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