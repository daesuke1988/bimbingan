<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Penambahan Data Dosen
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url(); ?>dosen/insert">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Gelar depan</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Gelar Depan" name="gelar_depan" value="<?php echo $this->input->post('gelar_depan'); ?>">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Nama</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Nama Dosen" name="nama" value="<?php echo $this->input->post('nama'); ?>">
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('nama') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">Gelar Belakang</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Gelar Belakang" name="gelar_belakang" value="<?php echo $this->input->post('gelar_belakang'); ?>">
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('gelar_belakang') ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">NIP</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan NIP Dosen" name="nip" value="<?php echo $this->input->post('nip'); ?>">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cname">NPP</label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan NPP Dosen" name="npp" value="<?php echo $this->input->post('npp'); ?>">
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