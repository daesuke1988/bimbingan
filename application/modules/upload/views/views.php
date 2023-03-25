<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Sweet Alert -->
<link href="<?php echo base_url(); ?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js" xmlns="http://www.w3.org/1999/html"></script>
<?php
if ($this->session->flashdata('message')) {
    echo "<i>" . $this->session->flashdata('message') . "</i>";
}
?>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            :: Data Laporan Skripsi
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
                        <label class="col-form-label" for="cname">Filter</label>
                    </div>
                    <div class="col-sm-3">
                        <select name="tahun" id="tahun" class="form-control">
                            <option value=""> :: Pilih Tahun ::</option>
                            <option value="2021"> 2021 </option>
                            <option value="2022"> 2022 </option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="semester" id="semester" class="form-control">
                            <option value=""> :: Pilih Semester :: </option>
                            <option value="1"> Ganjil </option>
                            <option value="2"> Genap </option>
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
                        url: "<?php echo base_url('upload/delete'); ?>",
                        type: "POST",
                        data: {
                            id_upload: id
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

        function load_data(tahun, semester) {
            $.ajax({
                url: "<?php echo base_url(); ?>upload/search",
                method: "POST",
                data: {
                    tahun: tahun,
                    semester: semester
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#tahun').change(function() {
            var semester = $("#semester").val();
            var tahun = $("#tahun").val();
            load_data(tahun, semester)
        });

        $('#semester').change(function() {
            var semester = $("#semester").val();
            var tahun = $("#tahun").val();
            load_data(tahun, semester)
        });
    });
</script>