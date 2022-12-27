<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Sweet Alert -->
<link href="<?php echo base_url(); ?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

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
            <a class="btn btn-success" href="<?= base_url() ?>pembayaran/insert"> <i class="fa fa-plus-square"></i> Tambah</a>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Mahasiswa</th>
                            <th>Nama</th>
                            <th>Jenis Pembayaran</th>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    //                            if(count($all_groups)){
                    foreach ($pembayaran->result() as $row) {
                    ?>
                        <tr>
                            <td width="5%"><?php echo $i++; ?></td>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->jenis_pembayaran; ?></td>
                            <td><?php echo $row->tahun; ?></td>
                            <td><?php echo $row->semester == '1' ? 'Ganjil' : 'Gasal'; ?></td>
                            <td width="15%">
                                <div class="tooltip-demo">
                                    <a class="btn btn-outline btn-info" data-placement="top" data-toggle="tooltip" data-original-title="Edit" href="<?= base_url() ?>pembayaran/update/<?= urlencode(base64_encode($row->id)); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-outline btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="Hapus" href="#" onclick="return confirmDelete(<?php echo $row->id; ?>)">
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
</script>