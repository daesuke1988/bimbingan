<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Penambahan Data Function
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>functions/insert" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> URL </label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan URL" name="name" value="<?php echo $this->input->post('name'); ?>"><?php echo form_error('name'); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">Nama URL </label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="Isikan Nama Menu" name="desc" id="desc" value="<?php echo $this->input->post('desc'); ?>"><?php echo form_error('desc'); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> Kode </label>
                    <div class="col-sm-9">
                        <input id="form-field-1" class="form-control" type="text" placeholder="" name="kode" id="kode" value="<?php echo $this->input->post('kode'); ?>"><?php echo form_error('kode'); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1"> Satus </label>
                    <div class="col-sm-9">
                        <select class="form-control" id="dropdown" style="width: 50%;" name='menu'>
                            <option value='t'>Aktif</option>
                            <option value='f'>Non Aktif</option>
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