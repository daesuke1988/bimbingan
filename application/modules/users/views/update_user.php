<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Perubahan Data Pengguna
        </div>
        <div class="panel-body">
            <?php
            $row = $user->row();
            echo form_open_multipart('users/update/' . urlencode(base64_encode($row->id_user)), 'class="form-horizontal"');
            ?>

            <?php
            if ($this->session->flashdata('message')) {
                echo "<i>" . $this->session->flashdata('message') . "</i>";
            }
            ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="cname">Nama Pengguna</label>
                <div class="col-sm-9">
                    <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Nama Pengguna" name="username" value="<?php echo $row->username; ?>">
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
                    <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Nama Lengkap" name="nama_lengkap" value="<?php echo $row->nama_lengkap; ?>">
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
                            $id_groups = $row->id_groups;
                            if ($rows->id == $id_groups) {
                                $selected = "selected";
                            } else {
                                $selected = "";
                            }
                            echo "<option value='$rows->id' $selected>$rows->name</option>";
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