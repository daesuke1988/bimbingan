<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Seting Dosen Pembimbing Kuliah Kerja Lapangan
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('message')) {
                echo "<i>" . $this->session->flashdata('message') . "</i>";
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>bimbingan/kkl/set_dosen/<?= urlencode(base64_encode($id_kelompok)); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Kelompok</label>
                    <input type="text" class="form-control" placeholder="Masukan Rencana Judul Kerja Praktek" value="<?php echo $kkl['nm_kelompok']; ?>" disabled>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                </div>
                <div class="form-group">
                    <label>Tahun </label>
                    <input type="number" class="form-control" placeholder="Masukan Tahun Aktif" value="<?php echo $kkl['tahun']; ?>" disabled>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                </div>
                <div class="form-group">
                    <label>Semester </label>
                    <input type="text" class="form-control" placeholder="Masukan Tahun Aktif" value="<?php echo ($kkl['semester'] == '1') ? 'Ganjil' : 'Genap'; ?>" disabled>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label>Usulan Dosen Pembimbing 1</label>
                    <select class="select2_demo_1 form-control" name="dosen" id="dosen">
                        <option value=""> :: Pilih Dosen :: </option>
                        <?php
                        foreach ($dosen as $key => $row) {
                            echo '<option value="' . $row['id'] . '"> ' . $row['nm_dosen'] . ' </option>';
                        }
                        ?>
                    </select>
                    <span class="form-text m-b-none">
                        <font color="red">wajib diisi.*</font>
                    </span>
                    <?php echo form_error('dosen1') ?>
                </div>
                <div class="form-group">
                    <label>Nomor SK </label>
                    <input type="number" class="form-control" name="no_sk" placeholder="Masukan Nomor SK Kerja Praktek" value="<?php echo $this->input->post('no_sk'); ?>">
                </div>
                <div class="form-group" id="data_1">
                    <label class="font-normal">Tanggal Awal</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_awal" value="<?php echo $this->input->post('tgl_awal'); ?>">
                    </div>
                </div>
                <div class="form-group" id="data_1">
                    <label class="font-normal">Tanggal Akhir</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_akhir" value="<?php echo $this->input->post('tgl_akhir'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-primary" onclick="showDetail(<?php echo $kkl['id_kelompok_kkl']; ?>);" data-target="#myModal" data-toggle="tooltip" data-original-title="Daftar Peserta KKL"><i class="fa fa-users"></i> Daftar Peserta KKL</a>
                    <a class="btn btn-default" data-placement="top" data-toggle="tooltip" data-original-title="Kembali" href="javascript:window.history.go(-1);">
                        <i class="fa fa-mail-reply"></i> Kembali
                    </a>
                    <button class="btn btn-success btn-sm" type="submit"> Simpan <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade">
    <!--    <div id="cariDialog" title="Detail">-->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 80%;">
            <!-- Modal content-->
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"> Daftar Peserta Kuliah Kerja Lapang</h4>
                </div>
                <div class="modal-body" id="record">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Data picker -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script>
    var $modal = '';
    // jQuery.noConflict();
    $(document).ready(function() {
        $modal = $('#myModal').modal({
            show: false
        });

    });

    function showDetail(id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('bimbingan/kkl/daftar_peserta'); ?>',
            cache: false,
            data: {
                id_kelompok: id
            },
            dataType: 'html',
            success: function(data) {
                $modal.find('#record').html(data);
                $modal.modal('show');
            },

            error: function(xhr, status, msg_error) {
                $modal.find('#record').html("");
                alert("Data gagal ditampilkan. \n " + msg_error);
                return false;
            }
        });
    }

    $('#data_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });
</script>