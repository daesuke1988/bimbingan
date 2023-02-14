<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Sweet Alert -->
<link href="<?php echo base_url(); ?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Riwayat Pembayaran
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('message_pembayaran')) {
                echo "<i>" . $this->session->flashdata('message_pembayaran') . "</i>";
            }
            ?>
            <div class="table-responsive">
                <div class="form-group row">
                    <div class="col-sm-1">
                        <a class="btn btn-success" href="<?= base_url() ?>pembayaran/insert"> <i class="fa fa-plus-square"></i> Tambah</a>
                    </div>
                    <div class="col-sm-3">
                        <select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control">
                            <option value=""> :: Pilih Jenis Pembayaran ::</option>
                            <option value="KKL"> KKL </option>
                            <option value="Kerja Praktek"> Kerja Praktek </option>
                            <option value="Skripsi"> Skripsi </option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="approv_dosen" id="approv_dosen" class="form-control">
                            <option value=""> :: Pilih Status :: </option>
                            <option value="t"> Selesai </option>
                            <option value="f"> Belum Selesai </option>
                        </select>
                    </div>
                </div>
                <hr color="green">
                <div id="result">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sweet alert -->
<script src="<?php echo base_url(); ?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
<script>
    function confirmDelete(id) {
        swal({
                title: "Apakah anda yakin?",
                text: "Apakah anda yakin akan menghapus data ini!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Tidak, Batal Hapus!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?php echo base_url('pembayaran/delete'); ?>",
                        type: "POST",
                        data: {
                            id_pembayaran: id
                        },
                        dataType: "html",
                        success: function() {
                            swal({
                                title: "Berhasil",
                                text: "Data Berhasil Dihapus!",
                                type: "success",
                                confirmButtonText: "Ok !",
                                allowOutsideClick: "true"
                            }, function() {
                                location.reload();
                            })
                        }
                    });
                } else {
                    swal("Data Masih Tersimpan!", "", "error");
                }
            });
    }

    var $modal = '';
    // jQuery.noConflict();
    $(document).ready(function() {
        $modal = $('#myModal').modal({
            show: false
        });

    });

    $(document).ready(function() {

        load_data();

        function load_data(approv_dosen, jenis_pembayaran) {
            $.ajax({
                url: "<?php echo base_url(); ?>pembayaran/search",
                method: "POST",
                data: {
                    approv_dosen: approv_dosen,
                    jenis_pembayaran: jenis_pembayaran
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#jenis_pembayaran').change(function() {
            var approv_dosen = $("#approv_dosen").val();
            var jenis_pembayaran = $("#jenis_pembayaran").val();
            load_data(approv_dosen, jenis_pembayaran)
        });

        $('#approv_dosen').change(function() {
            var approv_dosen = $("#approv_dosen").val();
            var jenis_pembayaran = $("#jenis_pembayaran").val();
            load_data(approv_dosen, jenis_pembayaran)
        });
    });
</script>