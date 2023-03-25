<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<link href="<?php echo base_url(); ?>assets/select2/select2.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/select2/select2.js"></script>
<link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

<script>
    jQuery.noConflict();
    (function($) {
        $(document).ready(function() {
            $(".select").select2();
            $.getJSON("<?php echo base_url(); ?>jadwal/user", function(data) {
                $.each(data, function($e, i) {
                    $('#selectlist_multiple').append('<option value=' + $e + '>' + i + '</option>');
                });
            });
        });
    })(jQuery);
</script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Jadwal Seminar
        </div>
        <div class="panel-body">
            <div class="panel-body">
                <?php
                if ($this->session->flashdata('message')) {
                    echo "<i>" . $this->session->flashdata('message') . "</i>";
                }
                ?>
                <form method="post" action="<?php echo base_url(); ?>jadwal/insert" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Penerima </label>
                        <br />
                        <select multiple id="selectlist_multiple" class="select" style="width: 80%;" data-placeholder="Pilih Penerima" name="tujuan[]" required>

                        </select>
                        <br />
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('judul') ?>
                    </div>
                    <div class="form-group">
                        <label> Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" value="<?php echo $this->input->post('keterangan'); ?>" required>
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo form_error('keterangan') ?>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="font-normal">Tanggal</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <!-- <input type="text" class="form-control" name="tanggal" value=""> -->
                            <input class="form-control date-picker" type="date" data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-provide="datepicker" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>">
                        </div>
                        <?php echo form_error('tanggal') ?>
                    </div>
                    <div class="form-group">
                        <label>Upload </label>
                        <div class="custom-file">
                            <input type="file" name="file" class="form-control" accept="application/pdf" required>
                        </div>
                        <span class="form-text m-b-none">
                            <font color="red">wajib diisi.*</font>
                        </span>
                        <?php echo @$error_upload; ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm" type="submit">Simpan <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>