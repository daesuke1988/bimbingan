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
            :: Data Jadwal Seminar
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('message_pembayaran')) {
                echo "<i>" . $this->session->flashdata('message_pembayaran') . "</i>";
            }
            ?>
            <div class="table-responsive">
                <?php
                $group = $this->session->userdata('group_id');
                if ($group == '1') {
                ?>
                    <a class="btn btn-success" href="<?= base_url() ?>jadwal/insert"> <i class="fa fa-plus-square"></i> Tambah </a>
                    <br />
                    <br />
                <?php
                }
                ?>

                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Penerima</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    //                            if(count($all_groups)){
                    foreach ($jadwal->result() as $row) {
                    ?>
                        <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                            <td><?php echo date_indo(date("Y-m-d", strtotime($row->date))) ?></td>
                            <td><?php
                                $penerima = $this->jadwalmodels->penerima($row->id);
                                $j = 1;
                                foreach ($penerima->result() as $p)
                                    echo $j++ . '. ' . $p->nama_lengkap . br(1); ?></td>
                            <td><?php
                                if (!is_null($row->image)) { ?>
                                    <div class="tooltip-demo">
                                        <a class="btn btn-outline btn-success" data-placement="top" data-toggle="tooltip" data-original-title="Download" href="<?php echo base_url(); ?>jadwal/download/<?php echo $row->id; ?>">
                                            <i class="fa fa-download"> Download</i>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </td>
                            <td width="15%">
                                <div class="tooltip-demo">
                                    <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>jadwal/update/<?= urlencode(base64_encode($row->id)); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="<?= base_url() ?>jadwal/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    //                            }
                    ?>
                </table>
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
                        url: "<?php echo base_url('jadwal/delete'); ?>",
                        type: "POST",
                        data: {
                            id_jadwal: id
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
                url: "<?php echo base_url(); ?>jadwal/search",
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